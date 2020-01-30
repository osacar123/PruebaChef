<?php

use Illuminate\Database\Seeder;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/heroesDefault.json");
        $data = json_decode($json);
        
        foreach ($data as $obj) {
            DB::table('heroes')->insert([
                'name' => $obj->name,
                'picture' => $obj->picture,
                'publisher' => $obj->publisher,
                'info' => $obj->info,
                'votes' => $obj->votes
            ]);
        }
        
    }
}
