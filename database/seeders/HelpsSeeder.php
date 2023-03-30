<?php

namespace Database\Seeders;

use App\Models\Help;
use Illuminate\Database\Seeder;

class HelpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helps = [
            ['text_help' => 'Основной критерий, который будет влиять на подбор зал в интернет –кафе – это цель визита посетителя. Вам предложено на выбор один из трёх видов: выпить кофе, работа за компьютером, перекус. От вашего выбора будет зависеть результирующий ответ экспертной системы.'],
            ['text_help' => 'Вы выбрали цель посещения интернет - кафе – выпить кофе. Экспертной Системе необходимо узнать какой кофе вас интересует. На выбор пользователю доступно два варианта ответ: по-крепче или по-слаще'],
            ['text_help' => 'Вы выбрали цель посещения интернет – кафе – выпить кофе и ответили, что вас интересует кофе по-крепче. Экспертная система предлагает вам Эспрессо и интересуется насчет того, добавлять ли вам сахар.'],
            ['text_help' => 'Вы выбрали цель посещения интернет – кафе – работа за компьютером. Экспертной системе необходимо знать, в каком  зале вы предпочтёте находиться: для курящих или для некурящих'],
            ['text_help' => 'Вы выбрали цель посещения интернет - кафе – перекус. Экспертной Системе необходимо узнать вы пришли один или с компанией. На выбор пользователю предоставлено два варианта ответа: один или с компанией'],
            ['text_help' => 'Вы выбрали цель посещения интернет – кафе – выпить кофе и ответили, что вас интересует кофе по-слаще. Экспертная Система подобрала вам Латте'],
            ['text_help' => 'Вы выбрали цель посещения интернет – кафе – выпить кофе и ответили, что вас интересует кофе по-крепче с сахаром. Экспертная система на основании ваших ответов решила приготовить вам Эспрессо с сахаром.'],
            ['text_help' => 'Вы выбрали цель посещения интернет – кафе – выпить кофе и ответили, что вас интересует кофе по-крепче без сахара. Экспертная система на основании ваших ответов решила приготовить вам Эспрессо без сахара.'],
            ['text_help' => 'Вы выбрали цель посещения интернет - кафе – работа за компьютером, ответили, что вы хотите находится в зале для курящих. Экспертная система забронировала вам столик в зале для работы с компьютером для курящих'],
            ['text_help' => 'Вы выбрали цель посещения интернет - кафе – работа за компьютером, ответили, что вы хотите находится в зале для некурящих. Экспертная система забронировала вам столик в зале для работы с компьютером для некурящих'],
            ['text_help' => 'Вы выбрали цель посещения интернет - кафе – перекус, ответили, что вы пришли один. Экспертная система подобрала вам уединённый столик у камина'],
            ['text_help' => 'Вы выбрали цель посещения интернет - кафе – перекус, ответили, что вы пришли с компанией. Экспертная система подобрала вам столик на веранде с обширной площадью и удобными диванами'],
        ];
        foreach ($helps as $help)
            Help::create([
                'text_help' => $help['text_help']
            ]);
    }
}