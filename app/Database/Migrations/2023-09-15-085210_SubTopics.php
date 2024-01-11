<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubTopics extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
                // Check if the table already exists
            if (!$this->db->tableExists('sub_topics')) {
                $this->forge->addField([
                    'subtopic_id' => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => true,
                        'auto_increment' => true,
                    ],
                    'subtopic_name' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '100',
                    ],
                    'description' => [
                        'type' => 'TEXT',
                        'null' => true,
                    ],
                    'topic_id' => [
                        'type' => 'INT',
                        'constraint'=> 5,
                        'unsigned' => true,
                    ],
                    'subject_id' => [
                        'type' => 'INT',
                        'constraint'=> 5,
                        'unsigned' => true,
                    ],
                ]);

                $this->forge->addKey('subtopic_id', true);
                $this->forge->addForeignKey('topic_id', 'course_topics', 'topic_id');
                $this->forge->addForeignKey('subject_id', 'training_courses', 'course_id');
                $this->forge->createTable('sub_topics');
                $this->db->enableForeignKeyChecks();
            }
        
    }

    public function down()
    {
        $this->forge->dropTable('sub_topics');
    }
}
