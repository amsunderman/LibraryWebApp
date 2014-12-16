<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Library;
use AppBundle\Entity\User;
use AppBundle\Entity\Book;
use AppBundle\Entity\Bookscopy;
use AppBundle\Entity\Loan;
use AppBundle\Entity\Shelf;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LibraryController extends Controller
{
	/**
     * @Route("/loadLibrary", name="loadLibrary")
     */
    public function loadLibrary()
    {
    	$session = new Session();

    	//book matrix (library representation)
    	$book_matrix = array(array());

    	//get library stats
        $library = $this->getDoctrine()
            ->getRepository('AppBundle:Library')
            ->findByGroupnumber(31);

        //if library doesn't exist in database, make it
        if(!$library)
        {
        	$library = new Library();
        	$library->setGroupnumber(31);
        	$library->setCurrentcopyid(0);

        	//get database manager
	        $em = $this->getDoctrine()->getManager();

	        //insert user into database
	        $em->persist($library);
	        $em->flush();

        }

        //generate or load all 10 shelves
        for($i = 1; $i <= 10; $i++)
        {
        	//check to see if shelf is in database
        	$current_shelf = $this->getDoctrine()
            ->getRepository('AppBundle:Shelf')
            ->findByShelfid($i);

            //if shelf isn't in database add it
            if(!$current_shelf)
            {
				//add shelf to library
            	$current_shelf = new Shelf();
            	$current_shelf->setGroupnumber(31);
            	$current_shelf->setShelfid($i);
            	$current_shelf->setNumbooks(0);

            	//get database manager
		        $em = $this->getDoctrine()->getManager();

		        //insert user into database
		        $em->persist($current_shelf);
		        $em->flush();
            }
        }

        //load books from database
        $books = $this->getDoctrine()
            ->getRepository('AppBundle:Bookscopy')
            ->findAll();

        //place books on proper shelf
        foreach($books as $book)
        {
        	$book->getShelfid();
        	$book_matrix[$book->getShelfid()][$book->getShelfloc()] = $book;
        }

        $session->set('book_matrix', $book_matrix);

        return $this->render('default/library.html.twig', array('book_matrix' => $book_matrix));
    }

    /**
     * @Route("/getTitle", name="getTitle")
     */
    public function getTitle()
    {
    	$session = new Session();

    	// get book id from url
    	$bookid = $session->get('bookid');

    	// get book from database and print its title via twig template
    	$book = $this->getDoctrine()
            ->getRepository('AppBundle:Book')
            ->findOneByBookid($bookid);
        $title = $book->getBooktitle();

        return $this->render('default/title.html.twig', array('title' =>$title));
    }

    /**
     * @Route("/getBookDetails", name="getBookDetails")
     */
    public function getBookDetails()
    {
    	$session = new Session();

    	//get url variables
    	$bookid = $_GET['bookid'];
    	$copyid = $_GET['copyid'];

    	//get book information
    	$book = $this->getDoctrine()
            ->getRepository('AppBundle:Book')
            ->findOneByBookid($bookid);

        //get loan information for this copy
        $loan = $this->getDoctrine()
        	->getRepository('AppBundle:Loan')
        	->findOneByCopyid($copyid);

       	//initialized loaned out by me to false (innocent until proven guilty)
 		$loaned_out_by_me = false;

 		//if there is no loan on file, then the book isn't loaned out
       	if(!$loan)
       	{
       		$loaned_out = false;
       	}
       	else
       	{
       		//if returned on date is not null than the book has been returned
       		//and is no longer loaned out
       		if($loan->getReturnedondate)
       		{
       			$loaned_out = false;
       		}
       		else
       		{
       			//we know the book is loaned out
       			$loaned_out = true;
       			if(strcmp($loan->getUsername(), $session.get('user').getUsername()) == 0)
       			{
       				//the book is loaned out by current user
       				$loaned_out_by_me = true;
       			}
       		}
       	}

       	//build book details twig template with necessary information
    	return $this->render('default/bookdetails.html.twig', array('book' => $book, 'copyid' => $copyid,
    		'loaned_out' => $loaned_out, 'loaned_out_by_me' => $loaned_out_by_me));
    }

	/**
     * @Route("/addBook", name="addBook")
     */
    public function addBook()
    {
    	$session = new Session();

    	//book matrix (library representation)
    	$book_matrix = array(array());

        //load books from database
        $books = $this->getDoctrine()
            ->getRepository('AppBundle:Bookscopy')
            ->findAll();

        //place books on proper shelf
        foreach($books as $book)
        {
        	$book->getShelfid();
        	$book_matrix[$book->getShelfid()][$book->getShelfloc()] = $book;
        }

    	//save post variables
    	$bookid = $_POST['bookid'];
    	$bookName = $_POST['name'];
    	$bookAuthor = $_POST['author'];
    	$numCopies = $_POST['numcopies'];

    	//get library stats
        $library = $this->getDoctrine()
            ->getRepository('AppBundle:Library')
            ->findOneByGroupnumber(31);

        //make new book
    	$newBook = new Book();
    	$newBook->setGroupnumber(31);
    	$newBook->setBookid($bookid);
    	$newBook->setBooktitle($bookName);
    	$newBook->setAuthor($bookAuthor);

    	//get database manager
        $em = $this->getDoctrine()->getManager();

        //insert user into database
        $em->persist($newBook);
        $em->flush();

        //loop through shelves and find empty locations to add books
    	for($i = 1; $i <= 10; $i++)
    	{
    		for($j = 1; $j <= 10; $j++)
    		{
    			//if we have added all of the necessary copies, we are done
    			if($numCopies == 0)
    			{
    				break;
    			}
    			//if the current location in the matrix isn't set, then we can add the book there
    			if(!isset($book_matrix[$i][$j]))
    			{
    				$newBookCopy = new Bookscopy();
    				$newBookCopy->setGroupnumber(31);
    				$library->setCurrentcopyid($library->getCurrentcopyid() + 1);
    				$newBookCopy->setCopyid($library->getCurrentcopyid());
    				$newBookCopy->setShelfid($i);
    				$newBookCopy->setShelfloc($j);
    				$newBookCopy->setBookid($bookid);

    				$book_matrix[$i][$j] = $newBookCopy;

    				//get database manager
			        $em = $this->getDoctrine()->getManager();

			        //insert user into database
			        $em->persist($newBookCopy);
			        $em->flush();

			        $numCopies--;
    			}
    		}
    		//if we have added all of the necessary copies, we are done
    		if($numCopies == 0)
    		{
    			break;
    		}
    	}

    	//save book matrix into session and navigate home
    	$session->set('book_matrix', $book_matrix);
    	return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/deleteBook", name="deleteBook")
     */
    public function deleteBook()
    {
    	$session = new Session();

    	//get url variable
    	$bookid = $_GET['bookid'];

    	//get book copies for the current book id
    	$bookscopy = $this->getDoctrine()
            ->getRepository('AppBundle:Bookscopy')
            ->findByBookid($bookid);

        //get the book the librarian would like to delete
        $book = $this->getDoctrine()
        	->getRepository('AppBundle:Book')
        	->findOneByBookid($bookid);

       	//delete copies
       	foreach($bookscopy as $bookcopy)
       	{
       		$em = $this->getDoctrine()->getManager();
       		$em->remove($bookcopy);
       		$em->flush();
       	}

       	//delete book
       	$em = $this->getDoctrine()->getManager();
   		$em->remove($book);
   		$em->flush();

   		//reinitialize book_matrix since it has changed
   		$book_matrix = array(array());

   		//load books from database
        $books = $this->getDoctrine()
            ->getRepository('AppBundle:Bookscopy')
            ->findAll();

        //place books on proper shelf
        foreach($books as $book)
        {
        	$book->getShelfid();
        	$book_matrix[$book->getShelfid()][$book->getShelfloc()] = $book;
        }

        $session->set('book_matrix', $book_matrix);

   		return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/checkoutBook", name="checkoutBook")
     */
    public function checkoutBook()
    {
    	$copyid = $_GET['copyid'];
    	var_dump($copyid);
    	exit;
    }
}
