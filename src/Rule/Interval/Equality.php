<?php
declare(strict_types=1);

namespace Interval\Rule\Interval;

use Interval\Interval;

/**
 * Class Equality
 * @package Interval\Rule\Interval
 */
class Equality
{
    /**
     * Returns true if the second interval is entirely included in the first one
     * @param Interval $first
     * @param Interval $second
     * @return bool
     */
    public function assert(Interval $first, Interval $second): bool
    {
        return
            $first->getStart()->equalTo($second->getStart()) &&
            $first->getEnd()->equalTo($second->getEnd());
    }
}
