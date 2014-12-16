<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loan
 *
 * @ORM\Table(name = "loanHistory")
 * @ORM\Entity
 */
class Loan
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Groupnumber", type="integer")
     */
    private $groupnumber;

    /**
     * @var string
     *
     * @ORM\Id @ORM\Column(name="Username", type="string", length=30)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Copyid", type="integer")
     */
    private $copyid;

    /**
     * @var string
     *
     * @ORM\Column(name="Duedate", type="string", length=30)
     */
    private $duedate;

    /**
     * @var string
     *
     * @ORM\Column(name="Returnedondate", type="string", length=30, nullable=true)
     */
    private $returnedondate = null;

    /**
     * Set groupnumber
     *
     * @param integer $groupnumber
     * @return Loan
     */
    public function setGroupnumber($groupnumber)
    {
        $this->groupnumber = $groupnumber;

        return $this;
    }

    /**
     * Get groupnumber
     *
     * @return integer
     */
    public function getGroupnumber()
    {
        return $this->groupnumber;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Loan
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set copyid
     *
     * @param integer $copyid
     * @return Loan
     */
    public function setCopyid($copyid)
    {
        $this->copyid = $copyid;

        return $this;
    }

    /**
     * Get copyid
     *
     * @return integer
     */
    public function getCopyid()
    {
        return $this->copyid;
    }

    /**
     * Set duedate
     *
     * @param \DateTime $duedate
     * @return Loan
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }

    /**
     * Get duedate
     *
     * @return \DateTime
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * Set returnedondate
     *
     * @param \DateTime $returnedondate
     * @return Loan
     */
    public function setReturnedondate($returnedondate)
    {
        $this->returnedondate = $returnedondate;

        return $this;
    }

    /**
     * Get returnedondate
     *
     * @return \DateTime
     */
    public function getReturnedondate()
    {
        return $this->returnedondate;
    }
}
