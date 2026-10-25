<?php
/**
 * Tests for SolidityVesper
 */

use PHPUnit\Framework\TestCase;
use Solidityvesper\Solidityvesper;

class SolidityvesperTest extends TestCase {
    private Solidityvesper $instance;

    protected function setUp(): void {
        $this->instance = new Solidityvesper(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityvesper::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
