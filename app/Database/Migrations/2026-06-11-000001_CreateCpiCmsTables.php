<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCpiCmsTables extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('product_categories')) {
            $this->forge->addField([
                'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
                'slug' => ['type' => 'VARCHAR', 'constraint' => 160],
                'title_en' => ['type' => 'VARCHAR', 'constraint' => 180],
                'title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'description_en' => ['type' => 'TEXT', 'null' => true],
                'description_id' => ['type' => 'TEXT', 'null' => true],
                'sort_order' => ['type' => 'INT', 'default' => 0],
                'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'published'],
                'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'meta_description_en' => ['type' => 'TEXT', 'null' => true],
                'meta_description_id' => ['type' => 'TEXT', 'null' => true],
                'created_at' => ['type' => 'DATETIME', 'null' => true],
                'updated_at' => ['type' => 'DATETIME', 'null' => true],
                'deleted_at' => ['type' => 'DATETIME', 'null' => true],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addUniqueKey('slug');
            $this->forge->createTable('product_categories', true);
        }

        if (! $this->db->tableExists('products')) {
            $this->forge->addField([
                'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
                'category_id' => ['type' => 'INT', 'unsigned' => true, 'null' => true],
                'slug' => ['type' => 'VARCHAR', 'constraint' => 160],
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
                'meta_description_en' => ['type' => 'TEXT', 'null' => true],
                'meta_description_id' => ['type' => 'TEXT', 'null' => true],
                'created_at' => ['type' => 'DATETIME', 'null' => true],
                'updated_at' => ['type' => 'DATETIME', 'null' => true],
                'deleted_at' => ['type' => 'DATETIME', 'null' => true],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addUniqueKey('slug');
            $this->forge->createTable('products', true);
        }

        if (! $this->db->tableExists('project_records')) {
            $this->forge->addField([
                'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
                'slug' => ['type' => 'VARCHAR', 'constraint' => 160],
                'title_en' => ['type' => 'VARCHAR', 'constraint' => 180],
                'title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'location' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'application_type' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'client_name' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'project_year' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
                'description_en' => ['type' => 'TEXT', 'null' => true],
                'description_id' => ['type' => 'TEXT', 'null' => true],
                'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'gallery_json' => ['type' => 'LONGTEXT', 'null' => true],
                'sort_order' => ['type' => 'INT', 'default' => 0],
                'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'published'],
                'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'meta_description_en' => ['type' => 'TEXT', 'null' => true],
                'meta_description_id' => ['type' => 'TEXT', 'null' => true],
                'created_at' => ['type' => 'DATETIME', 'null' => true],
                'updated_at' => ['type' => 'DATETIME', 'null' => true],
                'deleted_at' => ['type' => 'DATETIME', 'null' => true],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addUniqueKey('slug');
            $this->forge->createTable('project_records', true);
        }

        if (! $this->db->tableExists('network_points')) {
            $this->forge->addField([
                'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
                'name' => ['type' => 'VARCHAR', 'constraint' => 180],
                'type' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
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
        }

        if (! $this->db->tableExists('news_articles')) {
            $this->forge->addField([
                'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
                'slug' => ['type' => 'VARCHAR', 'constraint' => 160],
                'title_en' => ['type' => 'VARCHAR', 'constraint' => 180],
                'title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'excerpt_en' => ['type' => 'TEXT', 'null' => true],
                'excerpt_id' => ['type' => 'TEXT', 'null' => true],
                'content_en' => ['type' => 'LONGTEXT', 'null' => true],
                'content_id' => ['type' => 'LONGTEXT', 'null' => true],
                'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'published_at' => ['type' => 'DATETIME', 'null' => true],
                'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'published'],
                'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
                'meta_description_en' => ['type' => 'TEXT', 'null' => true],
                'meta_description_id' => ['type' => 'TEXT', 'null' => true],
                'created_at' => ['type' => 'DATETIME', 'null' => true],
                'updated_at' => ['type' => 'DATETIME', 'null' => true],
                'deleted_at' => ['type' => 'DATETIME', 'null' => true],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addUniqueKey('slug');
            $this->forge->createTable('news_articles', true);
        }

        if (! $this->db->tableExists('inquiries')) {
            $this->forge->addField([
                'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
                'name' => ['type' => 'VARCHAR', 'constraint' => 160],
                'company' => ['type' => 'VARCHAR', 'constraint' => 160, 'null' => true],
                'email' => ['type' => 'VARCHAR', 'constraint' => 160],
                'phone' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
                'interest' => ['type' => 'VARCHAR', 'constraint' => 160, 'null' => true],
                'message' => ['type' => 'TEXT', 'null' => true],
                'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'new'],
                'admin_note' => ['type' => 'TEXT', 'null' => true],
                'ip_address' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
                'user_agent' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'created_at' => ['type' => 'DATETIME', 'null' => true],
                'updated_at' => ['type' => 'DATETIME', 'null' => true],
                'deleted_at' => ['type' => 'DATETIME', 'null' => true],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('inquiries', true);
        }
    }

    public function down()
    {
        $this->forge->dropTable('inquiries', true);
        $this->forge->dropTable('news_articles', true);
        $this->forge->dropTable('network_points', true);
        $this->forge->dropTable('project_records', true);
        $this->forge->dropTable('products', true);
        $this->forge->dropTable('product_categories', true);
    }
}
