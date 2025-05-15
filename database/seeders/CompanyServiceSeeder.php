<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_services')->insert([

            // 1. Car Transportation
            [
                'name' => 'Car Transportation',
                'slug' => Str::slug('Car Transportation'),
                'meta_title' => 'Car Transportation Services | Fast, Safe, and Reliable Auto Shipping',
                'meta_description' => 'Professional car transportation services tailored to your needs. Reliable, fast, and fully insured door-to-door vehicle shipping.',
                'details' => '
                <h2>Car Transportation Services</h2>
                <p>We provide expert <strong>car transportation services</strong> for individuals and businesses nationwide. Whether you\'re relocating or selling a vehicle, our network ensures safe, efficient, and affordable transport from pickup to delivery.</p>

                <h3>Why Choose Us?</h3>
                <ul>
                    <li>Door-to-door pickup and delivery</li>
                    <li>Experienced drivers and licensed carriers</li>
                    <li>Full vehicle insurance coverage</li>
                    <li>Transparent pricing with no hidden fees</li>
                </ul>

                <h3>How It Works</h3>
                <ol>
                    <li>Request a free quote</li>
                    <li>Schedule your transport</li>
                    <li>Your car is picked up and shipped</li>
                    <li>Delivered at your doorstep or preferred location</li>
                </ol>

                <p>Get your car where it needs to be, without the stress.</p>
            ',
                'meta_image' => 'uploads/company/services/service1.jpg',
                'main_image' => 'uploads/company/services/service-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Vehicle Storage
            [
                'name' => 'Vehicle Storage',
                'slug' => Str::slug('Vehicle Storage'),
                'meta_title' => 'Secure Vehicle Storage Solutions | Short & Long-Term',
                'meta_description' => 'Keep your vehicle safe with our climate-controlled, fully secure vehicle storage facilities.',
                'details' => '
                <h2>Vehicle Storage</h2>
                <p>Need a place to store your car while you relocate or travel? Our secure <strong>vehicle storage services</strong> are designed for short-term and long-term protection.</p>

                <h3>Storage Features</h3>
                <ul>
                    <li>24/7 surveillance & gated access</li>
                    <li>Climate-controlled indoor units</li>
                    <li>Outdoor storage for larger vehicles</li>
                    <li>Affordable monthly plans</li>
                </ul>

                <p>Trust us to safeguard your investment, whether it’s for a few days or several months.</p>
            ',
                'meta_image' => 'uploads/company/services/service2.jpg',
                'main_image' => 'uploads/company/services/service-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 3. Logistics
            [
                'name' => 'Logistics',
                'slug' => Str::slug('Logistics'),
                'meta_title' => 'Automotive Logistics Services | End-to-End Vehicle Transport Solutions',
                'meta_description' => 'Streamline your vehicle shipping with our full-scale logistics solutions tailored for auto dealerships, auctions, and individuals.',
                'details' => '
                <h2>Logistics</h2>
                <p>Our <strong>logistics services</strong> provide complete end-to-end vehicle transportation and fleet management solutions. From pickup scheduling to final delivery and tracking, we take care of it all.</p>

                <h3>What We Handle</h3>
                <ul>
                    <li>Nationwide & international shipping coordination</li>
                    <li>Fleet transport for dealerships</li>
                    <li>Specialized logistics for auctions & events</li>
                    <li>Real-time tracking & updates</li>
                </ul>

                <p>Partner with us to simplify your logistics and focus on what matters most — your business.</p>
            ',
                'meta_image' => 'uploads/company/services/service3.jpg',
                'main_image' => 'uploads/company/services/service-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. Express Delivery
            [
                'name' => 'Express Delivery',
                'slug' => Str::slug('Express Delivery'),
                'meta_title' => 'Express Car Delivery | Fast & Time-Sensitive Auto Transport',
                'meta_description' => 'Need your vehicle delivered ASAP? Choose our express auto delivery service for guaranteed fast shipping.',
                'details' => '
                <h2>Express Delivery</h2>
                <p>When time is critical, our <strong>express car delivery service</strong> ensures your vehicle is prioritized for the fastest possible transport. Ideal for emergency moves, short deadlines, and premium service needs.</p>

                <h3>Service Highlights</h3>
                <ul>
                    <li>Expedited scheduling and pickup</li>
                    <li>Guaranteed delivery windows</li>
                    <li>Priority service with dedicated carriers</li>
                </ul>

                <p>We deliver when others can’t. Ask about availability and rush pricing.</p>
            ',
                'meta_image' => 'uploads/company/services/service4.jpg',
                'main_image' => 'uploads/company/services/service-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 5. Enclosed Transport
            [
                'name' => 'Enclosed Transport',
                'slug' => Str::slug('Enclosed Transport'),
                'meta_title' => 'Enclosed Vehicle Transport | Ultimate Protection for Luxury Cars',
                'meta_description' => 'Protect your high-value vehicle from the elements with our fully enclosed auto transport trailers.',
                'details' => '
                <h2>Enclosed Transport</h2>
                <p>Our <strong>enclosed vehicle transport</strong> is the ideal choice for luxury, exotic, and collectible vehicles. Your car is transported in a covered trailer, protected from weather, dust, and road debris.</p>

                <h3>Recommended For:</h3>
                <ul>
                    <li>Classic cars</li>
                    <li>Luxury & supercars</li>
                    <li>Show cars</li>
                </ul>

                <p>White-glove service, guaranteed peace of mind.</p>
            ',
                'meta_image' => 'uploads/company/services/service5.jpg',
                'main_image' => 'uploads/company/services/service-5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 6. Vehicle Tracking
            [
                'name' => 'Vehicle Tracking',
                'slug' => Str::slug('Vehicle Tracking'),
                'meta_title' => 'Real-Time Vehicle Tracking | Monitor Your Shipment 24/7',
                'meta_description' => 'Stay in the loop with our advanced vehicle tracking system. Know exactly where your car is, anytime.',
                'details' => '
                <h2>Vehicle Tracking</h2>
                <p>Track your car’s location in real-time using our advanced <strong>vehicle tracking technology</strong>. We offer full transparency so you never feel out of the loop.</p>

                <h3>Features</h3>
                <ul>
                    <li>Live GPS tracking during transit</li>
                    <li>ETA notifications via SMS or email</li>
                    <li>Dedicated customer support team</li>
                </ul>

                <p>Because your peace of mind matters to us.</p>
            ',
                'meta_image' => 'uploads/company/services/service6.jpg',
                'main_image' => 'uploads/company/services/service-6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
