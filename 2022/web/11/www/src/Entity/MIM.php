<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MIMRepository")
 */
class MIM
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
    public $smp;

    /**
     * @ORM\Column(type="integer")
     */
    public $stt;

    /**
     * @ORM\Column(type="integer")
     */
    public $atm;

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

    public function getSmp(): ?int
    {
        return $this->smp;
    }

    public function setSmp(int $smp): self
    {
        $this->smp = $smp;

        return $this;
    }

    public function getStt(): ?int
    {
        return $this->stt;
    }

    public function setStt(int $stt): self
    {
        $this->stt = $stt;

        return $this;
    }

    public function getAtm(): ?int
    {
        return $this->atm;
    }

    public function setAtm(int $atm): self
    {
        $this->atm = $atm;

        return $this;
    }

}
