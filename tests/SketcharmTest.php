<?php
/**
 * Tests for SketchArm
 */

use PHPUnit\Framework\TestCase;
use Sketcharm\Sketcharm;

class SketcharmTest extends TestCase {
    private Sketcharm $instance;

    protected function setUp(): void {
        $this->instance = new Sketcharm(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketcharm::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
