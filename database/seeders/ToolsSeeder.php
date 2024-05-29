<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actions = [
            ['name' => 'adminAccess','alias' => 'Административный доступ'],
            ['name' => 'readTools','alias' => 'Получить список всех инструментов'],
            ['name' => 'orderTools', 'alias' => 'Заказать инструмент'],
            ['name' => 'updateOrdered', 'alias' =>'Обновить список заказанных' ],
            ['name' => 'cancelOrdered', 'alias' =>'Отменить список заказанных' ],
            ['name' => 'useVIPAction', 'alias' =>'Использовать VIP инструменты' ]
        ];
        foreach ($actions as $action) {
            Tool::create($action);
        }
    }
}
