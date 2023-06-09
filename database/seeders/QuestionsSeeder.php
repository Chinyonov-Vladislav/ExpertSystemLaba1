<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            ['text_question' => 'Ваше предыдущее образование?'],
            ['text_question' => 'Был ли у вас профильный класс?'],
            ['text_question' => 'Какого направления профильный класс у вас был?'],
            ['text_question' => 'Вы склонны к работе в научной сфере?'],
            ['text_question' => 'Вы общительны?'],
            ['text_question' => 'Какой вид искусства ваш любимый?'],
            ['text_question' => 'Вы склонны к работе за компьютером?'],
            ['text_question' => 'Вы хотите прямо (быть спортсменом) или косвенно (быть спортивным персоналом) быть связаны со сферой спорта?'],
            ['text_question' => 'Хотели бы вы изучать гуманитарные науки или естественные науки?'],
            ['text_question' => 'Ваш любимый предмет?'],
            ['text_question' => 'Ваш любимый предмет?'],
            ['text_question' => 'Какой ваш любимый язык?'],
            ['text_question' => 'Какую эпоху истории вы считаете наиболее интересной?'],
            ['text_question' => 'Какое искусство вас больше всего привлекает? '],
            ['text_question' => 'К какому направлению вы имеет наибольшую склонность?'],
            ['text_question' => 'Какая из этих тематика вам наиболее интересна?'],
            ['text_question' => 'Какой раздел химии вам наиболее интересен?'],
            ['text_question' => 'Какая сфера знаний вас больше привлекает?'],
            ['text_question' => 'По какому направлению вы получили специальность?'],
            ['text_question' => 'Вы предпочитаете работу в офисе или на производстве?'],
            ['text_question' => 'Какой вид спорта вам наиболее интересен?'],
            ['text_question' => 'Какую область права вы предпочитаете?'],
            ['text_question' => 'Какой аспект социальных наук вам наиболее интересен?'],
            ['text_question' => 'В какой области математики вы наиболее заинтересованы?'],
            ['text_question' => 'Какое направление искусства вас больше всего интересует?'],
            ['text_question' => 'Какой группе людей вы хотите преподавать?'],
            ['text_question' => 'Какая сфера инженерии вас интересует?'],
            ['text_question' => 'Выберите один из возможных путей развития карьеры в медицине и здравоохранении'],
            ['text_question' => 'Какие аспекты ИТ вам наиболее интересны?']
        ];
        foreach ($questions as $question)
            Question::create([
                'text_question' => $question['text_question']
            ]);
    }
}
