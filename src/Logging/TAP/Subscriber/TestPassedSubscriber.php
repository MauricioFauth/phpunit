<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\Tap;

use PHPUnit\Event\Test\Passed;
use PHPUnit\Event\Test\PassedSubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPassedSubscriber extends Subscriber implements PassedSubscriber
{
    public function notify(Passed $event): void
    {
        $this->logger()->testPassed($event);
    }
}
