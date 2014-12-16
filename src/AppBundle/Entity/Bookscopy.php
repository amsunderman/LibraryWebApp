<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookscopy
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Bookscopy
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
     * @ORM\Column(name="Shelfid", type="integer")
     */
    private $shelfid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Shelfloc", type="integer")
     */
    private $shelfloc;

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
     * @return Bookscopy
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
     * @return Bookscopy
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
     * Set shelfid
     *
     * @param integer $shelfid
     * @return Bookscopy
     */
    public function setShelfid($shelfid)
    {
        $this->shelfid = $shelfid;

        return $this;
    }

    /**
     * Get shelfid
     *
     * @return integer
     */
    public function getShelfid()
    {
        return $this->shelfid;
    }

    /**
     * Set shelfloc
     *
     * @param integer $shelfloc
     * @return Bookscopy
     */
    public function setShelfloc($shelfloc)
    {
        $this->shelfloc = $shelfloc;

        return $this;
    }

    /**
     * Get shelfloc
     *
     * @return integer
     */
    public function getShelfloc()
    {
        return $this->shelfloc;
    }

    /**
     * Set bookid
     *
     * @param integer $bookid
     * @return Bookscopy
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
