<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'nombre' => 'Samsung Galaxy S9',
            'precio' => 698.88,
            'imagen' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
         ]);
  
         DB::table('producto')->insert([
             'nombre' => 'Apple iPhone X',
             'precio' => 983.00,
             'imagen' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1'
  
         ]);
  
         DB::table('producto')->insert([
             'nombre' => 'Google Pixel 2 XL',
             'precio' => 675.00,
             'imagen' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1'
            
         ]);
  
         DB::table('producto')->insert([
             'nombre' => 'LG V10 H900',
             'precio' => 159.99,
             'imagen' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1'
             
         ]);
  
         DB::table('producto')->insert([
             'nombre' => 'Huawei Elate',
             'precio' => 68.00,
             'imagen' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg'
             
         ]);
  
         DB::table('producto')->insert([
             'nombre' => 'HTC One M10',
             'precio' => 129.99,
             'imagen' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg'
             
         ]);
    }
}
