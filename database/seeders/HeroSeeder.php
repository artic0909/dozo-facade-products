<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use App\Models\HeroStat;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'order' => 1,
                'name' => 'Design',
                'eyebrow' => 'Build A Better Tomorrow',
                'headline' => "WINDOWS\nFAÇADES\nFOR A BRIGHTER\nWORLD",
                'desc' => "Innovative. Sustainable. Elegant.\nComplete Building Envelope Solutions.",
                'cta_text' => 'Explore Our Solutions',
                'cta_link' => '#solutions',
                'image' => '/images/hero_building.jpg',
                'is_active' => true,
            ],
            [
                'order' => 2,
                'name' => 'Engineer',
                'eyebrow' => 'Structural Precision & Performance',
                'headline' => "PRECISION\nENGINEERED\nFOR STRUCTURAL\nMASTERY",
                'desc' => "High wind-load structural simulations, seismic resistance, acoustic damping, and advanced thermal boundary modeling.",
                'cta_text' => 'Discover Engineering Specs',
                'cta_link' => '#facade',
                'image' => '/images/hero_engineer.jpg',
                'is_active' => true,
            ],
            [
                'order' => 3,
                'name' => 'Fabricate',
                'eyebrow' => 'Automated CNC Manufacturing',
                'headline' => "ADVANCED\nFABRICATION\nTO EUROPEAN\nSTANDARDS",
                'desc' => "State-of-the-art automated CNC milling, robotic corner crimping, and precision pre-glazed unitized curtain wall assembly.",
                'cta_text' => 'Explore Product Quality',
                'cta_link' => '#featured-products',
                'image' => '/images/hero_fabricate.jpg',
                'is_active' => true,
            ],
            [
                'order' => 4,
                'name' => 'Install',
                'eyebrow' => 'Turnkey Site Execution',
                'headline' => "SEAMLESS\nINSTALLATION\nON TIME &\nON BUDGET",
                'desc' => "Certified facade engineers delivering zero-leakage, airtight fixing, and rigorous on-site quality assurance across India.",
                'cta_text' => 'View Featured Projects',
                'cta_link' => '#projects',
                'image' => '/images/hero_install.jpg',
                'is_active' => true,
            ],
            [
                'order' => 5,
                'name' => 'Support',
                'eyebrow' => 'Lifelong Post-Handover Care',
                'headline' => "DEDICATED\nSUPPORT\nWARRANTY &\nMAINTENANCE",
                'desc' => "Comprehensive multi-year warranty, regular architectural facade audits, and 24/7 responsive technical engineering support.",
                'cta_text' => 'Contact Our Engineers',
                'cta_link' => '#contact',
                'image' => '/images/hero_support.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($slides as $slide) {
            HeroSlide::updateOrCreate(['name' => $slide['name']], $slide);
        }

        $stats = [
            ['order' => 1, 'number' => '25+', 'label' => 'Years of Experience'],
            ['order' => 2, 'number' => '500+', 'label' => 'Projects Delivered'],
            ['order' => 3, 'number' => 'Premium', 'label' => 'Quality Materials'],
            ['order' => 4, 'number' => 'Pan India', 'label' => 'Presence'],
        ];

        foreach ($stats as $stat) {
            HeroStat::updateOrCreate(['order' => $stat['order']], $stat);
        }
    }
}
