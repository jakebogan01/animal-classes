<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Traits\AnimalLocations;

class Monkey extends Animal
{
    use HasFactory;
    use AnimalLocations;
    public string $species = 'Emperor Tamarin';
    public string $src = 'https://earthnworld.com/wp-content/uploads/2019/05/EMPEROR-TAMARIN-1024x683.jpg';
    public array $colors = [
        'gray', 'white', 'gray'
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
