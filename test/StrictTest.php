<?php

namespace Kelunik\Callbacks\Test;

use function Kelunik\Callbacks\strictCallback;

class StrictTest extends \PHPUnit_Framework_TestCase {
    public function testAccept() {
        $this->assertSame(42, strictCallback(function (int $x) {
            return $x;
        })(42));
    }

    public function testReject() {
        $this->setExpectedException(\TypeError::class);

        strictCallback(function (int $x) {
            return $x;
        })("42");
    }
}
