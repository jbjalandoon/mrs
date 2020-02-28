<?php namespace App\Database\Migrations;

class CreateInventoryPermissions extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {
            $data = [
                [
                    'function_name' => 'list of supplies',
                    'function_description' => 'list of supplies',
                    'slugs' => 'list-of-supplies',
                    'name_on_class' => 'index',
                    'page_title' => 'supplies',
                    'module_id' => '6',
                    'link_icon' => '<i class="fas fa-briefcase-medical"></i>',
                    'order' => '1',
                    'table_name' => 'supplies',
                    'func_action' => 'link',
                    'func_type' => 1,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'add supplies',
                    'function_description' => 'add supplies',
                    'slugs' => 'add-supplies',
                    'name_on_class' => 'add_supplies',
                    'page_title' => 'add supplies',
                    'module_id' => '6',
                    'link_icon' => '',
                    'order' => '2',
                    'table_name' => 'supplies',
                    'func_action' => 'add',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'edit supplies',
                    'function_description' => 'edit supplies',
                    'slugs' => 'edit-supplies',
                    'name_on_class' => 'edit_supplies',
                    'page_title' => 'edit supplies',
                    'module_id' => '6',
                    'link_icon' => '',
                    'order' => '3',
                    'table_name' => 'supplies',
                    'func_action' => 'edit',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'delete supplies',
                    'function_description' => 'delete supplies',
                    'slugs' => 'delete-supplies',
                    'name_on_class' => 'delete_supplies',
                    'page_title' => 'delete supplies',
                    'module_id' => '6',
                    'link_icon' => '',
                    'order' => '4',
                    'table_name' => 'supplies',
                    'func_action' => 'delete',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'list of supply types',
                    'function_description' => 'list of supply types',
                    'slugs' => 'list-of-supply-types',
                    'name_on_class' => 'index',
                    'page_title' => 'supply types',
                    'module_id' => '6',
                    'link_icon' => '<i class="fas fa-list"></i>',
                    'order' => '5',
                    'table_name' => 'supply_types',
                    'func_action' => 'link',
                    'func_type' => 1,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'add supply types',
                    'function_description' => 'add supply types',
                    'slugs' => 'add-supply-types',
                    'name_on_class' => 'add_supply_types',
                    'page_title' => 'add supply types',
                    'module_id' => '6',
                    'link_icon' => '',
                    'order' => '6',
                    'table_name' => 'supply_types',
                    'func_action' => 'add',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'edit supply types',
                    'function_description' => 'edit supply types',
                    'slugs' => 'edit-supply-types',
                    'name_on_class' => 'edit_supply_types',
                    'page_title' => 'edit supply types',
                    'module_id' => '6',
                    'link_icon' => '',
                    'order' => '7',
                    'table_name' => 'supply_types',
                    'func_action' => 'edit',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'delete supply types',
                    'function_description' => 'delete supply types',
                    'slugs' => 'delete-supply-types',
                    'name_on_class' => 'delete_supply_types',
                    'page_title' => 'delete supply types',
                    'module_id' => '6',
                    'link_icon' => '',
                    'order' => '8',
                    'table_name' => 'supply_types',
                    'func_action' => 'delete',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'show supplies',
                    'function_description' => 'show supplies',
                    'slugs' => 'show-supplies',
                    'name_on_class' => 'show_supplies',
                    'page_title' => 'supplies',
                    'module_id' => '6',
                    'link_icon' => '<i class="fas fa-briefcase-medical"></i>',
                    'order' => '9',
                    'table_name' => 'supplies',
                    'func_action' => 'show',
                    'func_type' => 3,
                    'allowed_roles' => "[1]",
                    'status' => 'a',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'function_name' => 'show supply types',
                    'function_description' => 'show supply types',
                    'slugs' => 'show-supply-types',
                    'name_on_class' => 'show_supply_types',
                    'page_title' => 'supply types',
                    'module_id' => '6',
                    'link_icon' => '<i class="fas fa-briefcase-medical"></i>',
                    'order' => '9',
                    'table_name' => 'supply_types',
                    'func_action' => 'show',
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

        }
}
