<?php

namespace TallAndSassy\GrokLivewireJet\Tests\Feature\Models;

use TallAndSassy\GrokLivewireJet\Models\GrokLivewireJetModel;
use TallAndSassy\GrokLivewireJet\Tests\TestCase;

class GrokLivewireJetModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        $model = GrokLivewireJetModel::create(['name' => 'John']);
        $this->assertDatabaseCount('grok-livewire-jet', 1);
        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
