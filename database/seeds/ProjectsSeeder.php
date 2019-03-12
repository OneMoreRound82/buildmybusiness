<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
        	['project_name' => 'Digital Toolkit',
        	'user_id'=> '1'],

        	['project_name' => 'Jobs4Everyone',
        	'user_id'=> '2'],
        ];

        foreach ($projects as $project){
        	Project::create($project);
        }
    }
}
