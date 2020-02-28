<?php namespace App\Database\Migrations;

class CreatePrograms extends \CodeIgniter\Database\Migration {
        private $table = 'academic_programs';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'program_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],
                        'program_head_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'comment'       => 'user id of the program head',
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
                $this->forge->createTable($this->table);

                $data = [
                    [
                        'id'  => 1,
                        'program_name' => 'bsit',
                        'description' => 'bachelor of science in information technology',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 2,
                        'program_name' => 'bsece',
                        'description' => 'bachelor of science in electronic and communications engineering',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 3,
                        'program_name' => 'bsme',
                        'description' => 'bachelor of science in mechanical engineering',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 4,
                        'program_name' => 'bsa',
                        'description' => 'bachelor of science in accountancy',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 5,
                        'program_name' => 'business management',
                        'description' => 'business management',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 6,
                        'program_name' => 'bsoa',
                        'description' => 'bachelor of science in office administration major in legal transcription',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 7,
                        'program_name' => 'bsed-math',
                        'description' => 'bachelor of science in education major in mathematics',
                        'program_head_id' => 1,
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
                $this->forge->dropTable($this->table);
        }
}
