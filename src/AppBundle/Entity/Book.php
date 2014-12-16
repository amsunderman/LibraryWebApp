<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="books")
 * @ORM\Entity
 */
class Book
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Groupnumber", type="integer")
     */
    private $Groupnumber;

    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Bookid", type="integer")
     */
    private $bookid;

    /**
     * @var string
     *
     * @ORM\Column(name="Booktitle", type="string", length=30)
     */
    private $booktitle;

    /**
     * @var string
     *
     * @ORM\Column(name="Author", type="string", length=100)
     */
    private $author;

    /**
     * Set groupnumber
     *
     * @param integer $groupnumber
     * @return Book
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
     * Set bookid
     *
     * @param integer $bookid
     * @return Book
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

    /**
     * Set booktitle
     *
     * @param string $booktitle
     * @return Book
     */
    public function setBooktitle($booktitle)
    {
        $this->booktitle = $booktitle;

        return $this;
    }

    /**
     * Get booktitle
     *
     * @return string
     */
    public function getBooktitle()
    {
        return $this->booktitle;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
