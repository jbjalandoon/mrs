<?php namespace App\Database\Migrations;

class CreateAppointmentsPermission extends \CodeIgniter\Database\Migration {

    private $table = 'permissions';

    public function up()
    {
      $data = [
        [
            'function_name' => 'list of appointments',
            'function_description' => 'list of appointments',
            'slugs' => 'list-appointments',
            'name_on_class' => 'index',
            'page_title' => 'list of appointments',
            'module_id' => '5',
            'link_icon' => '<i class="fas fa-users"></i>',
            'order' => '1',
            'table_name' => 'appointments',
            'func_action' => 'link',
            'func_type' => 1,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'add appointments',
            'function_description' => 'add appointments',
            'slugs' => 'add-appointments',
            'name_on_class' => 'add_appointments',
            'page_title' => 'add of appointments',
            'module_id' => '5',
            'link_icon' => '',
            'order' => '2',
            'table_name' => 'appointments',
            'func_action' => 'add',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'edit appointments',
            'function_description' => 'edit appointments',
            'slugs' => 'edit-appointments',
            'name_on_class' => 'edit_appointments',
            'page_title' => 'edit of appointments',
            'module_id' => '5',
            'link_icon' => '',
            'order' => '3',
            'table_name' => 'appointments',
            'func_action' => 'edit',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'delete appointments',
            'function_description' => 'delete appointments',
            'slugs' => 'delete-appointments',
            'name_on_class' => 'delete_appointments',
            'page_title' => 'delete of appointments',
            'module_id' => '5',
            'link_icon' => '',
            'order' => '4',
            'table_name' => 'appointments',
            'func_action' => 'delete',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'list of my appointments',
            'function_description' => 'list of my appointments',
            'slugs' => 'list-my-appointments',
            'name_on_class' => 'index',
            'page_title' => 'list of my appointments',
            'module_id' => '5',
            'link_icon' => '<i class="fas fa-users"></i>',
            'order' => '5',
            'table_name' => 'appointments',
            'func_action' => 'link',
            'func_type' => 1,
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
