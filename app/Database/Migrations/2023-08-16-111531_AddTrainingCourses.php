<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTrainingCourses extends Migration
{
    public function up()
    {


        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
                'auto_increment' => true

            ],
            'title' => [
                'type' => "VARCHAR",
                'constraint' => 100,

            ],
            'short_description' => [
                'type' => 'VARCHAR',
                'constraint' => 200,

            ],
            'long_description' => [
                'type' => 'TEXT',
            ],
            'fee' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            'discounted_fee' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            "mode" => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            "coverImage" => [
                'type' => 'TEXT',

            ],
            "certificate_url" => [
                'type' => 'TEXT'
            ],
            "duration" => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'admission_open' => [
                'type' => 'TINYINT'
            ],
            'start_date' => [
                'type' => "DATETIME"
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 500,
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('training_courses');
    }

    public function down()
    {
        //
        $this->forge->dropTable("training_courses");
    }
}
