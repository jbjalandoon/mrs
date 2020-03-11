<?php namespace App\Database\Migrations;

class CreateVitalsPermissions extends \CodeIgniter\Database\Migration {

    private $table = 'permissions';
    public function up()
    {

      $data = [

          [
            'function_name' => 'list of Vitals',
            'function_description' => 'list of Vitals',
            'slugs' => 'list-of-Vitals',
            'name_on_class' => 'index',
            'page_title' => 'list of Vitals',
            'module_id' => '4',
            'link_icon' => '',
            'order' => '5',
            'table_name' => 'vitals',
            'func_action' => 'link',
            'func_type' => 1,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
          ],

          [
            'function_name' => 'create vitals',
            'function_description' => 'create vitals',
            'slugs' => 'add-vitals',
            'name_on_class' => 'add_vitals',
            'page_title' => 'create a vitals',
            'module_id' => '4',
            'link_icon' => '',
            'order' => '6',
            'table_name' => 'vitals',
            'func_action' => 'add',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
         ],

         [
            'function_name' => 'edit vitals',
            'function_description' => 'edit vitals',
            'slugs' => 'edit-vitals',
            'name_on_class' => 'edit_vitals',
            'page_title' => 'edit a vitals',
            'module_id' => '4',
            'link_icon' => '',
            'order' => '7',
            'table_name' => 'vitals',
            'func_action' => 'edit',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
         ],

         [
            'function_name' => 'delete vitals',
            'function_description' => 'delete vitals',
            'slugs' => 'delete-vitals',
            'name_on_class' => 'delete_vitals',
            'page_title' => 'delete a vitals',
            'module_id' => '4',
            'link_icon' => '',
            'order' => '8',
            'table_name' => 'vitals',
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
            //$this->forge->dropTable($this->table);
    }
}
