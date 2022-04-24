<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $fistname = config("contoh.penulis.first");
        $lastname = config("contoh.penulis.last");
        $email = config("contoh.email");


        self::assertEquals("Tono", $fistname);
        self::assertEquals("Soepomo", $lastname);
        self::assertEquals("tono@gmail.com", $email);
    }
}
