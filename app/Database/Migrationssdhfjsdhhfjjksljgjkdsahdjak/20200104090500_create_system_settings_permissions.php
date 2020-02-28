<?php namespace App\Database\Migrations;

class CreateSystemSettingsPermissions extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {
          $data = [
              [
                  'id' => 24,
                  'function_name' => 'creating a department',
                  'function_description' => 'creating a department',
                  'slugs' => 'add-department',
                  'name_on_class' => 'add_department',
                  'page_title' => 'creating a department',
                  'module_id' => '1',
                  'order' => '50',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'departments',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 25,
                  'function_name' => 'show department',
                  'function_description' => 'show department',
                  'slugs' => 'show-department',
                  'name_on_class' => 'show_department',
                  'page_title' => 'department details',
                  'module_id' => '1',
                  'order' => '51',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'departments',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 26,
                  'function_name' => 'departments',
                  'function_description' => 'departments',
                  'slugs' => 'list-departments',
                  'name_on_class' => 'index',
                  'page_title' => 'list of departments',
                  'module_id' => '1',
                  'order' => '52',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="far fa-building"></i>',
                  'table_name' => 'departments',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 27,
                  'function_name' => 'edit department',
                  'function_description' => 'edit of department',
                  'slugs' => 'edit-department',
                  'name_on_class' => 'edit_department',
                  'page_title' => 'edit department',
                  'module_id' => '1',
                  'order' => '53',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'departments',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 28,
                  'function_name' => 'delete department',
                  'function_description' => 'delete department',
                  'slugs' => 'delete-department',
                  'name_on_class' => 'delete_department',
                  'page_title' => 'edit department',
                  'module_id' => '1',
                  'order' => '54',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'departments',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 29,
                  'function_name' => 'create a area',
                  'function_description' => 'creating a area',
                  'slugs' => 'add-area',
                  'name_on_class' => 'add_area',
                  'page_title' => 'creating a area',
                  'module_id' => '1',
                  'order' => '55',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'areas',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 30,
                  'function_name' => 'show area',
                  'function_description' => 'show area',
                  'slugs' => 'show-area',
                  'name_on_class' => 'show_area',
                  'page_title' => 'area details',
                  'module_id' => '1',
                  'order' => '56',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'areas',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 31,
                  'function_name' => 'academic area',
                  'function_description' => 'academic area',
                  'slugs' => 'list-area',
                  'name_on_class' => 'index',
                  'page_title' => 'list of area',
                  'module_id' => '1',
                  'order' => '57',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="fas fa-layer-group"></i>',
                  'table_name' => 'areas',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 32,
                  'function_name' => 'edit area',
                  'function_description' => 'edit area',
                  'slugs' => 'edit-area',
                  'name_on_class' => 'edit_area',
                  'page_title' => 'edit area',
                  'module_id' => '1',
                  'order' => '58',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'areas',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 33,
                  'function_name' => 'delete area',
                  'function_description' => 'delete area',
                  'slugs' => 'delete-area',
                  'name_on_class' => 'delete_area',
                  'page_title' => 'edit area',
                  'module_id' => '1',
                  'order' => '59',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'areas',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 34,
                  'function_name' => 'create a program',
                  'function_description' => 'creating a program',
                  'slugs' => 'add-program',
                  'name_on_class' => 'add_program',
                  'page_title' => 'creating a program',
                  'module_id' => '1',
                  'order' => '60',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_programs',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 35,
                  'function_name' => 'show program',
                  'function_description' => 'show program',
                  'slugs' => 'show-program',
                  'name_on_class' => 'show_program',
                  'page_title' => 'program details',
                  'module_id' => '1',
                  'order' => '61',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_programs',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 36,
                  'function_name' => 'academic program',
                  'function_description' => 'academic program',
                  'slugs' => 'list-program',
                  'name_on_class' => 'index',
                  'page_title' => 'list of program',
                  'module_id' => '1',
                  'order' => '62',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="fab fa-leanpub"></i>',
                  'table_name' => 'academic_programs',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 37,
                  'function_name' => 'edit program',
                  'function_description' => 'edit program',
                  'slugs' => 'edit-program',
                  'name_on_class' => 'edit_program',
                  'page_title' => 'edit program',
                  'module_id' => '1',
                  'order' => '63',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_programs',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 38,
                  'function_name' => 'delete program',
                  'function_description' => 'delete program',
                  'slugs' => 'delete-program',
                  'name_on_class' => 'delete_program',
                  'page_title' => 'edit program',
                  'module_id' => '1',
                  'order' => '64',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_programs',
                  'func_action' => 'delete',
                  'func_type' => 3,
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
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 24 AND id <= 38');

          // $builder->where('id', $id);
          // $builder->delete();
        }
}
