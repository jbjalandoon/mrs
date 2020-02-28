<?php namespace App\Database\Migrations;

class CreateAccreditationTemplatePermissions extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {
          $data = [
              [
                  'id' => 39,
                  'function_name' => 'create accreditation template',
                  'function_description' => 'creating accreditation template',
                  'slugs' => 'add-accreditation-template',
                  'name_on_class' => 'add_accreditation_template',
                  'page_title' => 'creating accreditation template',
                  'module_id' => '4',
                  'order' => '150',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'accreditation_templates',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 40,
                  'function_name' => 'accreditation templates',
                  'function_description' => 'list of accreditation template',
                  'slugs' => 'list-accreditation-template',
                  'name_on_class' => 'index',
                  'page_title' => 'accreditation templates',
                  'module_id' => '4',
                  'order' => '151',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="fas fa-images"></i>',
                  'table_name' => 'accreditation_templates',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 41,
                  'function_name' => 'show accreditation template',
                  'function_description' => 'show accreditation template',
                  'slugs' => 'show-accreditation-template',
                  'name_on_class' => 'show_accreditation_template',
                  'page_title' => 'accreditation template details',
                  'module_id' => '4',
                  'order' => '152',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'accreditation_templates',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 42,
                  'function_name' => 'edit accreditation template',
                  'function_description' => 'edit accreditation template',
                  'slugs' => 'edit-accreditation-template',
                  'name_on_class' => 'edit_accreditation_template',
                  'page_title' => 'edit accreditation template details',
                  'module_id' => '4',
                  'order' => '153',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'accreditation_templates',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 43,
                  'function_name' => 'delete accreditation template',
                  'function_description' => 'delete accreditation template',
                  'slugs' => 'delete-accreditation-template',
                  'name_on_class' => 'delete_accreditation_template',
                  'page_title' => 'delete accreditation template',
                  'module_id' => '4',
                  'order' => '154',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'accreditation_templates',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 44,
                  'function_name' => 'Add parameter item',
                  'function_description' => 'Add parameter item',
                  'slugs' => 'add-parameter-item',
                  'name_on_class' => 'add_parameter_item',
                  'page_title' => 'Add parameter item',
                  'module_id' => '4',
                  'order' => '155',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'parameter_items',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 45,
                  'function_name' => 'MSI',
                  'function_description' => 'MSI',
                  'slugs' => 'list-parameter-items',
                  'name_on_class' => 'index',
                  'page_title' => 'MSI',
                  'module_id' => '4',
                  'order' => '156',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="fas fa-list-ol"></i>',
                  'table_name' => 'msi',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 46,
                  'function_name' => 'show parameter item',
                  'function_description' => 'show parameter item',
                  'slugs' => 'show-parameter-item',
                  'name_on_class' => 'show_parameter_item',
                  'page_title' => 'parameter item details',
                  'module_id' => '4',
                  'order' => '157',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'parameter_items',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 47,
                  'function_name' => 'edit parameter item',
                  'function_description' => 'edit parameter item',
                  'slugs' => 'edit-parameter-item',
                  'name_on_class' => 'edit_parameter_item',
                  'page_title' => 'edit parameter item',
                  'module_id' => '4',
                  'order' => '158',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'parameter_items',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 48,
                  'function_name' => 'delete parameter item',
                  'function_description' => 'delete parameter item',
                  'slugs' => 'delete-parameter-item',
                  'name_on_class' => 'delete_parameter_item',
                  'page_title' => 'delete parameter_item',
                  'module_id' => '4',
                  'order' => '159',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'parameter_items',
                  'func_action' => 'delete',
                  'func_type' => 3,
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
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 39 AND id <= 47');
        }
}
