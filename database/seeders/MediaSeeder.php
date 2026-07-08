<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //earbuds site
        CaseFile::find(1)->media()->create([
        'hero' => 'Earbuds-Retro-poster1.png',
        'prop_ex' => 'earbuds-sketches.png',
        'prop_caption' => 'The first part of the design process was sketching out the earbuds and designing a logo and some branding options.',
        'work_ex' => 'Earbuds-Retro-poster2.png',
        'work_caption' => 'After the earbuds were modeled we were tasked with creating branding and promotional images for our product.',
        'product_ex' => 'Lozon_ramona_earbuds_ad.mp4',
        'product_caption' => 'This is a small video ad I made, the original animation was made into a scrolling based animation on the website.',
        ]);

        //seven makeup
        CaseFile::find(2)->media()->create([
        'hero' => 'Seven_logo_full.png',
        'prop_ex' => 'Makeup_project_sketches.png',
        'prop_caption' => 'we started with sketches and idea concepts, and built out a style guide, logo and branding. we designed the logo in adobe illustrator, and modeled some products in Cimena4d.',
        'work_ex' => 'facebook-image-1.jpg',
        'work_caption' => 'from there me and my group member organized a photoshoot where we acted as the models, and we took the assets we made for the project and made advertisements in photoshop.',
        'product_ex' => 'Lozon_ramona_earbuds_ad.mp4',
        'product_caption' => 'ramona_cassidy_makeup_assignment_pt2_video.mp4',
        ]);

        //industry night website
        CaseFile::find(3)->media()->create([
        'hero' => 'industry-night-banner.png',
        'prop_ex' => 'hackathon-figma.png',
        'prop_caption' => 'we started by prototyping the site in Figma and getting it conceptualized and getting the content laid out before we began coding and styling. i took the reigns on this, and it was my first Figma project. i had never used the program before, as my course taught us how to use Adobe XD instead, so it was a learning experience. You can check out the Figma prototype here: <a class="button case-file-link" href="https://www.figma.com/design/hN2fQ1g184hCrGkpF2ifEs/Hackathon?m=dev&t=hfDEymV6eK3bItuF-1">Hackathon Prototype</a>',
        'work_ex' => 'trello-work.png',
        'work_caption' => 'for this assignment i worked mainly as the web designer and project manager, I did my best to make the page look appealing and to organize my group into an effective team, using tools like Trello.',
        'product_ex' => 'hackathon-product.png',
        'product_caption' => 'the site was put together well and we received a decent grade, and we accomplished everything we set out to do.',
        ]);

        //the devils advocate
        CaseFile::find(4)->media()->create([
        'hero' => 'TDA About Silver MacBook Pro on Desk Mockup.jpg',
        'prop_ex' => 'TDA-logo-03.png',
        'prop_caption' => 'The logo was made with a fair amount of their input, they had a specific vision and were very pleased with the result I created.',
        'work_ex' => 'TDA Business Card.png',
        'work_caption' => 'after creating the logo, I designed some business cards. The whole theme of the brand was meant to have a sort of "diabolical" edge, and they were very pleased with the results.',
        'product_ex' => 'TDA about Apple MacBook Pro PSD Mockup.png',
        'product_caption' => 'Once the branding had been completed, I moved onto the website. i kept with their vision to create something heavy in blacks and reds.',
        ]);

        //LUHTFY
        CaseFile::find(5)->media()->create([
        'hero' => 'LUHTFY Business Card PSD Mockup.png',
        'prop_ex' => 'LUHTFY rough-02.png',
        'prop_caption' => 'I started with some branding ideas and rough drafts, they werent entirely sure what they wanted and we went through several variations if the final logo, some are shown here.',
        'work_ex' => 'luhtfu-01.jpg',
        'work_caption' => 'The client wanted the logo in black and white, and to look modern and minimalist, but with key features such as a vacuum, a broom and a mop. they were very pleased with the result.',
        'product_ex' => 'LUHTFY Business Card on Plate Mockup.jpg',
        'product_caption' => 'I gave them several variations on the business card and this was the final version they decided upon.',
        ]);
    }
}
