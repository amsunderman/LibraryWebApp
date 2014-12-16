<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('default/login_attempt.html.twig');
    }

    /**
     * @Route("/signup", name="signup")
     */
    public function signup()
    {
        return $this->render('default/signup_attempt.html.twig');
    }

    /**
     * @Route("/login_validate", name="login_validate")
     */
    public function login_validate()
    {
        //start session
        $session = new Session();

        //save variables from post (hash password via md5)
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //look for user in database
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneByUsername($username);

        if($user)
        {
            //if user exist set user session variable and navigate home
            $session->set('user', $user);
            return $this->render('default/home.html.twig');
        }
        else
        {
            //else return back to login attempt with error
            return $this->render('default/login_attempt.html.twig', array('error', "invalid username and password"));
        }
    }

    /**
     * @Route("/signup_validate", name="signup_validate")
     */
    public function signup_validate()
    {
        //start session
        $session = new Session();

        //save post variables
        $username = $_POST["username"];
        $password = $_POST["password"];
        $passconf = $_POST["confirm_password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $librarian = $_POST["user_type"];
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];


        //validate username (alphanumeric and non-empty)
        if(!ctype_alnum($username) || empty($username))
        {
            return $this->render('default/signup_attempt.html.twig', array('error' => "Invalid Username Format: must be alphanumeric"));
        }

        //validate password (password and confirm match and not empty)
        if($password != $passconf || empty($password))
        {
            return $this->render('default/signup_attempt.html.twig', array('error', "Invalid Password Format: passwords must match"));
        }

        //validate email (xxx@yyy.zzz)
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return $this->render('default/signup_attempt.html.twig', array('error', "Invalid Email Format: must be XXX@XXX.XXX where X is alphanumeric"));
        }

        //validate phone number (xxx-xxx-xxxx or xxxxxxxxxx where x is numeric)
        if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone) && !preg_match("/^[0-9]{10}$/", $phone)) {
            return $this->render('default/signup_attempt.html.twig', array('error', "Invalid Phone Format: must be XXX-XXX-XXXX or XXXXXXXXXX where X is numeric"));
        }

        //validate librarian flag
        if(!isset($librarian))
        {
            return $this->render('default/signup_attempt.html.twig', array('error', "Must select user type (librarian or student)"));
        }

        //validate first name (alphabetic and not empty)
        if(!ctype_alpha ($firstname) || empty($firstname))
        {
            return $this->render('default/signup_attempt.html.twig', array('error', "Invalid First Name Format"));
        }

        //validate last name (alphabetic and not empty)
        if(!ctype_alpha ($lastname) || empty($lastname))
        {
            return $this->render('default/signup_attempt.html.twig', array('error', "Invalid Last Name Format"));
        }

        //construct new user
        $user = new User();
        $user->setGroupnumber(31);
        $user->setUsername($username);
        $user->setPassword(md5($password));
        $user->setEmail($email);
        $user->setPhone($phone);
        if(strcmp($librarian, "Librarian") == 0)
        {
            $user->setLibrarian(true);
        }
        else
        {
            $user->setLibrarian(false);
        }
        $user->setFirstname($firstname);
        $user->setLastname($lastname);

        //get database manager
        $em = $this->getDoctrine()->getManager();

        //insert user into database
        $em->persist($user);
        $em->flush();

        //set session user and display homepage
        $session->set('user', $user);
        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        $session = new Session();
        $session->remove('user');
        $session->clear();
        return $this->render('default/login.html.twig');
    }
}
