<?php

namespace EncyclopeadiaBundle\Entity;
use EncyclopeadiaBundle\MagicConstants;

/**
 * Magic
 */
class Magic
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $mpCost;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $target;

    /**
     * @var string
     */
    private $level;

    /**
     * @var string
     */
    private $spellRange;

    /**
     * @var string
     */
    private $castingTime;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId() : integer
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Magic
     */
    public function setName($name): Magic
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set mpCost
     *
     * @param integer $mpCost
     *
     * @return Magic
     */
    public function setMPCost($mpCost): Magic
    {
        $this->mpCost = $mpCost;

        return $this;
    }

    /**
     * Get mpCost
     *
     * @return integer
     */
    public function getMPCost(): integer
    {
        return $this->mpCost;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Magic
     */
    public function setDuration($duration): Magic
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return Magic
     */
    public function setTarget($target): Magic
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return Magic
     */
    public function setLevel($level): Magic
    {
        if (in_array($level, MagicConstants::MAGIC_LEVEL)) {
            $this->level = $level;
        } else {
            throw new \UnexpectedValueException();
        }

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Set spellRange
     *
     * @param string $spellRange
     *
     * @return Magic
     */
    public function setSpellRange($spellRange): Magic
    {
        if (in_array($spellRange, MagicConstants::MAGIC_RANGE)) {
            $this->spellRange = $spellRange;
        }

        return $this;
    }

    /**
     * Get spellRange
     *
     * @return string
     */
    public function getSpellRange(): string
    {
        return $this->spellRange;
    }

    /**
     * Set castingTime
     *
     * @param string $castingTime
     *
     * @return Magic
     */
    public function setCastingTime($castingTime): Magic
    {
        if (in_array($castingTime, MagicConstants::MAGIC_CASTING_TYPE)) {
            $this->castingTime = $castingTime;
        }

        return $this;
    }

    /**
     * Get castingTime
     *
     * @return string
     */
    public function getCastingTime(): string
    {
        return $this->castingTime;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Magic
     */
    public function setDescription($description): Magic
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Magic
     */
    public function setType($type): Magic
    {
        if (in_array($type, MagicConstants::MAGIC_TYPE)) {
            $this->type = $type;
        }

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}

