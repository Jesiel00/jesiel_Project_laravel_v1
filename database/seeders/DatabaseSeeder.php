<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('products')->insert(
            [
                'id'                => '1',
                'title_food'        => 'Modi sit est',
                'menu'              => 'Architecto ut aperiam autem id',
                'desc'              => 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka',
                'sub_desc'          => 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka',
                'image'             => 'assets/img/specials-1.jpg',
                'class'             =>  'img-fluid'
            ]
            );
        DB::table('products')->insert(
            [
                'id'              => '2',
                'title_food'      => 'Unde praesentium sed',
                'menu'            => 'Et blanditiis nemo veritatis excepturi',
                'desc'            => 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka',
                'sub_desc'        => 'Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal',
                'image'           => 'assets/img/specials-2.jpg',
                'class'           =>  'img-fluid'
            ]
            );
    }
}
