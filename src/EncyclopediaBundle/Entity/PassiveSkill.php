<?php

namespace EncyclopediaBundle\Entity;

/**
 * PassiveSkill.
 */
class PassiveSkill
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
     * @var string
     */
    private $effect;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $usableCircumstances;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return PassiveSkill
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set effect.
     *
     * @param string $effect
     *
     * @return PassiveSkill
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Get effect.
     *
     * @return string
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return PassiveSkill
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set usableCircumstances.
     *
     * @param string $usableCircumstances
     *
     * @return PassiveSkill
     */
    public function setUsableCircumstances($usableCircumstances)
    {
        $this->usableCircumstances = $usableCircumstances;

        return $this;
    }

    /**
     * Get usableCircumstances.
     *
     * @return string
     */
    public function getUsableCircumstances()
    {
        return $this->usableCircumstances;
    }
}
