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
     * @ORM\Column(name="Numbooks", type="integer")
     */
    private $numbooks;

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
     * Set numbooks
     *
     * @param integer $numbooks
     * @return Shelf
     */
    public function setNumbooks($numbooks)
    {
        $this->numbooks = $numbooks;

        return $this;
    }

    /**
     * Get numbooks
     *
     * @return integer
     */
    public function getNumbooks()
    {
        return $this->numbooks;
    }
}
