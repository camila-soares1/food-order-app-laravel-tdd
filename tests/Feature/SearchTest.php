<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    /** @test */
    public function food_search_page_is_accessible()
    {
        $this->get('/')
            ->assertOk();
    }
}
