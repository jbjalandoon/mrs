<?php namespace App\Database\Migrations;

class CreateAppointments extends \CodeIgniter\Database\Migration {

    private $table = 'appointments';

    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type'  => 'BIGINT',
          'constraint'  => 5,
          'unsigned'  => TRUE,
          'auto_increment' => TRUE
        ],
        'visits_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'user_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'schedule' => [
          'type' => 'datetime',
          'comment' => ''
        ],
        'appointment_status' => [
          'type' => 'tinyint',
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
