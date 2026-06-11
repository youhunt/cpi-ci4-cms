<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ChugokuDemoSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $this->db->table('product_categories')->insertBatch([
            ['name_en' => 'Industrial Coatings', 'name_id' => 'Coating Industri', 'slug' => 'industrial-coatings', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['name_en' => 'Marine Coatings', 'name_id' => 'Coating Marine', 'slug' => 'marine-coatings', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['name_en' => 'Protective Coatings', 'name_id' => 'Coating Proteksi', 'slug' => 'protective-coatings', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['name_en' => 'Flooring Systems', 'name_id' => 'Sistem Lantai', 'slug' => 'flooring-systems', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
        ]);

        $this->db->table('products')->insertBatch([
            ['category_id' => 1, 'slug' => 'industrial-coatings', 'title_en' => 'Industrial Coatings', 'title_id' => 'Coating Industri', 'image' => 'assets/chugoku/img/product-industrial.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 2, 'slug' => 'marine-coatings', 'title_en' => 'Marine Coatings', 'title_id' => 'Coating Marine', 'image' => 'assets/chugoku/img/product-marine.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 3, 'slug' => 'protective-coatings', 'title_en' => 'Protective Coatings', 'title_id' => 'Coating Proteksi', 'image' => 'assets/chugoku/img/product-protective.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 4, 'slug' => 'flooring-systems', 'title_en' => 'Flooring Systems', 'title_id' => 'Sistem Lantai', 'image' => 'assets/chugoku/img/product-flooring.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
        ]);

        $this->db->table('project_records')->insertBatch([
            ['slug' => 'akashi-kaikyo-bridge', 'title_en' => 'Akashi Kaikyo Bridge', 'title_id' => 'Akashi Kaikyo Bridge', 'location' => 'Japan', 'application_type' => 'Infrastructure Coating', 'image' => 'assets/chugoku/img/project-bridge.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['slug' => 'offshore-platform', 'title_en' => 'Offshore Platform', 'title_id' => 'Offshore Platform', 'location' => 'Malaysia', 'application_type' => 'Marine / Offshore', 'image' => 'assets/chugoku/img/project-offshore.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
            ['slug' => 'power-plant-project', 'title_en' => 'Power Plant Project', 'title_id' => 'Proyek Power Plant', 'location' => 'Thailand', 'application_type' => 'Protective Coating', 'image' => 'assets/chugoku/img/project-power.jpg', 'status' => 'published', 'created_at' => $now, 'updated_at' => $now],
        ]);

        $this->db->table('network_points')->insertBatch([
            ['name' => 'Jakarta Office', 'type' => 'office', 'city' => 'Jakarta', 'province' => 'DKI Jakarta', 'status' => 'active', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Industrial Area Coverage', 'type' => 'coverage', 'city' => 'Indonesia', 'province' => 'Indonesia', 'status' => 'active', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
