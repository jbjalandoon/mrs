<?php namespace App\Database\Migrations;

class CreateUsers extends \CodeIgniter\Database\Migration {
        private $table = 'users';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'lastname'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'firstname'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'username'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'password'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '60',
                        ],
                        'birthdate'       => [
                                'type'           => 'DATE'
                        ],
                        'role_id'       => [
                                'type'           => 'BIGINT',
                                'default'        => 2
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
                        'lastname' => 'Admin',
                        'firstname' => 'Admin',
                        'username' => 'admin',
                        'email' => 'admin@admin.com',
                        'password' => password_hash('admin', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'User',
                        'firstname' => 'User',
                        'username' => 'user',
                        'email' => 'user@admin.com',
                        'password' => password_hash('user', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 2,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'Area',
                        'firstname' => 'Area',
                        'username' => 'area',
                        'email' => 'area@admin.com',
                        'password' => password_hash('area', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'Department',
                        'firstname' => 'Department',
                        'username' => 'department',
                        'email' => 'department@admin.com',
                        'password' => password_hash('department', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 4,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'Academic',
                        'firstname' => 'Academic',
                        'username' => 'academic',
                        'email' => 'academic@admin.com',
                        'password' => password_hash('academic', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 5,
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
                $this->forge->dropTable('users');
        }
}
