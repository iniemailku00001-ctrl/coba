<?php
// database/seeders/ProjectSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        Project::insert([
            [
                'title' => 'Landing Page Company',
                'image' => 'images/projects/project1.png',
                'description' => 'Landing page modern untuk company profile.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Portfolio',
                'image' => 'images/projects/project2.png',
                'description' => 'Portfolio personal berbasis Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sistem Informasi Sekolah',
                'image' => 'images/projects/project3.png',
                'description' => 'Sistem informasi akademik berbasis web.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'E-Commerce Website',
                'image' => 'images/projects/project4.png',
                'description' => 'Website toko online dengan fitur checkout.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Company Profile',
                'image' => 'images/projects/project5.png',
                'description' => 'Website company profile profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dashboard Admin',
                'image' => 'images/projects/project6.png',
                'description' => 'Dashboard admin untuk manajemen data.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Booking Service',
                'image' => 'images/projects/project7.png',
                'description' => 'Sistem booking online berbasis web.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Landing Page Produk',
                'image' => 'images/projects/project8.png',
                'description' => 'Landing page promosi produk digital.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Website Event',
                'image' => 'images/projects/project9.png',
                'description' => 'Website pendaftaran dan informasi event.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Blog & News Portal',
                'image' => 'images/projects/project10.png',
                'description' => 'Portal berita dan blog berbasis Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
