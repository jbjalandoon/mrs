<?php namespace App\Database\Migrations;

class CreateVisits extends \CodeIgniter\Database\Migration {

    private $table = 'visits';

    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type'  => 'BIGINT',
          'constraint'  => 5,
          'unsigned'  => TRUE,
          'auto_increment' => TRUE
        ],
        'patient_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'start_date' => [
          'type' => 'DATETIME',
          'comment' => ''
        ],
        'end_date' => [
          'type' => 'DATETIME',
          'comment' => ''
        ],
        'status' => [
          'type' => 'CHAR',
          'constraint' => '1',
          'default' => 'a'
        ],
        'created_at' => [
          'type' => 'DATETIME',
          'comment' => 'Date of creation',
        ],
        'updated_at' => [
          'type' => 'DATETIME',
          'null' => true,
          'default' => null,
          'comment' => 'Date last updated',
        ],
        'deleted_at' => [
          'type' => 'DATETIME',
          'null' => true,
          'default' => null,
          'comment' => 'Date of soft deletion',
        ]
      ]);

      $this->forge->addKey('id', TRUE);
      $this->forge->createTable($this->table);

    }

    public function down()
    {
            $this->forge->dropTable($this->table);
    }
}
