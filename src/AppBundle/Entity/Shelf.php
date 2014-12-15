<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shelf
 *
 * @ORM\Table(name = "shelves")
 * @ORM\Entity
 */
class Shelf
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
     * @ORM\Id @ORM\Column(name="Shelfid", type="integer")
     */
    private $shelfid;

    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="Copyid", type="integer")
     */
    private $copyid;

    /**
     * Set groupnumber
     *
     * @param integer $groupnumber
     * @return Shelf
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
     * Set shelfid
     *
     * @param integer $shelfid
     * @return Shelf
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
     * Set copyid
     *
     * @param integer $copyid
     * @return Shelf
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
}
