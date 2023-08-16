<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCourseTopics extends Migration
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
            "course_id" => [
                "type" => "INT",
                'constraint' => 5,
                'unsigned' => true,
            ]


        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey("course_id", "training_courses", "id", "CASCADE", "CASCADE");
        $this->forge->createTable('course_topics');
    }

    public function down()
    {
        $this->forge->dropTable("course_topics");
    }
}
