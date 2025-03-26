<?php

namespace CristianRico\TestSEO\Support;

trait Memo
{
    protected array $_memoized = [];

    /**
     * @template TValue
     *
     * @param  callable(): TValue  $value
     * @return TValue
     */
    protected function memo(string $key, callable $value): mixed
    {
        return $this->_memoized[$key] ??= $value();
    }
}
