<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $modules = [
        	'Product & Service Analysis', 
        	'Market Analysis',
        	'Customer Acquisition',
        	'Branding',
        	'Social Marketing',
        	'Producing Content',
        	'Video Content',
        	'SEO',
        	'CRM',
        	'Landing Pages',
        	'Email Marketing',
        	'Conversational Marketing',
        	'Online Advertising'
        ];

        foreach ($modules as $module){
        	Module::create(['module' => $module]);
        }
    }
}
