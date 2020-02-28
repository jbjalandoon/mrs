<?php namespace App\Database\Migrations;

class CreateParameterItems extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'parameter_item'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],

                        'document_needed_list' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],

                        'tagged_documents' => [
                                'type'           => 'JSON',
                                'comment'           => 'academic_document_ids of the tagged documents',
                                'null'           => TRUE,
                        ],

                        'parameter_section_id' => [
                                'type'           => 'BIGINT',
                        ],

                        'accreditation_template_id' => [
                                'type'           => 'BIGINT',
                        ],

                        'template_parameter_id' => [
                                'type'           => 'BIGINT',
                        ],

                        'parent_parameter_item_id' => [
                                'type'           => 'BIGINT',
                                'default'        => '0'
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
                $this->forge->createTable('parameter_items');
        }

        public function down()
        {
                $this->forge->dropTable('parameter_items');
        }
}
