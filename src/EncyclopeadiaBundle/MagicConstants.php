<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 18/10/17
 * Time: 12:12
 */

namespace EncyclopeadiaBundle;

class MagicConstants
{
    const NORMAL = 'NORMAL';
    const RITUAL = 'RITUAL';
    const WINTER = 'WINTER';
    const FALL = 'FALL';
    const SUMMER = 'SUMMER';
    const SPRING = 'SPRING';
    const INCANTATION = 'INCANTATION';
    const LOW_LEVEL = 'LOW';
    const MID_LEVEL = 'MID';
    const HIGH_LEVEL = 'HIGH';
    const TOUCH = 'TOUCH';
    const SPELLCASTER = 'SPELLCASTER';
    const CLOSE = 'CLOSE';
    const FAR = 'FAR';
    const ILLIMITED = 'ILLIMITED';

    const MAGIC_CASTING_TYPE = [
        MagicConstants::NORMAL,
        MagicConstants::RITUAL,
    ];

    const MAGIC_TYPE = [
        MagicConstants::FALL,
        MagicConstants::SPRING,
        MagicConstants::SUMMER,
        MagicConstants::WINTER,
        MagicConstants::INCANTATION
    ];

    const MAGIC_LEVEL = [
        MagicConstants::LOW_LEVEL,
        MagicConstants::MID_LEVEL,
        MagicConstants::HIGH_LEVEL
    ];

    const MAGIC_RANGE = [
        MagicConstants::TOUCH,
        MagicConstants::SPELLCASTER,
        MagicConstants::CLOSE,
        MagicConstants::FAR,
        MagicConstants::ILLIMITED
    ];
}