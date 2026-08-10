<?php
/**
 * Tests for AutoDev
 */

use PHPUnit\Framework\TestCase;
use Autodev\Autodev;

class AutodevTest extends TestCase {
    private Autodev $instance;

    protected function setUp(): void {
        $this->instance = new Autodev(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autodev::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
