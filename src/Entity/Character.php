<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterRepository::class)
 * @ORM\Table(name="`character`")
 */
class Character
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
     * @ORM\Column(type="string", length=255)
     */
    private $FIRST_APPEARANCE;

    /**
     * @ORM\Column(type="integer")
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

        return '';
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

    public function setAPPEARANCES(string $APPERANCES): self
    {
        $this->APPEARANCES = $APPERANCES;

        return $this;
    }

    public function getFIRSTAPPEARANCE(): ?string
    {
        return $this->FIRST_APPEARANCE;
    }

    public function setFIRSTAPPEARANCE(string $FIRST_APPEARANCE): self
    {
        $this->FIRST_APPEARANCE = $FIRST_APPEARANCE;

        return $this;
    }

    public function getYEAR(): ?int
    {
        return $this->YEAR;
    }

    public function setYEAR(int $YEAR): self
    {
        $this->YEAR = $YEAR;

        return $this;
    }
}
