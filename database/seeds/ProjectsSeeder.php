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

        	['project_name' => 'Julies Music',
        	'user_id'=> '3'],

        	['project_name' => 'Julies Artwork',
        	'user_id'=> '3'],

        	['project_name' => 'Julies Shoes',
        	'user_id'=> '3'],
        ];

        foreach ($projects as $project){
        	Project::create($project);
        }
    }
}
