<?php

use App\Response;
use Illuminate\Database\Seeder;

class ResponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $responses = [
        	['project_id' => '1',
        	'task_id'=> '1',
        	'action_id'=> '1',
        	'response'=> 'We sell an online digital marketing service, its the best',
        	'table_name'=> 'null'],

        	['project_id' => '1',
        	'task_id'=> '2',
        	'action_id'=> '1',
        	'response'=> '1) make more money 2) get more customers 3) make more cash',
        	'table_name'=> 'null'],
        ];

        foreach ($responses as $response){
        	Response::create($response);
        }
    }
}
