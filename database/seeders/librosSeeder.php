<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['isbn' => '2345',
            'titulo' => 'El Dorado',
            'precio' => 200000,
            'stock' => 20,
            'editorial' => '1',
            ],
            ['isbn' => '543',
            'titulo' => 'Cien Años de Soledad',
            'precio' => 250000,
            'stock' => 8,
            'editorial' => '2',
            ],
            ['isbn' => '8765',
            'titulo' => 'Yurupari',
            'precio' => 50000,
            'stock' => 15,
            'editorial' => '3',
            ],
           
            ['isbn' => '45663',
            'titulo' => 'Crepusculo',
            'precio' => 350000,
            'stock' => 3,
            'editorial' => '4',
            ],
            ['isbn' => '54983',
            'titulo' => 'El Universo National Geografic',
            'precio' => 350000,
            'stock' => 8,
            'editorial' => '5',
            ],
            
        ];
        DB::table('libro')->insert($datos);
    }
}
