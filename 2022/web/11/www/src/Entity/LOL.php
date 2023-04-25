<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LOLRepository")
 */
class LOL
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $avg;

    /**
     * @ORM\Column(type="integer")
     */
    public $trd;

    /**
     * @ORM\Column(type="integer")
     */
    public $act;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvg(): ?int
    {
        return $this->avg;
    }

    public function setAvg(int $avg): self
    {
        $this->avg = $avg;

        return $this;
    }

    public function getTrd(): ?int
    {
        return $this->trd;
    }

    public function setTrd(int $trd): self
    {
        $this->trd = $trd;

        return $this;
    }

    public function getAct(): ?int
    {
        return $this->act;
    }

    public function setAct(int $act): self
    {
        $this->act = $act;

        return $this;
    }
}
