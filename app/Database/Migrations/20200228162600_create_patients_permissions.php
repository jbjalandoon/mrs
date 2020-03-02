<?php namespace App\Database\Migrations;

class CreatePatientPermissions extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {
                  $data = [
                      [
                          'name_on_class' => 'patient_own_profile',
                          'function_name' => 'patient\'s own profile',
                          'function_description' => 'patients\'s own profile',
                          'slugs' => 'patient-own-profile',
                          'page_title' => 'patient\'s own profile',
                          'module_id' => '3',
                          'link_icon' => '<i class="far fa-address-card"></i>',
                          'order' => 1,
                          'table_name' => 'patients',
                          'func_action' => 'link',
                          'func_type' => 1,
                          'allowed_roles' => '[1]',
                          'status' => 'a',
                          'created_at' => date('Y-m-d H:i:s')
                      ],
                      [
                          'function_name' => 'show patient details',
                          'function_description' => 'show patient details',
                          'slugs' => 'show-patient',
                          'name_on_class' => 'show_patient',
                          'page_title' => 'patient details',
                          'module_id' => '3',
                          'link_icon' => '',
                          'order' => '2',
                          'table_name' => 'patients',
                          'func_action' => 'show',
                          'func_type' => 3,
                          'allowed_roles' => "[1]",
                          'status' => 'a',
                          'created_at' => date('Y-m-d H:i:s')
                      ],
                      [
                          'function_name' => 'create patient',
                          'function_description' => 'create patient',
                          'slugs' => 'add-patient',
                          'name_on_class' => 'add_patient',
                          'page_title' => 'create a patient',
                          'module_id' => '3',
                          'link_icon' => '',
                          'order' => '3',
                          'table_name' => 'patients',
                          'func_action' => 'add',
                          'func_type' => 3,
                          'allowed_roles' => "[1]",
                          'status' => 'a',
                          'created_at' => date('Y-m-d H:i:s')
                      ],
                      [
                          'function_name' => 'list of patients',
                          'function_description' => 'patients',
                          'slugs' => 'list-patient',
                          'name_on_class' => 'index',
                          'page_title' => 'list of patients',
                          'module_id' => '3',
                          'link_icon' => '<i class="fas fa-users"></i>',
                          'order' => '4',
                          'table_name' => 'patients',
                          'func_action' => 'link',
                          'func_type' => 1,
                          'allowed_roles' => "[1]",
                          'status' => 'a',
                          'created_at' => date('Y-m-d H:i:s')
                      ],
                      [
                          'function_name' => 'edit patient',
                          'function_description' => 'edit patient',
                          'slugs' => 'edit-patient',
                          'name_on_class' => 'edit_patient',
                          'page_title' => 'edit patient',
                          'module_id' => '3',
                          'link_icon' => '',
                          'order' => '5',
                          'table_name' => 'users',
                          'func_action' => 'edit',
                          'func_type' => 3,
                          'allowed_roles' => "[1]",
                          'status' => 'a',
                          'created_at' => date('Y-m-d H:i:s')
                      ],
                      [
                          'function_name' => 'delete patient',
                          'function_description' => 'delete patient',
                          'slugs' => 'delete-patient',
                          'name_on_class' => 'delete_patient',
                          'page_title' => 'delete patient',
                          'module_id' => '3',
                          'link_icon' => '',
                          'order' => '6',
                          'table_name' => 'patients',
                          'func_action' => 'delete',
                          'func_type' => 3,
                          'allowed_roles' => "[1]",
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
