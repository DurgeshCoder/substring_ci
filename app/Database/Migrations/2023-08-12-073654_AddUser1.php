<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser1 extends Migration
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
            'name' => [
                'type' => "VARCHAR",
                'constraint' => 100,

            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 11,

            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'about' => [
                'type' => 'TEXT',
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
