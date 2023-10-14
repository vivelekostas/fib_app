<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

/**
 * The Source enum.
 *
 * @method static self CACHE()
 * @method static self APP()
 */
class Source extends Enum
{
    const CACHE = 'from Cache';
    const APP = 'from App';
}
