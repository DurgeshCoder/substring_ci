<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Batch extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        if (!$this->db->tableExists('batches')) {
            $this->forge->addField([
                'batch_id' => [
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
    
    
                'admission_status' =>[
                    'type'=> "ENUM('Open','Close')",
                    'default'=>'Close'
                ],
    
                'batch_status' =>[
                    'type'=> "ENUM('Running','Upcomming','Finished')",
                    'default'=>'Upcomming'
                ],
    
    
                'number_of_admissons' => [
                    'type' => 'TINYINT'
                ],
    
    
                'start_date' => [
                    'type' => "DATETIME"
                ],
    
                'timing' => [
                    'type'=>'VARCHAR',
                    "constraint"=>500
                ],
    
                
               'message' => [
                    'type' => "VARCHAR",
                    'constraint' => 10000
    
                ],
    
    
    
                'instructor'=>[
                    'type'=>'VARCHAR',
                    "constraint"=>500
                ],
                'course_id' => [
                    'type' => 'INT',
                    'constraint'=> 5,
                    'unsigned' => true,
                ],
    
            ]);
    
            $this->forge->addKey('batch_id', true);
            $this->forge->addForeignKey('course_id', 'training_courses', 'course_id');
            $this->forge->createTable('batches');
            $this->db->enableForeignKeyChecks();
        }

       
    }

    public function down()
    {
        $this->forge->dropTable("batches");
    }
}
