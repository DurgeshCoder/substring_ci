<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CouresesTopics extends Migration
{
    public function up()
    {    
        $this->db->disableForeignKeyChecks();
        // Check if the table already exists
            if (!$this->db->tableExists('course_topics')) {
                $this->forge->addField([
                    'topic_id' => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => true,
                        'auto_increment' => true,
                    ],
                    'topic_name' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '100',
                    ],
                    'description' => [
                        'type' => 'TEXT',
                        'null' => true,
                    ],
                    'subject_id' => [
                        'type' => 'INT',
                        'constraint'=> 5,
                        'unsigned' => true,
                    ],
                ]);

                $this->forge->addKey('topic_id', true);
                $this->forge->addForeignKey('subject_id', 'training_courses', 'course_id');
                $this->forge->createTable('course_topics');
                $this->db->enableForeignKeyChecks();
            }

       
    }

    public function down()
    {
        $this->forge->dropTable('course_topics');
    }
}
