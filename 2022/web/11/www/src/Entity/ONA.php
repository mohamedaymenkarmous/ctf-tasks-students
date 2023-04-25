<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ONARepository")
 */
class ONA
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
    public $prc;

    /**
     * @ORM\Column(type="integer")
     */
    public $ess;

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

    public function getPrc(): ?int
    {
        return $this->prc;
    }

    public function setPrc(int $prc): self
    {
        $this->prc = $prc;

        return $this;
    }

    public function getEss(): ?int
    {
        return $this->ess;
    }

    public function setEss(int $ess): self
    {
        $this->ess = $ess;

        return $this;
    }

}
