<?php namespace App\Database\Migrations;

class CreateDocumentsPermissions extends \CodeIgniter\Database\Migration {

        private $table = 'permissions';
        public function up()
        {
          $data = [
              [
                  'id' => 14,
                  'function_name' => 'creating a document type',
                  'function_description' => 'creating a document type',
                  'slugs' => 'add-document-type',
                  'name_on_class' => 'add_document_type',
                  'page_title' => 'creating a document type',
                  'module_id' => '3',
                  'order' => '100',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'document_types',
                  'func_action' => 'add',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 15,
                  'function_name' => 'show document type',
                  'function_description' => 'show document type',
                  'slugs' => 'show-document-type',
                  'name_on_class' => 'show_document_type',
                  'page_title' => 'document type details',
                  'module_id' => '3',
                  'order' => '101',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'document_types',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 16,
                  'function_name' => 'document types',
                  'function_description' => 'document types',
                  'slugs' => 'list-document-types',
                  'name_on_class' => 'index',
                  'page_title' => 'list of document types',
                  'module_id' => '3',
                  'order' => '102',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="far fa-file-image"></i>',
                  'table_name' => 'document_types',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 17,
                  'function_name' => 'edit document type',
                  'function_description' => 'edit of document type',
                  'slugs' => 'edit-document-type',
                  'name_on_class' => 'edit_document_type',
                  'page_title' => 'edit document type',
                  'module_id' => '3',
                  'order' => '103',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'document_types',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 18,
                  'function_name' => 'delete document type',
                  'function_description' => 'delete document type',
                  'slugs' => 'delete-document-type',
                  'name_on_class' => 'delete_document_type',
                  'page_title' => 'delete document type',
                  'module_id' => '3',
                  'order' => '104',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'document_types',
                  'func_action' => 'delete',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 19,
                  'function_name' => 'upload document',
                  'function_description' => 'upload academic document',
                  'slugs' => 'upload-academic-document',
                  'name_on_class' => 'upload_academic_document',
                  'page_title' => 'academic document upload',
                  'module_id' => '3',
                  'order' => '105',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="fas fa-file-upload"></i>',
                  'table_name' => 'academic_documents',
                  'func_action' => 'upload',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 20,
                  'function_name' => 'show document details',
                  'function_description' => 'show document details',
                  'slugs' => 'show-academic-document',
                  'name_on_class' => 'show_academic_document',
                  'page_title' => 'document details',
                  'module_id' => '3',
                  'order' => '106',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_documents',
                  'func_action' => 'show',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 21,
                  'function_name' => 'academic documents',
                  'function_description' => 'academic documents',
                  'slugs' => 'list-academic-document',
                  'name_on_class' => 'index',
                  'page_title' => 'list of academic documents',
                  'module_id' => '3',
                  'order' => '107',
                  'allowed_roles' => '[1]',
                  'link_icon' => '<i class="far fa-file-image"></i>',
                  'table_name' => 'academic_documents',
                  'func_action' => 'link',
                  'func_type' => 1,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 22,
                  'function_name' => 'edit academic document',
                  'function_description' => 'edit of academic document',
                  'slugs' => 'edit-academic-document',
                  'name_on_class' => 'edit_academic_document',
                  'page_title' => 'edit academic document',
                  'module_id' => '3',
                  'order' => '108',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_documents',
                  'func_action' => 'edit',
                  'func_type' => 3,
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 23,
                  'function_name' => 'delete academic document',
                  'function_description' => 'delete academic document',
                  'slugs' => 'delete-academic-document',
                  'name_on_class' => 'delete_academic_document',
                  'page_title' => 'edit academic document',
                  'module_id' => '3',
                  'order' => '109',
                  'allowed_roles' => '[1]',
                  'link_icon' => '',
                  'table_name' => 'academic_documents',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 14 AND id <= 23');

          // $builder->where('id', $id);
          // $builder->delete();
        }
}
