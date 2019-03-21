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
        	 'task_num' => '1',
           'url' => 'profile-current-customer-data'],

        	 ['task' => 'Define your ideal customer',
        	 'module_id' => '3',
        	 'task_num' => '2',
           'url' => 'define-your-ideal-customer'],

        	 ['task' => 'Define buyer personas',
        	 'module_id' => '3',
        	 'task_num' => '3',
           'url' => 'define-buyer-personas'],

        	 ['task' => 'Define your customer journey',
        	 'module_id' => '3',
        	 'task_num' => '4',
           'url' => 'define-your-customer-journey'],


        	 ['task' => 'Identify your core values',
        	 'module_id' => '4',
        	 'task_num' => '1',
           'url' => 'identify-your-core-values'],

        	 ['task' => 'Define your brand personality',
        	 'module_id' => '4',
        	 'task_num' => '2',
           'url' => 'define-your-brand-personality'],

        	 ['task' => 'Define your brand promise',
        	 'module_id' => '4',
        	 'task_num' => '3',
           'url' => 'define-your-brand-promise'],

        	 ['task' => 'Define your brand colours',
        	 'module_id' => '4',
        	 'task_num' => '4',
           'url' => 'define-your-brand-colours'],

        	 ['task' => 'Identify representative images',
        	 'module_id' => '4',
        	 'task_num' => '5',
           'url' => 'identify-representative-images'],

        	 ['task' => 'Define your brands fonts',
        	 'module_id' => '4',
        	 'task_num' => '6',
           'url' => 'define-your-brand-fonts'],


        	 ['task' => 'Determine campaign objective',
        	 'module_id' => '5',
        	 'task_num' => '1',
           'url' => 'determine-campaign-objectives'],

        	 ['task' => 'Conduct competitor research',
        	 'module_id' => '5',
        	 'task_num' => '2',
           'url' => 'conduct-competitor-research'],

        	 ['task' => 'Identify special interest groups',
        	 'module_id' => '5',
        	 'task_num' => '3',
           'url' => 'identify-special-interest-groups'],

        	 ['task' => 'Identify social media topics',
        	 'module_id' => '5',
        	 'task_num' => '4',
           'url' => 'identify-social-media-topics'],

        	 ['task' => 'Define activities and outputs',
        	 'module_id' => '5',
        	 'task_num' => '5',
           'url' => 'define-activities-outputs'],


        	 ['task' => 'Define core messages',
        	 'module_id' => '6',
        	 'task_num' => '1',
           'url' => 'define-core-messages'],

        	 ['task' => 'Define content ideas',
        	 'module_id' => '6',
        	 'task_num' => '2',
           'url' => 'define-content-ideas'],

        	 ['task' => 'Define call to actions',
        	 'module_id' => '6',
        	 'task_num' => '3',
           'url' => 'define-call-to-actions'],


        	 ['task' => 'Define video topics',
        	 'module_id' => '7',
        	 'task_num' => '1',
           'url' => 'define-video-topics'],

        	 ['task' => 'Define the style of your video',
        	 'module_id' => '7',
        	 'task_num' => '2',
           'url' => 'define-style-of-video'],

        	 ['task' => 'Write the script',
        	 'module_id' => '7',
        	 'task_num' => '3',
           'url' => 'write-the-script'],

        	 ['task' => 'Storyboard required shots',
        	 'module_id' => '7',
        	 'task_num' => '4',
           'url' => 'storyboard-required-shots'],


        	 ['task' => 'Assess the current condition of your SEO',
        	 'module_id' => '8',
        	 'task_num' => '1',
           'url' => 'assess-current-condition-of-seo'],

        	 ['task' => 'Conduct keyword research',
        	 'module_id' => '8',
        	 'task_num' => '2',
           'url' => 'conduct-keyword-research'],

        	 ['task' => 'Perform basic on-page SEO',
        	 'module_id' => '8',
        	 'task_num' => '3',
           'url' => 'perform-basic-on-page-seo'],

        	 ['task' => 'Perform technical SEO',
        	 'module_id' => '8',
        	 'task_num' => '4',
           'url' => 'perform-technical-seo'],

        	 ['task' => 'Develop a link building strategy',
        	 'module_id' => '8',
        	 'task_num' => '5',
           'url' => 'develop-link-building-strategy'],


        	 ['task' => 'Identify which CRM to use',
        	 'module_id' => '9',
        	 'task_num' => '1',
           'url' => 'identify-which-crm-to-use'],

        	 ['task' => 'Identify key customer information',
        	 'module_id' => '9',
        	 'task_num' => '2',
           'url' => 'identify-key-customer-information'],

        	 ['task' => 'Define KPIs',
        	 'module_id' => '9',
        	 'task_num' => '3',
           'url' => 'define-kpis'],

        	 ['task' => 'Define stages of sales pipeline',
        	 'module_id' => '9',
        	 'task_num' => '4',
           'url' => 'define-stages-of-sales-pipeline'],

        	 ['task' => 'Educate and train staff',
        	 'module_id' => '9',
        	 'task_num' => '5',
           'url' => 'educate-train-staff'],


        	 ['task' => 'Identify landing page software to use',
        	 'module_id' => '10',
        	 'task_num' => '1',
           'url' => 'identify-landing-page-software'],

        	 ['task' => 'Define your offer',
        	 'module_id' => '10',
        	 'task_num' => '2',
           'url' => 'define-yuor-offer'],

        	 ['task' => 'Produce landing page copy',
        	 'module_id' => '10',
        	 'task_num' => '3',
           'url' => 'produce-landing-page-copy'],

        	 ['task' => 'Design landing page layout',
        	 'module_id' => '10',
        	 'task_num' => '4',
           'url' => 'design-landing-page-layout'],

        	 ['task' => 'Recreate branding',
        	 'module_id' => '10',
        	 'task_num' => '5',
           'url' => 'recreate-branding'],

        	 ['task' => 'Complete technical setup',
        	 'module_id' => '10',
        	 'task_num' => '6',
           'url' => 'complete-technical-setup'],


        	 ['task' => 'Identify e-marketing software to use',
        	 'module_id' => '11',
        	 'task_num' => '1',
           'url' => 'identify-e-marketing-software'],

        	 ['task' => 'Organise contact data',
        	 'module_id' => '11',
        	 'task_num' => '2',
           'url' => 'organise-contact-data'],

        	 ['task' => 'Define email topics & content',
        	 'module_id' => '11',
        	 'task_num' => '3',
           'url' => 'define-email-topics-content'],

        	 ['task' => 'Recreate branding',
        	 'module_id' => '11',
        	 'task_num' => '4',
           'url' => 'recreate-branding'],

        	 ['task' => 'Define scheduling & automation',
        	 'module_id' => '11',
        	 'task_num' => '5',
           'url' => 'define-scheduling-automation'],

        	 ['task' => 'Integrate 3rd party software',
        	 'module_id' => '11',
        	 'task_num' => '6',
           'url' => 'integrate-3rd-party-software'],


        	 ['task' => 'Identify conversational software to use',
        	 'module_id' => '12',
        	 'task_num' => '1',
           'url' => 'identify-conversational-software'],

        	 ['task' => 'Sign up to Google Tag Manager',
        	 'module_id' => '12',
        	 'task_num' => '2',
           'url' => 'sign-up-to-tag-manager'],

        	 ['task' => 'Setup Conversational Marketing software',
        	 'module_id' => '12',
        	 'task_num' => '3',
           'url' => 'setup-conversational-marketing-software'],

        	 ['task' => 'Install mobile device application',
        	 'module_id' => '12',
        	 'task_num' => '4',
           'url' => 'install-mobile-apps'],


        	 ['task' => 'Define ad channels to use',
        	 'module_id' => '13',
        	 'task_num' => '1',
           'url' => 'define-ad-channels'],

        	 ['task' => 'Install remarketing tags',
        	 'module_id' => '13',
        	 'task_num' => '2',
           'url' => 'install-remarketing-tags'],

        	 ['task' => 'Define ad copy',
        	 'module_id' => '13',
        	 'task_num' => '3',
           'url' => 'define-ad-copy'],

        ];



        foreach ($tasks as $task){
        	Task::create($task);
        }
    }
}
