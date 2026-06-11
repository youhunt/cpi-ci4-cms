<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateChugokuCmsTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'name_en' => ['type' => 'VARCHAR', 'constraint' => 150],
            'name_id' => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 160],
            'description_en' => ['type' => 'TEXT', 'null' => true],
            'description_id' => ['type' => 'TEXT', 'null' => true],
            'sort_order' => ['type' => 'INT', 'default' => 0],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'published'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('product_categories', true);

        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'category_id' => ['type' => 'INT', 'unsigned' => true, 'null' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 170],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 180],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'excerpt_en' => ['type' => 'TEXT', 'null' => true],
            'excerpt_id' => ['type' => 'TEXT', 'null' => true],
            'description_en' => ['type' => 'LONGTEXT', 'null' => true],
            'description_id' => ['type' => 'LONGTEXT', 'null' => true],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'brochure_file' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'sort_order' => ['type' => 'INT', 'default' => 0],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'published'],
            'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'meta_description_en' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'meta_description_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->addKey('category_id');
        $this->forge->createTable('products', true);

        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 170],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 180],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'location' => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'application_type' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'client_name' => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'project_year' => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],
            'description_en' => ['type' => 'LONGTEXT', 'null' => true],
            'description_id' => ['type' => 'LONGTEXT', 'null' => true],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'gallery_json' => ['type' => 'LONGTEXT', 'null' => true],
            'sort_order' => ['type' => 'INT', 'default' => 0],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'published'],
            'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'meta_description_en' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'meta_description_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('project_records', true);

        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 150],
            'type' => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'office'],
            'city' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'province' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'address' => ['type' => 'TEXT', 'null' => true],
            'latitude' => ['type' => 'DECIMAL', 'constraint' => '10,7', 'null' => true],
            'longitude' => ['type' => 'DECIMAL', 'constraint' => '10,7', 'null' => true],
            'description_en' => ['type' => 'TEXT', 'null' => true],
            'description_id' => ['type' => 'TEXT', 'null' => true],
            'sort_order' => ['type' => 'INT', 'default' => 0],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'active'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('network_points', true);

        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 170],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 180],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'excerpt_en' => ['type' => 'TEXT', 'null' => true],
            'excerpt_id' => ['type' => 'TEXT', 'null' => true],
            'content_en' => ['type' => 'LONGTEXT', 'null' => true],
            'content_id' => ['type' => 'LONGTEXT', 'null' => true],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'published_at' => ['type' => 'DATETIME', 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'draft'],
            'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'meta_description_en' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'meta_description_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('news_articles', true);

        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 160],
            'company' => ['type' => 'VARCHAR', 'constraint' => 160, 'null' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => 160],
            'phone' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
            'interest' => ['type' => 'VARCHAR', 'constraint' => 160, 'null' => true],
            'message' => ['type' => 'TEXT', 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 40, 'default' => 'new'],
            'admin_note' => ['type' => 'TEXT', 'null' => true],
            'ip_address' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
            'user_agent' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('inquiries', true);

        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'setting_key' => ['type' => 'VARCHAR', 'constraint' => 120],
            'setting_value' => ['type' => 'LONGTEXT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('setting_key');
        $this->forge->createTable('site_settings', true);
    }

    public function down()
    {
        foreach (['site_settings','inquiries','news_articles','network_points','project_records','products','product_categories'] as $table) {
            $this->forge->dropTable($table, true);
        }
    }
}
