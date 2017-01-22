<?php

namespace Kelunik\Callbacks;

function weakCallback(callable $callback) {
    return function (...$args) use ($callback) {
        return $callback(...$args);
    };
}
