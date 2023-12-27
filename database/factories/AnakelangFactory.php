<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anakelang>
 */
class AnakelangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_anak'=>$this->faker->firstNameMale(),
            'email'=>$this->faker->unique->email(),
            'tanggal_lahir'=>$this->faker->dateTimeBetween('2008-01-01', '2015-12-31')
            ->format('Y-m-d'),
            'alamat'=>$this->faker->address(),
            'sekolah'=>$this->faker->highSchool(),
            'telp_wali'=>$this->faker->phoneNumber(),
            'nama_wali'=>$this->faker->name()            
        ];
    }
}
