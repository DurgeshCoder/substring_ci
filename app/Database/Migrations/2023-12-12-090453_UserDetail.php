<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserDetail extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'student_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'student_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true,
            ],
            'phone_number' => [
                'type' => 'INT',
                'constraint'=> 15,
                'unsigned' => true,
            ],
            'batch_id' => [
                'type' => 'INT',
                'constraint'=> 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('student_id', true);
        $this->forge->addForeignKey('batch_id', 'training_courses', 'course_id');
        $this->forge->createTable('user_details');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('user_details ');
    }
}
