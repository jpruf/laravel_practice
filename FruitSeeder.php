<?php

use Illuminate\Database\Seeder;
use App\Fruit;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruit = new Fruit();
        $fruit->name = "mango";
        $fruit->taste = 9;
        $fruit->save();
        
        $fruit = new Fruit();
        $fruit->name = "watermelon";
        $fruit->taste = 7;
        $fruit->save();

        $fruit = new Fruit();
        $fruit->name = "pineapple";
        $fruit->taste= 6;
        $fruit->save();
    }
}
