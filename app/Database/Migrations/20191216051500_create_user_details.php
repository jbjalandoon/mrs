<?php namespace App\Database\Migrations;

class CreateUserDetails extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'user_id'       => [
                                'type'           => 'BIGINT'
                        ],

                        'area_id' => [
                                'type'           => 'BIGINT'
                        ],

                        'department_id' => [
                                'type'           => 'BIGINT'
                        ],

                        'academic_program_id' => [
                                'type'           => 'BIGINT'
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('user_details');
        }

        public function down()
        {
                $this->forge->dropTable('user_details');
        }
}
