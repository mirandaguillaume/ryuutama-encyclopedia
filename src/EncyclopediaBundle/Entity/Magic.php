<?php

namespace EncyclopediaBundle\Entity;

use EncyclopediaBundle\MagicConstants;

/**
 * Magic.
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
     * Get id.
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Magic
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get mpCost.
     *
     * @return int
     */
    public function getMPCost(): ?int
    {
        return $this->mpCost;
    }

    /**
     * Set mpCost.
     *
     * @param int $mpCost
     *
     * @return Magic
     */
    public function setMPCost($mpCost): self
    {
        $this->mpCost = $mpCost;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * Set duration.
     *
     * @param string $duration
     *
     * @return Magic
     */
    public function setDuration($duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get target.
     *
     * @return string
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * Set target.
     *
     * @param string $target
     *
     * @return Magic
     */
    public function setTarget($target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get level.
     *
     * @return string
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * Set level.
     *
     * @param string $level
     *
     * @return Magic
     */
    public function setLevel($level): self
    {
        if (in_array($level, MagicConstants::MAGIC_LEVEL, true)) {
            $this->level = $level;
        } else {
            throw new \UnexpectedValueException();
        }

        return $this;
    }

    /**
     * Get spellRange.
     *
     * @return string
     */
    public function getSpellRange(): ?string
    {
        return $this->spellRange;
    }

    /**
     * Set spellRange.
     *
     * @param string $spellRange
     *
     * @return Magic
     */
    public function setSpellRange($spellRange): self
    {
        if (in_array($spellRange, MagicConstants::MAGIC_RANGE, true)) {
            $this->spellRange = $spellRange;
        }

        return $this;
    }

    /**
     * Get castingTime.
     *
     * @return string
     */
    public function getCastingTime(): ?string
    {
        return $this->castingTime;
    }

    /**
     * Set castingTime.
     *
     * @param string $castingTime
     *
     * @return Magic
     */
    public function setCastingTime($castingTime): self
    {
        if (in_array($castingTime, MagicConstants::MAGIC_CASTING_TYPE, true)) {
            $this->castingTime = $castingTime;
        }

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Magic
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Magic
     */
    public function setType($type): self
    {
        if (in_array($type, MagicConstants::MAGIC_TYPE, true)) {
            $this->type = $type;
        }

        return $this;
    }
}
