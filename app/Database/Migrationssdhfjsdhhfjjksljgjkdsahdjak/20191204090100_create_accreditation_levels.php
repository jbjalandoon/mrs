<?php namespace App\Database\Migrations;

class CreateAccreditationLevels extends \CodeIgniter\Database\Migration {
        private $table = 'accreditation_levels';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'accreditation_level'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
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
                        'accreditation_level' => 'preliminary visit',
                        'description' => 'preliminary visit',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 2,
                        'accreditation_level' => 'level 1',
                        'description' => 'level 1',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 3,
                        'accreditation_level' => 'level 2',
                        'description' => 'level 2',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 4,
                        'accreditation_level' => 'level 3',
                        'description' => 'level 3',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 5,
                        'accreditation_level' => 'level 4',
                        'description' => 'level 4',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 6,
                        'accreditation_level' => 'level 5',
                        'description' => 'level 5',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ]
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
