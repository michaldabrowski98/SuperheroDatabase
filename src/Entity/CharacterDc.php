<?php

namespace App\Entity;

use App\Repository\CharacterDcRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterDcRepository::class)
 */
class CharacterDc
{
   
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $page_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlslug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ALIGN;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EYE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $HAIR;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SEX;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $GSM;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ALIVE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $APPEARANCES;

    /**
     * @ORM\Column(type="integer")
     */
    private $FIRST_APPEARANCE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $YEAR;

    public function getPageId(): ?int
    {
        return $this->page_id;
    }

    public function setPageId(int $page_id): self
    {
        $this->page_id = $page_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrlslug(): ?string
    {
        return $this->urlslug;
    }

    public function setUrlslug(string $urlslug): self
    {
        $this->urlslug = $urlslug;

        return $this;
    }

    public function getID(): ?string
    {
        $this->ID;

        return $this;
    }

    public function setID(string $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    public function getALIGN(): ?string
    {
        return $this->ALIGN;
    }

    public function setALIGN(string $ALIGN): self
    {
        $this->ALIGN = $ALIGN;

        return $this;
    }

    public function getEYE(): ?string
    {
        return $this->EYE;
    }

    public function setEYE(string $EYE): self
    {
        $this->EYE = $EYE;

        return $this;
    }

    public function getHAIR(): ?string
    {
        return $this->HAIR;
    }

    public function setHAIR(string $HAIR): self
    {
        $this->HAIR = $HAIR;

        return $this;
    }

    public function getSEX(): ?string
    {
        return $this->SEX;
    }

    public function setSEX(string $SEX): self
    {
        $this->SEX = $SEX;

        return $this;
    }

    public function getGSM(): ?string
    {
        return $this->GSM;
    }

    public function setGSM(string $GSM): self
    {
        $this->GSM = $GSM;

        return $this;
    }

    public function getALIVE(): ?string
    {
        return $this->ALIVE;
    }

    public function setALIVE(string $ALIVE): self
    {
        $this->ALIVE = $ALIVE;

        return $this;
    }

    public function getAPPEARANCES(): ?string
    {
        return $this->APPEARANCES;
    }

    public function setAPPEARANCES(string $APPEARANCES): self
    {
        $this->APPEARANCES = $APPEARANCES;

        return $this;
    }

    public function getFIRSTAPPEARANCE(): ?int
    {
        return $this->FIRST_APPEARANCE;
    }

    public function setFIRSTAPPEARANCE(int $FIRST_APPEARANCE): self
    {
        $this->FIRST_APPEARANCE = $FIRST_APPEARANCE;

        return $this;
    }

    public function getYEAR(): ?string
    {
        return $this->YEAR;
    }

    public function setYEAR(string $YEAR): self
    {
        $this->YEAR = $YEAR;

        return $this;
    }
}
