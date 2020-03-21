<?php namespace App\Database\Migrations;

class CreateVitalsPermissions extends \CodeIgniter\Database\Migration {

    private $table = 'permissions';
    public function up()
    {

      $data = [
         [
            'function_name' => 'edit vitals',
            'function_description' => 'edit vitals',
            'slugs' => 'edit-vitals',
            'name_on_class' => 'edit_vitals',
            'page_title' => 'edit a vitals',
            'module_id' => '4',
            'link_icon' => '',
            'order' => '3',
            'table_name' => 'vitals',
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

    public function down()
    {

    }
}
