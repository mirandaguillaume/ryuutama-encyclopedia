<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 26/10/17
 * Time: 16:55.
 */

namespace EncyclopediaBundle\Entity;

class ActiveSkill extends PassiveSkill
{
    /**
     * @var string
     */
    private $usedStat;

    /**
     * @var string
     */
    private $targetNumber;

    /**
     * Set usedStat.
     *
     * @param string $usedStat
     *
     * @return PassiveSkill
     */
    public function setUsedStat($usedStat)
    {
        $this->usedStat = $usedStat;

        return $this;
    }

    /**
     * Get usedStat.
     *
     * @return string
     */
    public function getUsedStat()
    {
        return $this->usedStat;
    }

    /**
     * Set targetNumber.
     *
     * @param string $targetNumber
     *
     * @return PassiveSkill
     */
    public function setTargetNumber($targetNumber)
    {
        $this->targetNumber = $targetNumber;

        return $this;
    }

    /**
     * Get targetNumber.
     *
     * @return string
     */
    public function getTargetNumber()
    {
        return $this->targetNumber;
    }
}
