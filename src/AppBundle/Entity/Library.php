<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Library
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Library
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
     * @ORM\Column(name="Currentcopyid", type="integer")
     */
    private $currentcopyid;

    /**
     * Set groupnumber
     *
     * @param integer $groupnumber
     * @return Library
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
     * Set currentcopyid
     *
     * @param integer $currentcopyid
     * @return Library
     */
    public function setCurrentcopyid($currentcopyid)
    {
        $this->currentcopyid = $currentcopyid;

        return $this;
    }

    /**
     * Get currentcopyid
     *
     * @return integer
     */
    public function getCurrentcopyid()
    {
        return $this->currentcopyid;
    }
}
