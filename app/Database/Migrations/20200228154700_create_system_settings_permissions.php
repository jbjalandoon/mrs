<?php namespace App\Database\Migrations;

class CreateSystemSettingsPermissions extends \CodeIgniter\Database\Migration {

    private $table = 'permissions';

    public function up()
    {
      $data = [
        [
            'function_name' => 'list of conditions',
            'function_description' => 'list of conditions',
            'slugs' => 'list-condition',
            'name_on_class' => 'index',
            'page_title' => 'list of conditions',
            'module_id' => '1',
            'link_icon' => '<i class="fas fa-users"></i>',
            'order' => '1',
            'table_name' => 'conditions',
            'func_action' => 'link',
            'func_type' => 1,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'add conditions',
            'function_description' => 'add conditions',
            'slugs' => 'add-condition',
            'name_on_class' => 'add_condition',
            'page_title' => 'add conditions',
            'module_id' => '1',
            'link_icon' => '',
            'order' => '2',
            'table_name' => 'conditions',
            'func_action' => 'add',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'delete conditions',
            'function_description' => 'delete conditions',
            'slugs' => 'delete-condition',
            'name_on_class' => 'delete_condition',
            'page_title' => 'delete conditions',
            'module_id' => '1',
            'link_icon' => '',
            'order' => '3',
            'table_name' => 'conditions',
            'func_action' => 'delete',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'edit conditions',
            'function_description' => 'edit conditions',
            'slugs' => 'edit-condition',
            'name_on_class' => 'edit_condition',
            'page_title' => 'edit conditions',
            'module_id' => '1',
            'link_icon' => '',
            'order' => '4',
            'table_name' => 'conditions',
            'func_action' => 'edit',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'list of allergy',
            'function_description' => 'list of allergy',
            'slugs' => 'list-allergy',
            'name_on_class' => 'index',
            'page_title' => 'list of allergy',
            'module_id' => '1',
            'link_icon' => '<i class="fas fa-users"></i>',
            'order' => '5',
            'table_name' => 'allergies',
            'func_action' => 'link',
            'func_type' => 1,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'add allergy',
            'function_description' => 'add allergy',
            'slugs' => 'add-allergy',
            'name_on_class' => 'add_allergy',
            'page_title' => 'add allergy',
            'module_id' => '1',
            'link_icon' => '',
            'order' => '6',
            'table_name' => 'allergies',
            'func_action' => 'add',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'delete allergy',
            'function_description' => 'delete allergy',
            'slugs' => 'delete-allergy',
            'name_on_class' => 'delete_allergy',
            'page_title' => 'delete allergy',
            'module_id' => '1',
            'link_icon' => '',
            'order' => '7',
            'table_name' => 'allergies',
            'func_action' => 'delete',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'edit allergy',
            'function_description' => 'edit allergy',
            'slugs' => 'edit-allergy',
            'name_on_class' => 'edit_allergy',
            'page_title' => 'edit allergy',
            'module_id' => '1',
            'link_icon' => '',
            'order' => '8',
            'table_name' => 'allergies',
            'func_action' => 'edit',
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

    public function down(){

    }
}
