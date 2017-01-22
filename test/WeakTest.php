<?php

namespace Kelunik\Callbacks\Test;

use function Kelunik\Callbacks\weakCallback;

class WeakTest extends \PHPUnit_Framework_TestCase {
    public function testAccept() {
        $this->assertSame(42, weakCallback(function (int $x) {
            return $x;
        })(42));

        $this->assertSame(42, weakCallback(function (int $x) {
            return $x;
        })("42"));
    }

    public function testReject() {
        $this->setExpectedException(\TypeError::class);

        weakCallback(function (int $x) {
            return $x;
        })("foobar");
    }
}
