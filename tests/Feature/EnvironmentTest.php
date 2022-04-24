<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testgetEnv()
    {
        // env (Env::get(""))
        $youtube = env('YOUTUBE');

        self::assertEquals('Program', $youtube);
    }
    public function testDefaultEnv()
    {
        $penulis = Env::get('Penulis', 'Primus');
        self::assertEquals('Primus', $penulis);
    }
}
