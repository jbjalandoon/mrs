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

      $data = [
        [
          'user_id' => '1',
          'last_name' => 'Jalandoon',
          'first_name' => 'Jerome',
          'middle_name' => 'Bermudez',
          'extension_name' => '',
          'birthdate' => date('Y-m-d H:i:s', strtotime('1999-11-22')),
          'gender' => 'm',
          'cellphone_no' => '09673104255',
          'address' => 'Blk 161 Lot 6 Central Bicutan',
          'city' => 'Taguig City',
          'province' => 'Metro Manila',
          'postal' => '1633',
          'status' => 'a',
          'created_at' => date('Y-m-d H:i:s')
        ],
        [
          'user_id' => '1',
          'last_name' => 'Llagas',
          'first_name' => 'Pauline',
          'middle_name' => 'Ewan',
          'extension_name' => '',
          'birthdate' => date('Y-m-d H:i:s', strtotime('1999-3-3')),
          'gender' => 'f',
          'cellphone_no' => '09673104255',
          'address' => 'Blk 161 Lot 6 Central Bicutan',
          'city' => 'Taguig City',
          'province' => 'Metro Manila',
          'postal' => '1633',
          'status' => 'a',
          'created_at' => date('Y-m-d H:i:s')
        ],
      ];

      $db      = \Config\Database::connect();
      $builder = $db->table($this->table);
      $builder->insertBatch($data);
    }

    public function down()
    {
      $db      = \Config\Database::connect();
      $builder = $db->table($this->table);
      $db->simpleQuery('DELETE FROM '.$this->table);
      $this->forge->dropTable($this->table);
    }
}
