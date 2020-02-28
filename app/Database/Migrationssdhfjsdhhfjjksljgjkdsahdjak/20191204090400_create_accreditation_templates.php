<?php namespace App\Database\Migrations;

class CreateAccreditationTemplates extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'template_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'template_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],

                        'accreditation_level_id' => [
                                'type'           => 'BIGINT',
                        ],

                        'academic_program_id' => [
                                'type'           => 'BIGINT',
                        ],

                        'area_id' => [
                                'type'           => 'BIGINT',
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'is_finalized' => [
                                'type'           => 'INT',
                                'constraint'     => '1',
                                'default'        => 0,
                        ],

                        'created_by' => [
                                'type'           => 'BIGINT',
                                'comment'        => 'User ID of the template creator',
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
                $this->forge->createTable('accreditation_templates');
        }

        public function down()
        {
                $this->forge->dropTable('accreditation_templates');
        }
}
