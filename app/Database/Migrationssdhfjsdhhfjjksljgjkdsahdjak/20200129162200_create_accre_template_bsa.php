<?php namespace App\Database\Migrations;
class CreateAccreTemplateBsa extends \CodeIgniter\Database\Migration {

        private $table = 'accreditation_templates';
        public function up()
        {
          $data = [
              [
                  'id' => 1,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area I',
                  'description' => 'MSI BS Accountancy - Area I',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '1',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 2,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area II',
                  'description' => 'MSI BS Accountancy - Area II',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '2',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 3,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area III',
                  'description' => 'MSI BS Accountancy - Area III',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '3',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 4,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area IV',
                  'description' => 'MSI BS Accountancy - Area IV',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '4',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 5,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area V',
                  'description' => 'MSI BS Accountancy - Area V',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '5',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 6,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area VI',
                  'description' => 'MSI BS Accountancy - Area VI',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '6',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 7,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area VII',
                  'description' => 'MSI BS Accountancy - Area VII',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '7',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 8,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area VIII',
                  'description' => 'MSI BS Accountancy - Area VIII',
                  'accreditation_level_id' => 2,  //create_accreditation_levels
                  'academic_program_id' => 4,   //create_programs
                  'area_id' => '8',  //create_areas
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
          ];
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $builder->insertBatch($data);
        }

        public function down()
        {
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 39 AND id <= 47');
        }
}
