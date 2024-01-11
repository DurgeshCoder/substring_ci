<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TrainingCourses extends Migration
{
    public function up()
    {
        if (!$this->db->tableExists('training_courses')) {
            $this->forge->addField([
                'course_id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
    
                ],
    
                'name' => [
                    'type' => "VARCHAR",
                    'constraint' => 100
    
                ],
    
                'short_description' => [
                    'type' => 'VARCHAR',
                    'constraint' => 200
    
                ],
    
    
                'long_description' => [
                    'type' => 'TEXT'
                ],
    
    
                'admission' =>[
                    'type'=> "ENUM('Active','Inactive')",
                    'default'=>'Inactive'
                ],
    
    
                'fee' => [
                    'type' => 'INT',
                    'constraint' => 5
                ],
    
    
                'discounted_fee' => [
                    'type' => 'INT',
                    'constraint' => 5
                ],
    
    
                'mode' => [
                    'type'=> "ENUM('Online','Offline','Online and Offline Both')",
                    'default'=>'Online'
                ],
    
    
                'cover_image' => [
                    'type' => 'TEXT'
    
                ],
                'certificate_url' => [
                    'type' => 'TEXT',
                     'null'=> true
                ],
    
    
                'duration' => [
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
                    'constraint' => 500
                ],
    
    
                'rating'=>[
                    'type'=>'INT',
                    'constraint'=>10
                ],
    
    
                'instructor'=>[
                    'type'=>'VARCHAR',
                    "constraint"=>500
                ],
    
    
                'course_resourses'=>[
                    'type'=>'TEXT',
                    'null'=>true
                ],
            ]);
    
            $this->forge->addKey('course_id', true);
            $this->forge->createTable('training_courses');
        }
    }
    

    public function down()
    {
        $this->forge->dropTable("training_courses");
    }
}
