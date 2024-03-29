<?php declare(strict_types=1);

namespace WyriHaximus\React\Parallel;

use Closure;
use React\Promise\PromiseInterface;
use WyriHaximus\PoolInfo\PoolInfoInterface;

interface PoolInterface extends PoolInfoInterface
{
    /**
     * @param Closure $callable
     * @param mixed[] $args
     * @return PromiseInterface
     */
    public function run(Closure $callable, array $args = []): PromiseInterface;

    /**
     * Gently close every thread in the pool.
     *
     * @return bool True on success, or false when for some reason this call has been ignored.
     */
    public function close(): bool;

    /**
     * Kill every thread in the pool.
     *
     * @return bool True on success, or false when for some reason this call has been ignored.
     */
    public function kill(): bool;
}
