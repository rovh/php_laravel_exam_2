<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $place = new Place();
        $place->name = 'Area 1';
        $place->description = 'Ващи вещи чинятся';
        $place->repair = true;
        $place->work = false; 
        $place->save();

        $work = new Place();
        $work->name = 'Home 2';
        $work->description = 'Ваши вещи в работе';
        $work->repair = false;
        $work->work = true; 
        $work->save();

        $repair = new Place();
        $repair->name = 'Company 3';
        $repair->description = 'Ваши вещи чинятся и в работе';
        $repair->repair = true;
        $repair->work = true; 
        $repair->save();
    }
}
