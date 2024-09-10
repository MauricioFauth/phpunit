<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Generator;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Property
{
    /**
     * @var non-empty-string
     */
    private string $name;

    /**
     * @var non-empty-string
     */
    private string $type;
    private bool $getHook;
    private bool $setHook;

    /**
     * @param non-empty-string $name
     * @param non-empty-string $type
     */
    public function __construct(string $name, string $type, bool $getHook, bool $setHook)
    {
        $this->name    = $name;
        $this->type    = $type;
        $this->getHook = $getHook;
        $this->setHook = $setHook;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function hasGetHook(): bool
    {
        return $this->getHook;
    }

    public function hasSetHook(): bool
    {
        return $this->setHook;
    }
}
