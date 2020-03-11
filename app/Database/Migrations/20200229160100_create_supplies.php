<?php namespace App\Database\Migrations;

class CreateSupplies extends \CodeIgniter\Database\Migration {

    private $table = 'supplies';

    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type'  => 'BIGINT',
          'constraint'  => 5,
          'unsigned'  => TRUE,
          'auto_increment' => TRUE
        ],
        'supply_type_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'name' => [
          'type' => 'VARCHAR',
          'constraint'  => '255',
          'comment' => ''
        ],
        'description' => [
          'type' => 'TEXT',
          'comment' => ''
        ],
        'quantity' => [
          'type' => 'int',
          'comment' => ''
        ],
        'unit' => [
          'type' => 'VARCHAR',
          'constraint'  => '255',
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
      $db      = \Config\Database::connect();
      $builder = $db->table($this->table);
      $db->simpleQuery('DELETE FROM '.$this->table);
      $this->forge->dropTable($this->table);
    }
}
