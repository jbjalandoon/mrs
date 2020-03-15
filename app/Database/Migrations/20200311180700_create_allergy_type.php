<?php namespace App\Database\Migrations;

class CreateAllergyType extends \CodeIgniter\Database\Migration {

    private $table = 'allergy_types';

    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type'  => 'BIGINT',
          'constraint'  => 5,
          'unsigned'  => TRUE,
          'auto_increment' => TRUE
        ],
        'name' => [
          'type' => 'VARCHAR',
          'constraint'  => '255'
        ],
        'description' => [
          'type' => 'text'
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
            'name' => 'foods',
            'description' => 'food allergies',
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'name' => 'drugs',
            'description' => 'drug allergies',
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
