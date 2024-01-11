<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BatchUser extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'batch_users_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'batch_id_fk' => [
                'type' => 'INT',
                'constraint'=> 5,
                'unsigned' => true,
            ],
            'user_id_fk' => [
                'type' => 'INT',
                'constraint'=> 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('batch_users_id', true);
        $this->forge->addForeignKey('batch_id_fk', 'batches', 'batch_id');
        $this->forge->addForeignKey('user_id_fk', 'users', 'user_id');
        $this->forge->createTable('batch_users');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('batch_users ');
    }
}
