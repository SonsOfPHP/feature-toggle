<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\FeatureToggle\Toggle;

use SonsOfPHP\Contract\FeatureToggle\ContextInterface;
use SonsOfPHP\Contract\FeatureToggle\ToggleInterface;

/**
 * Always enabled.
 *
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
class AlwaysEnabledToggle implements ToggleInterface
{
    public function isEnabled(?ContextInterface $context = null): bool
    {
        return true;
    }
}
