<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaseFile;

class CaseFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('case_file')->insert([

        [
        'project' => '8Track Earbuds Site',
        'proposition' => 'This was a school project done at Fanshawe where the goal was to make a website promoting a brand of earbuds that we design.',
        'deliverables' => 'we had to design and build the headphones ourselves, create all the branding and design the website. we used Cinema4D to make the headphones, and the adobe suite to make the advertising materials. The site was built using HTML/CSS+SASS and Javascript. the model viewer framework and Greensock library to animate the different features on the site.',
        'outcome' => 'The site itself turned out great, the features all function quite well and give the site appeal. find the repo here: <a class="button case-file-link" href="https://github.com/Ramona-Lozon/Earbuds_site_ramona_lozon">8Track Earbuds</a>'
        ],

        [
        'project' => 'SEVEN Makeup Brand',
        'proposition' => 'This was a school project done at Fanshawe where the goal was to create advertising for a makeup brand of our own design. i worked with another classmate on this assignment.',
        'deliverables' => 'for this project we had to create branding for a makeup line, and create advertising for this line. we used Cinema4d to design the makeup products and the Adobe suite to create the branding and various advertisements including videos. me and my group member chose to act as models for the advertising.',
        'outcome' => 'we did very well on the project, the photos and promotional materials turned out great!'
        ],

        [
        'project' => 'Hackathon for Industry Night',
        'proposition' => 'We set out to build a website for our college program that would advertise the program and promote industry night, a chance for students to meet with industry professionals and present their work.',
        'deliverables' => 'The website was designed to be fully responsive, from mobile to desktop, and built using HTML5, CSS3, and JavaScript. It features original media and custom code, created entirely without plugins like Tailwind.',
        'outcome' => 'The site achieves everything we aimed for and performs seamlessly. Check out the project here: <a class="button case-file-link" href="https://github.com/veilofcrystal/HDT_katrina_kayla_meghan_ramona_showcase">Hackathon Showcase</a>'
        ],

        [
        'project' => 'The Devil\'s Advocate Accounting Agency',
        'proposition' => 'A local accountant wanted to get their small business rolling with some branding, business cards and a website. So i got to work and began designing.',
        'deliverables' => 'In total, a Logo, a Business card, and a Website was needed. I Started with the logo and worked my way from there.',
        'outcome' => 'The initial site just has a landing page, an about page and a contact page. The project is still ongoing, I have more features and pages that I intend to add, but what I\'ve made so far works great and the client is pleased.'
        ],

        [
        'project' => '\"Let Us Handle that For You\" Cleaning Service',
        'proposition' => 'some friends of mine wanted help with the branding for their cleaning service, so i gladly helped.',
        'deliverables' => 'The scope of the project wasn\'t too large, they simply wanted a logo and business card.',
        'outcome' => 'they were very pleased with the results.'
        ],

        ]);
    }
}
