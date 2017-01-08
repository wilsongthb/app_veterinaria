<?php

use Illuminate\Database\Seeder;
// use database\seeds;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(pruebaSeeder::class);
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
            'telefono' => '972651131',
            'dni' => '67867854',
            'users_id' => '1',//apuntando a 'default user'
            'ubicacion' => 'ATUNNCOLLA'
        ]);
        // ganado
        DB::table('ganado')->insert([
            'id' => '1',
            'nombre' => 'MOCHITA',
            'fecha_nacimiento' => '2014/01/01',
            'padre_nombre' => 'ZAID',
            'estado' => 'celo',
            'color' => 'NEGRO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '2',
            'nombre' => 'YENY',
            'fecha_nacimiento' => '2014/01/01',
            'padre_nombre' => 'JAKARE',
            'madre_nombre' => 'MOCHA',
            'estado' => 'preñada',
            'color' => 'PARDO',
            'raza' => 'CRUCE BROMN',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '3',
            'nombre' => 'LILA',
            'fecha_nacimiento' => '2014/01/01',
            'color' => 'PARDO',
            'estado' => 'preñada',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '4',
            'nombre' => 'CAMUCHA',
            'fecha_nacimiento' => '2014/01/01',
            'color' => 'OSCURO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '5',
            'nombre' => 'MARIA',
            'fecha_nacimiento' => '2014/01/01',
            'madre_nombre' => 'CACHUDA',
            'estado' => 'preñada',
            'color' => 'BLANCO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '6',
            'nombre' => 'CAMY',
            'fecha_nacimiento' => '2014/01/01',
            'color' => 'NEGRO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('ganado')->insert([
            'id' => '7',
            'nombre' => 'YUDY',
            'fecha_nacimiento' => '2014/01/01',
            'color' => 'BLANCO',
            'raza' => 'BROMNSS',
            'productor_id' => '1',
            'sexo' => 'V'
        ]);
        DB::table('historial_ganado')->insert([
            'titulo' => 'ULTIMO PARTO',
            'descripcion' => 'tiende a quedarse postrada',
            'ganado_id' => '1',
            'created_at' => '2017-01-01',
        ]);
        DB::table('historial_ganado')->insert([
            'titulo' => 'ULTIMO PARTO',
            'descripcion' => 'tiene el problema de retencion de placenta',
            'ganado_id' => '1',
            'created_at' => '2016-07-01',
        ]);
    }
}
