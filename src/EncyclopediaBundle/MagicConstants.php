<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 18/10/17
 * Time: 12:12.
 */

namespace EncyclopediaBundle;

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
        self::NORMAL,
        self::RITUAL,
    ];

    const MAGIC_TYPE = [
        self::FALL,
        self::SPRING,
        self::SUMMER,
        self::WINTER,
        self::INCANTATION,
    ];

    const MAGIC_LEVEL = [
        self::LOW_LEVEL,
        self::MID_LEVEL,
        self::HIGH_LEVEL,
    ];

    const MAGIC_RANGE = [
        self::TOUCH,
        self::SPELLCASTER,
        self::CLOSE,
        self::FAR,
        self::ILLIMITED,
    ];
}
