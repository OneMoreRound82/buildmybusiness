<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
        	['task' => 'Define product/service',
        	 'module_id' => '1',
        	 'task_num' => '1',
           'url' => 'define-product-service'],

        	 ['task' => 'Define features & benefits',
        	 'module_id' => '1',
        	 'task_num' => '2',
           'url' => 'define-features-benefits'],

        	 ['task' => 'Define the market need',
        	 'module_id' => '1',
        	 'task_num' => '3',
           'url' => 'define-market-need'],

        	 ['task' => 'Identify differentiation',
        	 'module_id' => '1',
        	 'task_num' => '4',
           'url' => 'identify-differentiation'],

        	 ['task' => 'Define value proposition',
        	 'module_id' => '1',
        	 'task_num' => '5',
           'url' => 'define-value-proposition'],


        	 ['task' => 'Define current market sectors',
        	 'module_id' => '2',
        	 'task_num' => '1',
           'url' => 'define-current-market-sectors'],

        	 ['task' => 'Identify market growth rates',
        	 'module_id' => '2',
        	 'task_num' => '2',
           'url' => 'identify-market-growth-rates'],

        	 ['task' => 'Identify new market sectors',
        	 'module_id' => '2',
        	 'task_num' => '3',
           'url' => 'identify-new-market-sectors'],

        	 ['task' => 'Define current distribution channels',
        	 'module_id' => '2',
        	 'task_num' => '4',
           'url' => 'define-current-distribution-channels'],


        	 ['task' => 'Profile current customer data',
        	 'module_id' => '3',
        	 'task_num' => '1'],

        	 ['task' => 'Define your ideal customer',
        	 'module_id' => '3',
        	 'task_num' => '2'],

        	 ['task' => 'Define buyer personas',
        	 'module_id' => '3',
        	 'task_num' => '3'],

        	 ['task' => 'Define your customer journey',
        	 'module_id' => '3',
        	 'task_num' => '4'],


        	 ['task' => 'Identify your core values',
        	 'module_id' => '4',
        	 'task_num' => '1'],

        	 ['task' => 'Define your brand personality',
        	 'module_id' => '4',
        	 'task_num' => '2'],

        	 ['task' => 'Define your brand promise',
        	 'module_id' => '4',
        	 'task_num' => '3'],

        	 ['task' => 'Define your brand colours',
        	 'module_id' => '4',
        	 'task_num' => '4'],

        	 ['task' => 'Identify representative images',
        	 'module_id' => '4',
        	 'task_num' => '5'],

        	 ['task' => 'Define your brands fonts',
        	 'module_id' => '4',
        	 'task_num' => '6'],


        	 ['task' => 'Determine campaign objective',
        	 'module_id' => '5',
        	 'task_num' => '1'],

        	 ['task' => 'Conduct competitor research',
        	 'module_id' => '5',
        	 'task_num' => '2'],

        	 ['task' => 'Identify special interest groups',
        	 'module_id' => '5',
        	 'task_num' => '3'],

        	 ['task' => 'Identify social media topics',
        	 'module_id' => '5',
        	 'task_num' => '4'],

        	 ['task' => 'Define activities and outputs',
        	 'module_id' => '5',
        	 'task_num' => '5'],


        	 ['task' => 'Define core messags',
        	 'module_id' => '6',
        	 'task_num' => '1'],

        	 ['task' => 'Define content ideas',
        	 'module_id' => '6',
        	 'task_num' => '2'],

        	 ['task' => 'Define call to actions',
        	 'module_id' => '6',
        	 'task_num' => '3'],


        	 ['task' => 'Define video topics',
        	 'module_id' => '7',
        	 'task_num' => '1'],

        	 ['task' => 'Define the style of your video',
        	 'module_id' => '7',
        	 'task_num' => '2'],

        	 ['task' => 'Write the script',
        	 'module_id' => '7',
        	 'task_num' => '3'],

        	 ['task' => 'Storyboard required shots',
        	 'module_id' => '7',
        	 'task_num' => '4'],


        	 ['task' => 'Assess the current condition of your SEO',
        	 'module_id' => '8',
        	 'task_num' => '1'],

        	 ['task' => 'Conduct keyword research',
        	 'module_id' => '8',
        	 'task_num' => '2'],

        	 ['task' => 'Perform basic on-page SEO',
        	 'module_id' => '8',
        	 'task_num' => '3'],

        	 ['task' => 'Perform technical SEO',
        	 'module_id' => '8',
        	 'task_num' => '4'],

        	 ['task' => 'Develop a link building strategy',
        	 'module_id' => '8',
        	 'task_num' => '5'],


        	 ['task' => 'Identify which CRM to use',
        	 'module_id' => '9',
        	 'task_num' => '1'],

        	 ['task' => 'Identify key customer information',
        	 'module_id' => '9',
        	 'task_num' => '2'],

        	 ['task' => 'Define KPIs',
        	 'module_id' => '9',
        	 'task_num' => '3'],

        	 ['task' => 'Define stages of sales pipeline',
        	 'module_id' => '9',
        	 'task_num' => '4'],

        	 ['task' => 'Educate and train staff',
        	 'module_id' => '9',
        	 'task_num' => '5'],


        	 ['task' => 'Identify landing page software to use',
        	 'module_id' => '10',
        	 'task_num' => '1'],

        	 ['task' => 'Define your offer',
        	 'module_id' => '10',
        	 'task_num' => '2'],

        	 ['task' => 'Produce landing page copy',
        	 'module_id' => '10',
        	 'task_num' => '3'],

        	 ['task' => 'Design landing page layout',
        	 'module_id' => '10',
        	 'task_num' => '4'],

        	 ['task' => 'Recreate branding',
        	 'module_id' => '10',
        	 'task_num' => '5'],

        	 ['task' => 'Complete technical setup',
        	 'module_id' => '10',
        	 'task_num' => '6'],


        	 ['task' => 'Identify e-marketing software to use',
        	 'module_id' => '11',
        	 'task_num' => '1'],

        	 ['task' => 'Organise contact data',
        	 'module_id' => '11',
        	 'task_num' => '2'],

        	 ['task' => 'Define email topics & content',
        	 'module_id' => '11',
        	 'task_num' => '3'],

        	 ['task' => 'Recreate branding',
        	 'module_id' => '11',
        	 'task_num' => '4'],

        	 ['task' => 'Define scheduling & automation',
        	 'module_id' => '11',
        	 'task_num' => '5'],

        	 ['task' => 'Integrate 3rd party software',
        	 'module_id' => '11',
        	 'task_num' => '6'],


        	 ['task' => 'Identify software to use',
        	 'module_id' => '12',
        	 'task_num' => '1'],

        	 ['task' => 'Sign up to Google Tag Manager',
        	 'module_id' => '12',
        	 'task_num' => '2'],

        	 ['task' => 'Setup Conversational Marketing software',
        	 'module_id' => '12',
        	 'task_num' => '3'],

        	 ['task' => 'Install mobile device application',
        	 'module_id' => '12',
        	 'task_num' => '4'],


        	 ['task' => 'Define ad channels to use',
        	 'module_id' => '13',
        	 'task_num' => '1'],

        	 ['task' => 'Install remarketing tags',
        	 'module_id' => '13',
        	 'task_num' => '2'],

        	 ['task' => 'Define ad copy',
        	 'module_id' => '13',
        	 'task_num' => '3'],

        ];



        foreach ($tasks as $task){
        	Task::create($task);
        }
    }
}
