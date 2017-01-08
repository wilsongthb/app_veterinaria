<?php

use Illuminate\Database\Seeder;
use DB;

class pruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // usuario
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'default user',
            'email' => 'default@default.default',
            'password' => bcrypt('default'),
        ]);
        // productor
        DB::table('productor')->insert([
            'id' => '1',
            'nombre' => 'ANGEL VILCA APAZA',
            'email' => 'default@default.default',
            'users_id' => '1',//apuntando a 'default user'
            'ubicacion' => 'ATUNNCOLLA'
        ]);
        // ganado
        DB::table('ganado')->insert([
            'id' => '1',
            'nombre' => 'MOCHITA',
            'fecha_nacimiento' => '01-01-2014',
            'padre_nombre' => 'ZAID',
            'color' => 'NEGRO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '2',
            'nombre' => 'YENY',
            'fecha_nacimiento' => '01-01-2013',
            'padre_nombre' => 'JAKARE',
            'madre_nombre' => 'MOCHA',
            'color' => 'PARDO',
            'raza' => 'CRUCE BROMN',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '3',
            'nombre' => 'LILA',
            'fecha_nacimiento' => '01-01-2010',
            'color' => 'PARDO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '4',
            'nombre' => 'CAMUCHA',
            'fecha_nacimiento' => '01-06-2013',
            'color' => 'OSCURO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '5',
            'nombre' => 'MARIA',
            'fecha_nacimiento' => '01-06-2013',
            'madre_nombre' => 'CACHUDA',
            'color' => 'BLANCO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '6',
            'nombre' => 'CAMY',
            'fecha_nacimiento' => '01-00-2010',
            'color' => 'NEGRO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '7',
            'nombre' => 'YUDY',
            'fecha_nacimiento' => '01-06-2010',
            'color' => 'BLANCO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
    }
}
