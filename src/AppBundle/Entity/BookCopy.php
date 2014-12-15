<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookCopy
 *
 * @ORM\Table(name = "bookscopy")
 * @ORM\Entity
 */
class BookCopy
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Groupnumber", type="integer")
     */
    private $groupnumber;

    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Copyid", type="integer")
     */
    private $copyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bookid", type="integer")
     */
    private $bookid;

    /**
     * Set groupnumber
     *
     * @param integer $groupnumber
     * @return BookCopy
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
     * Set copyid
     *
     * @param integer $copyid
     * @return BookCopy
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
     * Set bookid
     *
     * @param integer $bookid
     * @return BookCopy
     */
    public function setBookid($bookid)
    {
        $this->bookid = $bookid;

        return $this;
    }

    /**
     * Get bookid
     *
     * @return integer
     */
    public function getBookid()
    {
        return $this->bookid;
    }
}
