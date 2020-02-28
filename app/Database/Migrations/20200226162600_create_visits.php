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
        'weight' => [
          'type' => 'int',
          'comment' => ''
        ],
        'height' => [
          'type' => 'int',
          'comment' => ''
        ],
        'temperature' => [
          'type' => 'int',
          'comment' => ''
        ],
        'respiratory_rate' => [
          'type' => 'int',
          'comment' => ''
        ],
        'pulse_rate' => [
          'type' => 'int',
          'comment' => ''
        ],
        'blood_pressure' => [
          'type' => 'int',
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
