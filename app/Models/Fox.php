<?php

namespace App\Models;

use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Traits\AnimalLocations;

class Fox extends Animal
{
    use HasFactory;
    use AnimalLocations;
    public string $species = 'Fennec Fox';
    public string $src = 'https://cdn.hswstatic.com/gif/fennec-fox.jpg';
    public array $colors = [
        'amber', 'white', 'yellow'
    ];

    /**
     * @return string
     */
    public function generateSex(): string
    {
        $sex = ['M', 'F'];
        $i = array_rand($sex);

        return $sex[$i];
    }
}
