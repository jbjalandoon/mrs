<?php namespace App\Database\Migrations;

class CreateAreas extends \CodeIgniter\Database\Migration {
        private $table = 'areas';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'area_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '10',
                        ],

                        'area_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],

                        'area_head_id' => [
                                'type'           => 'BIGINT',
                                'comment'        => 'User ID of the area Head',
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
                        'area_code' => 'area i',
                        'area_name' => 'VISION, MISSION, GOALS AND OBJECTIVES',
                        'description' => 'VISION, MISSION, GOALS AND OBJECTIVES',
                        'area_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 2,
                      'area_code' => 'area ii',
                      'area_name' => 'FACULTY',
                      'description' => 'FACULTY',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 3,
                      'area_code' => 'area iii',
                      'area_name' => 'CURRICULUM AND INSTRUCTION',
                      'description' => 'CURRICULUM AND INSTRUCTION',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 4,
                      'area_code' => 'area iv',
                      'area_name' => 'SUPPORT TO STUDENTS',
                      'description' => 'SUPPORT TO STUDENTS',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 5,
                      'area_code' => 'area v',
                      'area_name' => 'RESEARCH',
                      'description' => 'RESEARCH',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 6,
                      'area_code' => 'area vi',
                      'area_name' => 'EXTENSION AND COMMUNITY INVOLVEMENT',
                      'description' => 'EXTENSION AND COMMUNITY INVOLVEMENT',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 7,
                      'area_code' => 'area vii',
                      'area_name' => 'LIBRARY',
                      'description' => 'LIBRARY',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 8,
                      'area_code' => 'area viii',
                      'area_name' => 'PHYSICAL PLANT AND FACILITIES',
                      'description' => 'PHYSICAL PLANT AND FACILITIES',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 9,
                      'area_code' => 'area ix',
                      'area_name' => 'PHYSICAL PLANT AND FACILITIES',
                      'description' => 'PHYSICAL PLANT AND FACILITIES',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'id'  => 10,
                      'area_code' => 'area x',
                      'area_name' => 'ADMINISTRATION',
                      'description' => 'ADMINISTRATION',
                      'area_head_id' => 1,
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
