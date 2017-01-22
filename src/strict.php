<?php

declare(strict_types=1);

namespace Kelunik\Callbacks;

function strictCallback(callable $callback) {
    return function (...$args) use ($callback) {
        return $callback(...$args);
    };
}
