# callbacks

This package allows to define strict and weak callbacks.

PHP 7 introduced `declare(strict_types=1);` which toggles the caller in being strict about the passed types or not. While this toggle behavior is OK for most code, it is not in case of callbacks. Interfaces accepting callbacks have to specifiy whether implementations MUST or MUST NOT use strict types now, otherwise behavior cannot guaranteed to be the same accross different implementations.

While interfaces might define always-strict or always-weak, this library allows callback authors toggle their callbacks independently.
