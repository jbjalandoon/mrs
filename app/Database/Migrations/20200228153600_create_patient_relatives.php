<?php namespace App\Database\Migrations;

class CreatePatientRelatives extends \CodeIgniter\Database\Migration {

    private $table = 'patient_relatives';

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
        'name' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'contact_no' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'relation' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'address' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
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
