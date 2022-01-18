<?php

namespace App\Models;

use Faker\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


abstract class Animal extends Model
{
    use HasFactory;

    public bool $hasFur = true;
    public int $numOfLegs = 4;

    /**
     * @return string
     */
    public function generateName(): string
    {
        $faker = Factory::create();
        return $faker->name();
    }

    /**
     * @return mixed
     */
    public function generateAge(): mixed
    {
        $faker = Factory::create();
        return $faker->numberBetween($min = 1, $max = 50);
    }

    /**
     * @return mixed
     */
    abstract public function generateSex(): mixed;
}
