<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'currency' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'trnx_id' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'card_id' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}
