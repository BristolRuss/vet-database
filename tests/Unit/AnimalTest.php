<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Animal;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class AnimalTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // private $animal;

    // public function __construct()
    // {
    //     parent::__construct();

    //     $this->animal = new Animal([
    //         "name" => "test",
    //         "biteyness" => 3,
    //         "species" => "dog",
    //         "date-of-birth" => "2012-12-20"
    //     ]);
    // }

    // public function testName()
    // {
    //     $animal = new Animal([
    //         "name" => "Hello",
    //         "biteyness" => 3,
    //         "species" => "dog",
    //         "date-of-birth" => "2012-12-20"
    //     ]);

    //     $this->assertSame($animal->name, "Hello");
    // }

    public function testDatabase()
    {
        Animal::create([
            "name" => "Hello",
            "biteyness" => 3,
            "species" => "dog",
            "date-of-birth" => "2012-12-20"
        ]);

        $animalFromDB = Animal::all()->first;

        $this->assertSame("Test", $animalFromDB->name);
    }

    // public function testName()
    // {
    //     $this->assertSame("test", $this->animal->name);
    // }
        
}
