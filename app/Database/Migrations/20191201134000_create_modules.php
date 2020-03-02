<?php namespace App\Database\Migrations;

class CreateModules extends \CodeIgniter\Database\Migration {

        private $table = 'modules';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'module_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],

                        'module_description'       => [
                                'type'           => 'TEXT',
                        ],

                        'module_icon'       => [
                                'type'           => 'TEXT',
                        ],

                        'order'       => [
                                'type'           => 'INT'
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
<<<<<<< HEAD
                $data = [
                    [
                        'module_name' => 'system settings',
                        'module_description' => 'system settings',
                        'module_icon' => '<i class="fas fa-cogs"></i>',
                        'order' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'user management',
                        'module_description' => 'user management',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 2,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'patients',
                        'module_description' => 'patients',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'visits',
                        'module_description' => 'visit',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 4,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'appointments',
                        'module_description' => 'appointments',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 5,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'inventory',
                        'module_description' => 'inventory',
<<<<<<< HEAD
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
=======
                        'module_icon' => '<i class="fas fa-boxes"></i>',
>>>>>>> 33d2a469b853b3920ff512218f74179ef5eef9f1
                        'order' => 6,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
=======

                  $data = [
                  [
                      'module_name' => 'system settings',
                      'module_description' => 'system settings',
                      'module_icon' => '<i class="fas fa-cogs"></i>',
                      'order' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'module_name' => 'user management',
                      'module_description' => 'user management',
                      'module_icon' => '<i class="fas fa-users-cog"></i>',
                      'order' => 2,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'module_name' => 'patients',
                      'module_description' => 'patients',
                      'module_icon' => '<i class="fas fa-user-injured"></i>',
                      'order' => 3,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'module_name' => 'visits',
                      'module_description' => 'visit',
                      'module_icon' => '<i class="fas fa-users-cog"></i>',
                      'order' => 4,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'module_name' => 'appointments',
                      'module_description' => 'appointments',
                      'module_icon' => '<i class="fas fa-users-cog"></i>',
                      'order' => 5,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'module_name' => 'inventory',
                      'module_description' => 'inventory',
                      'module_icon' => '<i class="fas fa-users-cog"></i>',
                      'order' => 6,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
>>>>>>> 8f80f3538bd96dcac700d44bf1a6c75c108ee0af
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
