<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    public function run(): void
    {
        $quotes = [
            [
                'name' => 'Ar. Vikramaditya Roy',
                'phone' => '+91 98301 45678',
                'email' => 'v.roy@royarchitects.in',
                'product_interest' => 'Unitized Glass Facade',
                'city' => 'Kolkata, WB',
                'message' => 'Requirement for 32-story luxury residential skyscraper in New Town. Double glazed acoustic unitized envelope system, approx 14,000 sq.m.',
                'status' => 'In Review',
                'estimated_value' => '₹4.2 Cr',
                'created_at' => now()->subHours(3),
            ],
            [
                'name' => 'Karthik Narayanan (Prestige Group)',
                'phone' => '+91 99450 12890',
                'email' => 'karthik.n@prestigeconstructions.com',
                'product_interest' => 'Sliding & Casement Windows',
                'city' => 'Bangalore, KA',
                'message' => 'Inquiry for high-end gated villa project (75 villas). Minimalist aluminum slimline sliding systems with thermal break glass.',
                'status' => 'New',
                'estimated_value' => '₹2.8 Cr',
                'created_at' => now()->subHours(6),
            ],
            [
                'name' => 'Meera Chawla (Lodha Developers)',
                'phone' => '+91 98200 98712',
                'email' => 'meera.chawla@lodhagroup.com',
                'product_interest' => 'Architectural Perforated Panels',
                'city' => 'Mumbai, MH',
                'message' => 'Custom CNC perforated golden-bronze anodized exterior facade cladding for luxury club house & podium car park.',
                'status' => 'Quotation Sent',
                'estimated_value' => '₹1.65 Cr',
                'created_at' => now()->subDay(),
            ],
            [
                'name' => 'Sanjay Singhania (DLF Projects)',
                'phone' => '+91 98110 55432',
                'email' => 'sanjay.s@dlfindia.com',
                'product_interest' => 'Unitized Glass Facade & Louvers',
                'city' => 'Gurugram, HR',
                'message' => 'Commercial IT Park Phase 3, low-E triple insulated glass facade with motorized acoustic ventilation louvers.',
                'status' => 'Contacted',
                'estimated_value' => '₹5.5 Cr',
                'created_at' => now()->subDays(2),
            ],
            [
                'name' => 'Ananya Deshmukh',
                'phone' => '+91 97654 33211',
                'email' => 'ananya.design@studioaura.com',
                'product_interest' => 'DOZO Windows (Villa Series)',
                'city' => 'Goa',
                'message' => 'Seaside beachfront private villa. Salt-water corrosion resistant heavy duty sliding and panoramic picture windows.',
                'status' => 'Completed',
                'estimated_value' => '₹78 Lakhs',
                'created_at' => now()->subDays(4),
            ],
        ];

        foreach ($quotes as $q) {
            Quote::create($q);
        }
    }
}
