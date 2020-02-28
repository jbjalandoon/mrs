<?php namespace App\Database\Migrations;

class CreatePatients extends \CodeIgniter\Database\Migration {

    private $table = 'patients';

    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type'  => 'BIGINT',
          'constraint'  => 5,
          'unsigned'  => TRUE,
          'auto_increment' => TRUE
        ],
        'user_id' => [
          'type' => 'BIGINT',
          'comment' => 'The user who created the patient information'
        ],
        'last_name' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'first_name' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'middle_name' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'extension_name' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'birthdate' => [
          'type' => 'DATE'
        ],
        'gender' => [
          'type' => 'CHAR',
          'constraint' => '1'
        ],
        'cellphone_no' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'address' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'city' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'province' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'postal' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'relative_name' => [
          'type' => 'VARCHAR',
          'constraint' => '255'
        ],
        'relative_contact' => [
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
