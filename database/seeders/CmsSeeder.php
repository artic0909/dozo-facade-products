<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Project;
use App\Models\Solution;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Products
        $products = [
            [
                'name' => 'Sliding Window System',
                'category' => 'DOZO Windows',
                'theme' => 'light',
                'image' => '/images/prod_sliding_window.jpg',
                'short_desc' => 'Premium multi-track sliding aluminum window system engineered for ultra-smooth operation, expansive glass views, and superior weather tightness.',
                'material_grade' => 'Architectural T6 Aluminum',
                'finish_options' => 'PVDF Coating / Anodized',
                'acoustic_rating' => 'Up to 38 dB Isolation',
                'wind_load' => 'Engineered to 3.5 kPa',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Casement Window System',
                'category' => 'DOZO Windows',
                'theme' => 'light',
                'image' => '/images/prod_casement_window.jpg',
                'short_desc' => 'High-performance side-hung casement window with multipoint locking mechanism, acoustic insulation gaskets, and optimal airflow ventilation.',
                'material_grade' => 'Architectural T6 Aluminum',
                'finish_options' => 'PVDF Coating / Powder Coated',
                'acoustic_rating' => 'Up to 42 dB Isolation',
                'wind_load' => 'Engineered to 4.0 kPa',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Unitized Glass Facade',
                'category' => 'DOZO Façades',
                'theme' => 'dark',
                'image' => '/images/prod_unitized_facade.jpg',
                'short_desc' => 'Factory pre-fabricated unitized curtain wall system delivering rapid on-site installation, seismic performance, and high structural reliability for commercial skyscrapers.',
                'material_grade' => 'Structural 6063-T6 Aluminum',
                'finish_options' => 'AkzoNobel PVDF Coating',
                'acoustic_rating' => 'Up to 45 dB Sound Proofing',
                'wind_load' => 'Engineered to 5.0 kPa',
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'name' => 'Architectural Perforated Panel',
                'category' => 'DOZO Façades',
                'theme' => 'dark',
                'image' => '/images/prod_perforated_panel.jpg',
                'short_desc' => 'Precision CNC perforated metallic panels designed for solar shading, dynamic light diffusion, and bespoke artistic facade patterns.',
                'material_grade' => 'Solid Aluminum 3003-H14',
                'finish_options' => 'Anodized / Fluorocarbon Paint',
                'acoustic_rating' => 'Acoustic Backing Available',
                'wind_load' => 'Engineered to 3.8 kPa',
                'is_featured' => true,
                'order' => 4,
            ],
            [
                'name' => 'Thermal Break Slimline Doors',
                'category' => 'DOZO Windows',
                'theme' => 'light',
                'image' => '/images/solution_windows_3.jpg',
                'short_desc' => 'Minimalist ultra-slim sliding patio doors with concealed outer frames, flush floor track transition, and high thermal efficiency.',
                'material_grade' => 'Thermal Broken Aluminum',
                'finish_options' => 'Matte Black / Charcoal PVDF',
                'acoustic_rating' => 'Up to 40 dB Isolation',
                'wind_load' => 'Engineered to 3.2 kPa',
                'is_featured' => false,
                'order' => 5,
            ],
            [
                'name' => 'Architectural Louvers & Sunshades',
                'category' => 'DOZO Façades',
                'theme' => 'dark',
                'image' => '/images/solution_facade_4.jpg',
                'short_desc' => 'Engineered aerodynamic aerofoil louver fins for passive solar gain management, energy reduction, and modern exterior accents.',
                'material_grade' => 'Extruded Aluminum 6060-T6',
                'finish_options' => 'PVDF / Wood Grain Finish',
                'acoustic_rating' => 'Wind Whistle Damped',
                'wind_load' => 'Engineered to 4.5 kPa',
                'is_featured' => false,
                'order' => 6,
            ],
        ];

        foreach ($products as $item) {
            Product::updateOrCreate(['name' => $item['name']], $item);
        }

        // 2. Projects
        $projects = [
            [
                'title' => 'Residential Tower',
                'location' => 'Kolkata',
                'type' => 'Residential High-Rise (32 Floors)',
                'scope' => '14,000 sq.m Double Glazed Envelope + Casements',
                'client' => 'Roy Group Architects',
                'image' => '/images/proj_residential_tower.jpg',
                'status' => 'Under Construction',
                'progress' => '82%',
                'description' => 'Luxury residential high-rise featuring custom acoustic DOZO casement windows and panoramic glass facades designed for urban sound isolation.',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Commercial Complex',
                'location' => 'Bangalore',
                'type' => 'Tech Park & Commercial Hub',
                'scope' => 'Unitized Structural Glazing & Solar Shading',
                'client' => 'Prestige Infrastructure',
                'image' => '/images/proj_commercial_complex.jpg',
                'status' => 'Completed & Handed Over',
                'progress' => '100%',
                'description' => 'State-of-the-art commercial tech hub envelope engineered with unitized double-glazed facade panels and integrated solar shading louvers.',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'IT Park',
                'location' => 'Hyderabad',
                'type' => 'Corporate Headquarter Campus',
                'scope' => 'Aluminium Composite Cladding & Fixed Glazing',
                'client' => 'Cyber Towers Corp',
                'image' => '/images/proj_it_park.jpg',
                'status' => 'Phase 2 Installation',
                'progress' => '65%',
                'description' => 'Expansive IT campus building with solid aluminum cladding panels and high-efficiency thermal fixed glass systems.',
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'Luxury Residence',
                'location' => 'Goa',
                'type' => 'Ultra-Luxury Private Villa',
                'scope' => 'Heavy-Duty Slim Sliding Doors & Marine Anodized Frames',
                'client' => 'Private Client',
                'image' => '/images/proj_luxury_residence.jpg',
                'status' => 'Completed',
                'progress' => '100%',
                'description' => 'Coastal luxury villa equipped with weather-resistant heavy-duty sliding glass doors and minimalist slim-profile frame geometry.',
                'is_featured' => true,
                'order' => 4,
            ],
        ];

        foreach ($projects as $item) {
            Project::updateOrCreate(['title' => $item['title']], $item);
        }

        // 3. Solutions
        $solutions = [
            [
                'slug' => 'windows',
                'title' => 'Windows',
                'eyebrow' => 'DOZO',
                'desc' => 'Engineered for comfort, performance and modern living.',
                'cta_text' => 'Explore Windows',
                'cta_link' => '#featured-products',
                'images' => [
                    '/images/solution_windows.jpg',
                    '/images/solution_windows_2.jpg',
                    '/images/solution_windows_3.jpg',
                    '/images/solution_windows_4.jpg',
                ],
                'badges' => [
                    ['title' => 'Thermal Insulation', 'icon' => 'thermal'],
                    ['title' => 'Sound Reduction', 'icon' => 'sound'],
                    ['title' => 'Weather Resistance', 'icon' => 'weather'],
                    ['title' => 'Sleek Design', 'icon' => 'design'],
                    ['title' => 'Long Lasting', 'icon' => 'shield'],
                ],
                'order' => 1,
            ],
            [
                'slug' => 'facade',
                'title' => 'Façade',
                'eyebrow' => 'DOZO',
                'desc' => 'Architectural freedom with precision and durability.',
                'cta_text' => 'Explore Facade',
                'cta_link' => '#featured-products',
                'images' => [
                    '/images/solution_facade.jpg',
                    '/images/solution_facade_2.jpg',
                    '/images/solution_facade_3.jpg',
                    '/images/solution_facade_4.jpg',
                ],
                'badges' => [
                    ['title' => 'Façade Cladding', 'icon' => 'cladding'],
                    ['title' => 'Architectural Panels', 'icon' => 'panels'],
                    ['title' => 'Louvers & Sun Shades', 'icon' => 'louvers'],
                    ['title' => 'Flashings & Accessories', 'icon' => 'flashings'],
                    ['title' => 'Custom Fabrication', 'icon' => 'fabrication'],
                ],
                'order' => 2,
            ],
            [
                'slug' => 'products',
                'title' => 'Products',
                'eyebrow' => 'DOZO',
                'desc' => 'Comprehensive portfolio of premium aluminum windows, high-performance façade systems, and bespoke architectural solutions.',
                'cta_text' => 'Explore Products',
                'cta_link' => '#featured-products',
                'images' => [
                    '/images/hero_building.jpg',
                    '/images/prod_sliding_window.jpg',
                    '/images/proj_residential_tower.jpg',
                    '/images/prod_unitized_facade.jpg',
                ],
                'badges' => [],
                'order' => 3,
            ],
        ];

        foreach ($solutions as $item) {
            Solution::updateOrCreate(['slug' => $item['slug']], $item);
        }

        // 4. Site Settings
        $settings = [
            'site_title' => 'DOZO - Windows & Façades | Architectural Building Envelope Solutions',
            'site_description' => 'Innovative. Sustainable. Elegant. Complete Building Envelope Solutions with DOZO Windows and Architectural Façades.',
            'phone' => '+91 98765 43210',
            'phone_display' => '+91 98765 43210',
            'email' => 'info@dozofacades.com',
            'head_office' => 'Pan India Presence | Head Office Mumbai',
            'catalogue_url' => '/catelogue.pdf',
            'story_headline' => "Turning\nArchitectural Visions\ninto Reality",
            'story_image' => '/images/story_banner.jpg',
            'story_video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'linkedin_url' => 'https://linkedin.com',
            'instagram_url' => 'https://instagram.com',
            'youtube_url' => 'https://youtube.com',
            'facebook_url' => 'https://facebook.com',
            'twitter_url' => 'https://twitter.com',
            'whatsapp_number' => '919876543210',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
