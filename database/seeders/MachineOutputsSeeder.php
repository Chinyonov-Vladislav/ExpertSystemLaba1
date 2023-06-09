<?php

namespace Database\Seeders;

use App\Models\MachineOutput;
use Illuminate\Database\Seeder;

class MachineOutputsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $machineOutputs = [
            ['id_question' => 1, 'id_answer' => 1, 'id_help' => 1, 'id_result' =>1, 'id_next_question' =>null ],
            ['id_question' => 1, 'id_answer' => 2, 'id_help' => 2, 'id_result' =>2, 'id_next_question' =>null ],
            ['id_question' => 1, 'id_answer' => 3, 'id_help' => 3, 'id_result' =>null , 'id_next_question' =>2 ],
            ['id_question' => 1, 'id_answer' => 4, 'id_help' => 4, 'id_result' =>null , 'id_next_question' =>19 ],
            ['id_question' => 2, 'id_answer' => 5, 'id_help' => 5, 'id_result' =>null , 'id_next_question' =>3 ],
            ['id_question' => 2, 'id_answer' => 6, 'id_help' => 6, 'id_result' =>null , 'id_next_question' =>9 ],
            ['id_question' => 3, 'id_answer' => 7, 'id_help' => 7, 'id_result' =>null , 'id_next_question' =>4 ],
            ['id_question' => 3, 'id_answer' => 8, 'id_help' => 8, 'id_result' =>null , 'id_next_question' =>5 ],
            ['id_question' => 3, 'id_answer' => 9, 'id_help' => 9, 'id_result' =>null , 'id_next_question' =>6 ],
            ['id_question' => 3, 'id_answer' => 10, 'id_help' => 10, 'id_result' =>null , 'id_next_question' =>7 ],
            ['id_question' => 3, 'id_answer' => 11, 'id_help' => 11, 'id_result' =>null , 'id_next_question' =>8 ],
            ['id_question' => 4, 'id_answer' => 5, 'id_help' => 12, 'id_result' =>3 , 'id_next_question' =>null ],
            ['id_question' => 4, 'id_answer' => 6, 'id_help' => 13, 'id_result' =>4 , 'id_next_question' =>null ],
            ['id_question' => 5, 'id_answer' => 5, 'id_help' => 14, 'id_result' =>5 , 'id_next_question' =>null ],
            ['id_question' => 5, 'id_answer' => 6, 'id_help' => 15, 'id_result' =>6 , 'id_next_question' =>null ],
            ['id_question' => 6, 'id_answer' => 12, 'id_help' => 16, 'id_result' =>7 , 'id_next_question' =>null ],
            ['id_question' => 6, 'id_answer' => 13, 'id_help' => 17, 'id_result' => 8, 'id_next_question' => null],
            ['id_question' => 6, 'id_answer' => 14, 'id_help' => 18, 'id_result' =>9 , 'id_next_question' =>null ],
            ['id_question' => 6, 'id_answer' => 15, 'id_help' => 19, 'id_result' =>10 , 'id_next_question' => null],
            ['id_question' => 7, 'id_answer' => 5, 'id_help' => 20, 'id_result' =>11 , 'id_next_question' => null],
            ['id_question' => 7, 'id_answer' => 6, 'id_help' => 21, 'id_result' =>12 , 'id_next_question' => null],
            ['id_question' => 8, 'id_answer' => 16, 'id_help' => 22, 'id_result' =>13 , 'id_next_question' =>null ],
            ['id_question' => 8, 'id_answer' => 17, 'id_help' => 23, 'id_result' =>14 , 'id_next_question' =>null ],
            ['id_question' => 9, 'id_answer' => 18, 'id_help' => 24, 'id_result' =>null , 'id_next_question' =>10 ],
            ['id_question' => 9, 'id_answer' => 19, 'id_help' => 25, 'id_result' => null, 'id_next_question' =>11 ],
            ['id_question' => 9, 'id_answer' => 20, 'id_help' => 26, 'id_result' => null, 'id_next_question' =>18 ],
            ['id_question' => 10, 'id_answer' => 21, 'id_help' => 27, 'id_result' =>null , 'id_next_question' =>12 ],
            ['id_question' => 10, 'id_answer' => 22, 'id_help' => 28, 'id_result' => null, 'id_next_question' =>13 ],
            ['id_question' => 10, 'id_answer' => 23, 'id_help' => 29, 'id_result' => null, 'id_next_question' =>14 ],
            ['id_question' => 11, 'id_answer' => 24, 'id_help' => 30, 'id_result' =>null, 'id_next_question' =>15 ],
            ['id_question' => 11, 'id_answer' => 25, 'id_help' => 31, 'id_result' => null, 'id_next_question' =>16 ],
            ['id_question' => 11, 'id_answer' => 26, 'id_help' => 32, 'id_result' =>null , 'id_next_question' =>17 ],
            ['id_question' => 12, 'id_answer' => 27, 'id_help' => 33, 'id_result' =>15 , 'id_next_question' =>null ],
            ['id_question' => 12, 'id_answer' => 28, 'id_help' => 34, 'id_result' =>16 , 'id_next_question' =>null ],
            ['id_question' => 12, 'id_answer' => 29, 'id_help' => 35, 'id_result' =>17 , 'id_next_question' =>null ],
            ['id_question' => 12, 'id_answer' => 30, 'id_help' => 36, 'id_result' =>18 , 'id_next_question' =>null ],
            ['id_question' => 12, 'id_answer' => 31, 'id_help' => 37, 'id_result' =>19 , 'id_next_question' =>null ],
            ['id_question' => 13, 'id_answer' => 32, 'id_help' => 38, 'id_result' =>20 , 'id_next_question' => null],
            ['id_question' => 13, 'id_answer' => 33, 'id_help' => 39, 'id_result' =>21 , 'id_next_question' =>null ],
            ['id_question' => 13, 'id_answer' => 34, 'id_help' => 40, 'id_result' =>22 , 'id_next_question' =>null ],
            ['id_question' => 14, 'id_answer' => 15, 'id_help' => 41, 'id_result' =>23 , 'id_next_question' =>null ],
            ['id_question' => 14, 'id_answer' => 13, 'id_help' => 42, 'id_result' =>24 , 'id_next_question' =>null ],
            ['id_question' => 14, 'id_answer' => 14, 'id_help' => 43, 'id_result' =>25 , 'id_next_question' =>null ],
            ['id_question' => 15, 'id_answer' => 35, 'id_help' => 44, 'id_result' =>26 , 'id_next_question' =>null ],
            ['id_question' => 15, 'id_answer' => 36, 'id_help' => 45, 'id_result' =>27 , 'id_next_question' =>null ],
            ['id_question' => 15, 'id_answer' => 37, 'id_help' => 46, 'id_result' =>28 , 'id_next_question' => null],
            ['id_question' => 15, 'id_answer' => 38, 'id_help' => 47, 'id_result' =>29 , 'id_next_question' => null],
            ['id_question' => 16, 'id_answer' => 39, 'id_help' => 48, 'id_result' =>30 , 'id_next_question' =>null ],
            ['id_question' => 16, 'id_answer' => 40, 'id_help' => 49, 'id_result' =>31 , 'id_next_question' => null],
            ['id_question' => 16, 'id_answer' => 41, 'id_help' => 50, 'id_result' =>32 , 'id_next_question' =>null ],
            ['id_question' => 17, 'id_answer' => 42, 'id_help' => 51, 'id_result' =>33 , 'id_next_question' =>null ],
            ['id_question' => 17, 'id_answer' => 43, 'id_help' => 52, 'id_result' =>34 , 'id_next_question' =>null ],
            ['id_question' => 17, 'id_answer' => 44, 'id_help' => 53, 'id_result' =>35 , 'id_next_question' =>null ],
            ['id_question' => 18, 'id_answer' => 45, 'id_help' => 54, 'id_result' =>36 , 'id_next_question' => null],
            ['id_question' => 18, 'id_answer' => 46, 'id_help' => 55, 'id_result' =>37 , 'id_next_question' =>null ],
            ['id_question' => 18, 'id_answer' => 47, 'id_help' => 56, 'id_result' =>38 , 'id_next_question' => null],
            ['id_question' => 18, 'id_answer' => 48, 'id_help' => 57, 'id_result' =>39 , 'id_next_question' =>null ],
            ['id_question' => 18, 'id_answer' => 49, 'id_help' => 58, 'id_result' =>40 , 'id_next_question' =>null ],
            ['id_question' => 18, 'id_answer' => 50, 'id_help' => 59, 'id_result' =>41 , 'id_next_question' =>null ],
            ['id_question' => 18, 'id_answer' => 51, 'id_help' => 60, 'id_result' =>42 , 'id_next_question' =>null ],
            ['id_question' => 19, 'id_answer' => 52, 'id_help' => 61, 'id_result' => null, 'id_next_question' =>20 ],
            ['id_question' => 19, 'id_answer' => 11, 'id_help' => 62, 'id_result' =>null , 'id_next_question' =>21 ],
            ['id_question' => 19, 'id_answer' => 53, 'id_help' => 63, 'id_result' => null, 'id_next_question' =>22 ],
            ['id_question' => 19, 'id_answer' => 54, 'id_help' => 64, 'id_result' => null, 'id_next_question' =>23 ],
            ['id_question' => 19, 'id_answer' => 55, 'id_help' => 65, 'id_result' => null, 'id_next_question' =>26 ],
            ['id_question' => 19, 'id_answer' => 56, 'id_help' => 66, 'id_result' => null, 'id_next_question' =>25 ],
            ['id_question' => 19, 'id_answer' => 57, 'id_help' => 67, 'id_result' => null, 'id_next_question' =>27 ],
            ['id_question' => 19, 'id_answer' => 109, 'id_help' => 68, 'id_result' =>null , 'id_next_question' =>24 ],
            ['id_question' => 19, 'id_answer' => 58, 'id_help' => 69, 'id_result' => null, 'id_next_question' =>28 ],
            ['id_question' => 19, 'id_answer' => 59, 'id_help' => 70, 'id_result' => null, 'id_next_question' =>29 ],
            ['id_question' => 20, 'id_answer' => 60, 'id_help' => 71, 'id_result' =>43 , 'id_next_question' =>null ],
            ['id_question' => 20, 'id_answer' => 61, 'id_help' => 72, 'id_result' =>44 , 'id_next_question' => null],
            ['id_question' => 20, 'id_answer' => 62, 'id_help' => 73, 'id_result' =>45 , 'id_next_question' => null],
            ['id_question' => 21, 'id_answer' => 63, 'id_help' => 74, 'id_result' =>46 , 'id_next_question' =>null ],
            ['id_question' => 21, 'id_answer' => 64, 'id_help' => 75, 'id_result' =>47 , 'id_next_question' =>null ],
            ['id_question' => 21, 'id_answer' => 65, 'id_help' => 76, 'id_result' =>48 , 'id_next_question' => null],
            ['id_question' => 21, 'id_answer' => 66, 'id_help' => 77, 'id_result' =>49 , 'id_next_question' =>null ],
            ['id_question' => 22, 'id_answer' => 67, 'id_help' => 78, 'id_result' =>50 , 'id_next_question' =>null ],
            ['id_question' => 22, 'id_answer' => 68, 'id_help' => 79, 'id_result' =>51 , 'id_next_question' =>null ],
            ['id_question' => 22, 'id_answer' => 69, 'id_help' => 80, 'id_result' =>52 , 'id_next_question' =>null ],
            ['id_question' => 22, 'id_answer' => 70, 'id_help' => 81, 'id_result' =>53 , 'id_next_question' => null],
            ['id_question' => 22, 'id_answer' => 71, 'id_help' => 82, 'id_result' =>54 , 'id_next_question' =>null ],
            ['id_question' => 22, 'id_answer' => 72, 'id_help' => 83, 'id_result' =>55 , 'id_next_question' =>null ],
            ['id_question' => 23, 'id_answer' => 22, 'id_help' => 84, 'id_result' =>57 , 'id_next_question' =>null ],
            ['id_question' => 23, 'id_answer' => 73, 'id_help' => 85, 'id_result' =>59 , 'id_next_question' =>null ],
            ['id_question' => 23, 'id_answer' => 74, 'id_help' => 86, 'id_result' =>58 , 'id_next_question' => null],
            ['id_question' => 23, 'id_answer' => 75, 'id_help' => 87, 'id_result' =>56 , 'id_next_question' => null],
            ['id_question' => 23, 'id_answer' => 76, 'id_help' => 88, 'id_result' =>60 , 'id_next_question' =>null ],
            ['id_question' => 23, 'id_answer' => 77, 'id_help' => 89, 'id_result' =>61 , 'id_next_question' => null],
            ['id_question' => 24, 'id_answer' => 78, 'id_help' => 90, 'id_result' =>62 , 'id_next_question' =>null ],
            ['id_question' => 24, 'id_answer' => 38, 'id_help' => 91, 'id_result' =>66 , 'id_next_question' =>null ],
            ['id_question' => 24, 'id_answer' => 79, 'id_help' => 92, 'id_result' =>63 , 'id_next_question' =>null ],
            ['id_question' => 24, 'id_answer' => 35, 'id_help' => 93, 'id_result' =>64 , 'id_next_question' =>null ],
            ['id_question' => 24, 'id_answer' => 36, 'id_help' => 94, 'id_result' =>65 , 'id_next_question' => null],
            ['id_question' => 25, 'id_answer' => 15, 'id_help' => 95, 'id_result' =>67 , 'id_next_question' => null],
            ['id_question' => 25, 'id_answer' => 80, 'id_help' => 96, 'id_result' =>69 , 'id_next_question' =>null ],
            ['id_question' => 25, 'id_answer' => 81, 'id_help' => 97, 'id_result' =>70 , 'id_next_question' =>null ],
            ['id_question' => 25, 'id_answer' => 82, 'id_help' => 98, 'id_result' =>71 , 'id_next_question' =>null ],
            ['id_question' => 25, 'id_answer' => 83, 'id_help' => 99, 'id_result' =>68 , 'id_next_question' => null],
            ['id_question' => 26, 'id_answer' => 84, 'id_help' => 100, 'id_result' =>72 , 'id_next_question' =>null ],
            ['id_question' => 26, 'id_answer' => 85, 'id_help' => 101, 'id_result' =>73 , 'id_next_question' =>null ],
            ['id_question' => 26, 'id_answer' => 86, 'id_help' => 102, 'id_result' =>74 , 'id_next_question' =>null ],
            ['id_question' => 26, 'id_answer' => 87, 'id_help' => 103, 'id_result' =>75 , 'id_next_question' => null],
            ['id_question' => 26, 'id_answer' => 88, 'id_help' => 104, 'id_result' =>76 , 'id_next_question' =>null ],
            ['id_question' => 27, 'id_answer' => 89, 'id_help' => 105, 'id_result' =>78 , 'id_next_question' => null],
            ['id_question' => 27, 'id_answer' => 90, 'id_help' => 106, 'id_result' =>79 , 'id_next_question' =>null ],
            ['id_question' => 27, 'id_answer' => 91, 'id_help' => 107, 'id_result' =>80 , 'id_next_question' =>null ],
            ['id_question' => 27, 'id_answer' => 92, 'id_help' => 108, 'id_result' =>77 , 'id_next_question' =>null ],
            ['id_question' => 27, 'id_answer' => 93, 'id_help' => 109, 'id_result' =>81 , 'id_next_question' =>null ],
            ['id_question' => 28, 'id_answer' => 94, 'id_help' => 110, 'id_result' =>83 , 'id_next_question' =>null ],
            ['id_question' => 28, 'id_answer' => 95, 'id_help' => 111, 'id_result' =>84 , 'id_next_question' => null],
            ['id_question' => 28, 'id_answer' => 96, 'id_help' => 112, 'id_result' =>85 , 'id_next_question' =>null ],
            ['id_question' => 28, 'id_answer' => 97, 'id_help' => 113, 'id_result' =>86 , 'id_next_question' =>null ],
            ['id_question' => 28, 'id_answer' => 98, 'id_help' => 114, 'id_result' =>82 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 99, 'id_help' => 115, 'id_result' =>87 , 'id_next_question' => null],
            ['id_question' => 29, 'id_answer' => 100, 'id_help' => 116, 'id_result' =>88 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 101, 'id_help' => 117, 'id_result' =>90 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 102, 'id_help' => 118, 'id_result' =>89 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 103, 'id_help' => 119, 'id_result' =>92 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 104, 'id_help' => 120, 'id_result' =>91 , 'id_next_question' => null],
            ['id_question' => 29, 'id_answer' => 105, 'id_help' => 121, 'id_result' =>93 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 106, 'id_help' => 122, 'id_result' =>94 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 107, 'id_help' => 123, 'id_result' =>95 , 'id_next_question' =>null ],
            ['id_question' => 29, 'id_answer' => 108, 'id_help' => 124, 'id_result' =>96 , 'id_next_question' =>null ]
        ];
        foreach ($machineOutputs as $machineOutput)
            MachineOutput::create([
                'id_question' => $machineOutput['id_question'],
                'id_answer' => $machineOutput['id_answer'],
                'id_help' => $machineOutput['id_help'],
                'id_result' => $machineOutput['id_result'],
                'id_next_question' => $machineOutput['id_next_question']
            ]);
    }
}
