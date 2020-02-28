<?php namespace App\Database\Migrations;

class CreateTemplateParameters extends \CodeIgniter\Database\Migration {
        private $table = 'template_parameters';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'parameter_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'title'       => [
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
                        'parameter_code' => 'parameter a',
                        'title' => 'Statement of Vision, Mission, Goals and Objectives ',
                        'description' => 'Statement of Vision, Mission, Goals and Objectives',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 2,
                        'parameter_code' => 'parameter b',
                        'title' => 'Dissemination and Acceptability',
                        'description' => 'Dissemination and Acceptability',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 3,
                        'parameter_code' => 'parameter a',
                        'title' => 'Academic Qualifications and Professional Experience',
                        'description' => 'Academic Qualifications and Professional Experience',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 4,
                        'parameter_code' => 'parameter b',
                        'title' => 'Recruitment, Selection and Orientation',
                        'description' => 'Recruitment, Selection and Orientation',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 5,
                        'parameter_code' => 'parameter c',
                        'title' => 'Faculty Adequacy and Loading ',
                        'description' => 'Faculty Adequacy and Loading ',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 6,
                        'parameter_code' => 'parameter d',
                        'title' => 'Rank and Tenure',
                        'description' => 'Rank and Tenure',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 7,
                        'parameter_code' => 'parameter e',
                        'title' => ' Faculty Development',
                        'description' => ' Faculty Development',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 8,
                        'parameter_code' => 'parameter f',
                        'title' => 'Professional Performance and Scholarly Works',
                        'description' => 'Professional Performance and Scholarly Works',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 9,
                        'parameter_code' => 'parameter g',
                        'title' => 'Salaries, Fringe Benefits and Incentives',
                        'description' => 'Salaries, Fringe Benefits and Incentives',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 10,
                        'parameter_code' => 'parameter h',
                        'title' => 'Professionalism',
                        'description' => 'Professionalism',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 11,
                        'parameter_code' => 'parameter a',
                        'title' => 'Curriculum and Program Studies',
                        'description' => 'Curriculum and Program Studies',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 12,
                        'parameter_code' => 'parameter b',
                        'title' => 'Instructional Processes, Methodologies and Learning Enhancement Opportunities',
                        'description' => 'Instructional Processes, Methodologies and Learning Enhancement Opportunities',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 13,
                        'parameter_code' => 'parameter c',
                        'title' => 'Assessment of Academic Performance',
                        'description' => 'Assessment of Academic Performance',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 14,
                        'parameter_code' => 'parameter d',
                        'title' => 'Management of Learning',
                        'description' => 'Management of Learning',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 15,
                        'parameter_code' => 'parameter e',
                        'title' => 'Graduation Requirements',
                        'description' => 'Graduation Requirements',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 16,
                        'parameter_code' => 'parameter f',
                        'title' => 'Administrative Support for Effective Instruction',
                        'description' => 'Administrative Support for Effective Instruction',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 17,
                        'parameter_code' => 'parameter a',
                        'title' => 'Student Services Program (SSP)',
                        'description' => 'Student Services Program (SSP)',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 18,
                        'parameter_code' => 'parameter b',
                        'title' => 'Student Welfare',
                        'description' => 'Student Welfare',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 19,
                        'parameter_code' => 'parameter c',
                        'title' => 'Student Development',
                        'description' => 'Student Development',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 20,
                        'parameter_code' => 'parameter d',
                        'title' => 'Institutional Student Program and Services',
                        'description' => 'Institutional Student Program and Services',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 21,
                        'parameter_code' => 'parameter e',
                        'title' => 'Research, Monitoring and Evaluation',
                        'description' => 'Research, Monitoring and Evaluation',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 22,
                        'parameter_code' => 'parameter a',
                        'title' => 'Priorities and Relevance',
                        'description' => 'Priorities and Relevance',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 23,
                        'parameter_code' => 'parameter b',
                        'title' => 'Funding and Other Resources',
                        'description' => 'Funding and Other Resources',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 24,
                        'parameter_code' => 'parameter c',
                        'title' => 'Implementation, Monitoring, Evaluation and Utilization of Research Results/Outputs',
                        'description' => 'Implementation, Monitoring, Evaluation and Utilization of Research Results/Outputs',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 25,
                        'parameter_code' => 'parameter d',
                        'title' => 'Publication and Dissemination',
                        'description' => 'Publication and Dissemination',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 26,
                        'parameter_code' => 'parameter b',
                        'title' => 'Planning, Implementation, Monitoring and Evaluation',
                        'description' => 'Planning, Implementation, Monitoring and Evaluation',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 27,
                        'parameter_code' => 'parameter d',
                        'title' => 'Community Involvement and Participation',
                        'description' => 'Community Involvement and Participation',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 28,
                        'parameter_code' => 'parameter a',
                        'title' => 'Administration',
                        'description' => 'Administration',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 29,
                        'parameter_code' => 'parameter b',
                        'title' => 'Administrative Staff',
                        'description' => 'Administrative Staff',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 30,
                        'parameter_code' => 'parameter c',
                        'title' => 'COLLECTION DEVELOPMENT, ORGANIZATION AND PRESERVATION',
                        'description' => 'COLLECTION DEVELOPMENT, ORGANIZATION AND PRESERVATION',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 31,
                        'parameter_code' => 'parameter d',
                        'title' => 'SERVICES AND UTILIZATION',
                        'description' => 'SERVICES AND UTILIZATION',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 32,
                        'parameter_code' => 'parameter e',
                        'title' => 'PHYSICAL SET-UP AND FACILITIES',
                        'description' => 'PHYSICAL SET-UP AND FACILITIES',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 33,
                        'parameter_code' => 'parameter f',
                        'title' => 'FINANCIAL SUPPORT',
                        'description' => 'FINANCIAL SUPPORT',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 34,
                        'parameter_code' => 'parameter g',
                        'title' => 'LINKAGES',
                        'description' => 'LINKAGES',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 35,
                        'parameter_code' => 'parameter a',
                        'title' => 'Campus',
                        'description' => 'Campus',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 36,
                        'parameter_code' => 'parameter b',
                        'title' => 'Buildings',
                        'description' => 'Buildings',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 37,
                        'parameter_code' => 'parameter c',
                        'title' => 'Classrooms',
                        'description' => 'Classrooms',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 38,
                        'parameter_code' => 'parameter d',
                        'title' => 'Offices, Staff and Function Rooms',
                        'description' => 'Offices, Staff and Function Rooms',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 39,
                        'parameter_code' => 'parameter e',
                        'title' => 'Assembly and Athletic Facilities',
                        'description' => 'Assembly and Athletic Facilities',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 40,
                        'parameter_code' => 'parameter f',
                        'title' => 'Medical and Dental Clinic',
                        'description' => 'Medical and Dental Clinic',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 41,
                        'parameter_code' => 'parameter g',
                        'title' => 'Student Canter',
                        'description' => 'Student Canter',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 42,
                        'parameter_code' => 'parameter h',
                        'title' => 'Food Services / Canteen',
                        'description' => 'Food Services / Canteen',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 43,
                        'parameter_code' => 'parameter i',
                        'title' => 'Accreditation Center',
                        'description' => 'Accreditation Center',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 44,
                        'parameter_code' => 'parameter j',
                        'title' => 'Housing',
                        'description' => 'Housing',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 45,
                        'parameter_code' => 'parameter a',
                        'title' => 'Laboratories, Shops/Facilities',
                        'description' => 'Laboratories, Shops/Facilities',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 46,
                        'parameter_code' => 'parameter b',
                        'title' => 'Equipment and Supplies',
                        'description' => 'Equipment and Supplies',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 47,
                        'parameter_code' => 'parameter c',
                        'title' => 'Maintenance',
                        'description' => 'Maintenance',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 48,
                        'parameter_code' => 'parameter d',
                        'title' => 'Special Provisions',
                        'description' => 'Special Provisions',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 49,
                        'parameter_code' => 'parameter a',
                        'title' => 'Organization',
                        'description' => 'Organization',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 50,
                        'parameter_code' => 'parameter b',
                        'title' => 'Academic Administration',
                        'description' => 'Academic Administration',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 51,
                        'parameter_code' => 'parameter c',
                        'title' => 'Student Administration',
                        'description' => 'Student Administration',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 52,
                        'parameter_code' => 'parameter d',
                        'title' => 'Financial Management',
                        'description' => 'Financial Management',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 53,
                        'parameter_code' => 'parameter e',
                        'title' => 'Supply Management',
                        'description' => 'Supply Management',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 54,
                        'parameter_code' => 'parameter f',
                        'title' => 'Records Management',
                        'description' => 'Records Management',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 55,
                        'parameter_code' => 'parameter g',
                        'title' => 'Institutional Planning and Development',
                        'description' => 'Institutional Planning and Development',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 56,
                        'parameter_code' => 'parameter h',
                        'title' => 'Performance of Administrative Personnel',
                        'description' => 'Performance of Administrative Personnel',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'id'  => 57,
                        'parameter_code' => 'parameter C',
                        'title' => 'Funding and Other Resources',
                        'description' => 'Funding and Other Resources',
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
