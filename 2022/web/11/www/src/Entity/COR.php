<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CORRepository")
 */
class COR
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
    public $joke;

    /**
     * @ORM\Column(type="integer")
     */
    public $sad;

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

    public function getJoke(): ?int
    {
        return $this->joke;
    }

    public function setJoke(int $joke): self
    {
        $this->joke = $joke;

        return $this;
    }

    public function getSad(): ?int
    {
        return $this->sad;
    }

    public function setSad(int $sad): self
    {
        $this->sad = $sad;

        return $this;
    }

}
