<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AnswersSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(HelpsSeeder::class);
        $this->call(ResultsSeeder::class);
        $this->call(MachineOutputsSeeder::class);

        Model::reguard();
    }
}
