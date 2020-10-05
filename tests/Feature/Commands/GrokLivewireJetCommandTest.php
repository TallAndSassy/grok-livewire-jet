<?php


namespace TallAndSassy\GrokLivewireJet\Tests\Feature\Commands;

class GrokLivewireJetCommandTest extends \TallAndSassy\GrokLivewireJet\Tests\TestCase
{
    /** @test */
    public function test_command_works()
    {
        $this->artisan('hw')->assertExitCode(0);
        $this->artisan('hw')->expectsOutput('TallAndSassy/GrokLivewireJet/hw/tbd');
    }
}
