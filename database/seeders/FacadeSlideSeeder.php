<?php

namespace Database\Seeders;

use App\Models\FacadeSlide;
use Illuminate\Database\Seeder;

class FacadeSlideSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'order' => 1,
                'name' => 'Façade Cladding',
                'eyebrow' => 'Unitized Curtain Walls & Cladding',
                'headline' => "DOZO\nFAÇADES\nFOR ARCHITECTURAL\nEXCELLENCE",
                'desc' => "Architectural freedom with precision and durability. Complete building envelope solutions engineered for thermal mastery and acoustic comfort.",
                'cta_text' => 'Request Façade Consultation',
                'cta_link' => '#contact',
                'image' => '/images/solution_facade.jpg',
                'is_active' => true,
            ],
            [
                'order' => 2,
                'name' => 'Architectural Panels',
                'eyebrow' => 'Architectural Panels & Perforation',
                'headline' => "PRECISION\nPANELS\nPERFORATED &\nSTRUCTURED",
                'desc' => "Precision CNC perforated metallic envelopes, solid aluminum cassettes, and composite panels offering bespoke aesthetics and solar mitigation.",
                'cta_text' => 'Request Façade Consultation',
                'cta_link' => '#contact',
                'image' => '/images/solution_facade_2.jpg',
                'is_active' => true,
            ],
            [
                'order' => 3,
                'name' => 'Louvers & Sun Shades',
                'eyebrow' => 'Louvers & Solar Shading Solutions',
                'headline' => "ENGINEERED\nLOUVERS\nOPTIMAL SHADE\n& AIRFLOW",
                'desc' => "Aerodynamic louvers, continuous sun-fins, and intelligent architectural shading devices engineered for high wind-pressure resistance.",
                'cta_text' => 'Request Façade Consultation',
                'cta_link' => '#contact',
                'image' => '/images/solution_facade_3.jpg',
                'is_active' => true,
            ],
            [
                'order' => 4,
                'name' => 'Flashings & Accessories',
                'eyebrow' => 'Flashings & Weatherproofing Trims',
                'headline' => "WEATHERPROOF\nENVELOPE\nSEAMLESS FINISH\n& PROTECTION",
                'desc' => "High-grade aluminum flashings, weather-tight gaskets, and tailored perimeter trims ensuring zero-leakage durability across multi-storey elevations.",
                'cta_text' => 'Request Façade Consultation',
                'cta_link' => '#contact',
                'image' => '/images/solution_facade_4.jpg',
                'is_active' => true,
            ],
            [
                'order' => 5,
                'name' => 'Custom Fabrication',
                'eyebrow' => 'Custom Architectural Fabrication',
                'headline' => "BESPOKE\nFABRICATION\nTAILORED TO\nDESIGN",
                'desc' => "Turnkey custom fabrication to European engineering tolerances with state-of-the-art automated CNC milling and robotic structural bonding.",
                'cta_text' => 'Request Façade Consultation',
                'cta_link' => '#contact',
                'image' => '/images/hero_engineer.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($slides as $slide) {
            FacadeSlide::updateOrCreate(['order' => $slide['order']], $slide);
        }
    }
}
