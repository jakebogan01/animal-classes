<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Traits\AnimalLocations;

class Sloth extends Animal
{
    use HasFactory;
    use AnimalLocations;
    public string $species = 'Bradypus pygmaeus';
    public string $src = 'https://www.edgeofexistence.org/wp-content/uploads/2017/06/Bradypus-pygmaeus_2_Bryson-Voirin.jpg';
    public array $colors = [
        'amber', 'gray', 'orange'
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
