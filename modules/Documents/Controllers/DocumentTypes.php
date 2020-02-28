<?php
namespace Modules\Documents\Controllers;

use Modules\Documents\Models\DocumentTypesModel;
use Modules\UserManagement\Models\PermissionsModel;
// use Modules\UserManagement\Models\UsersModel;
use App\Controllers\BaseController;

class DocumentTypes extends BaseController
{
	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-document-types');

    	$model = new DocumentTypesModel();

     	$data['all_items'] = $model->getDocumentTypeWithCondition(['status'=> 'a']);
     	$data['offset'] = $offset;

      $data['document_types'] = $model->getDocumentTypeWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

      $data['function_title'] = "Document Type List";
      $data['viewName'] = 'Modules\Documents\Views\document_types\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_document_type($id)
	 {

		$this->hasPermissionRedirect('show-area');
		$data['permissions'] = $this->permissions;
		// $user_model = new UsersModel();
		// $data['users'] = $user_model->findAll();

		$model = new DocumentTypesModel();

		$data['document_type'] = $model->getDocumentTypeWithCondition(['id' => $id]);
		$data['function_title'] = "Document Types Details";
    $data['viewName'] = 'Modules\Documents\Views\document_types\documentTypeDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function add_document_type()
    {
    	$this->hasPermissionRedirect('add-document-type');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new DocumentTypesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('document_type'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Document Type";
		        $data['viewName'] = 'Modules\Documents\Views\document_types\frmDocumentType';
						// die("here");
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDocumentType($_POST))
		        {
							mkdir(ROOTPATH."uploads/".strtoupper($_POST['document_type_code']), 0755);
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('document-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('document-types'));
		        }
		    }
    	}
    	else
    	{

	    	  $data['function_title'] = "Adding Document Types";
	        $data['viewName'] = 'Modules\Documents\Views\document_types\frmDocumentType';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_document_type($id)
    {
    	$this->hasPermissionRedirect('edit-document-type');
    	helper(['form', 'url']);
    	$model = new DocumentTypesModel();
    	$data['rec'] = $model->find($id);

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('document_type'))
		    {

		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Modify Document Type";
		        $data['viewName'] = 'Modules\Documents\Views\document_type\frmDocumentType';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDocumentType($_POST, $id))
		        {
							if (!is_dir(ROOTPATH."uploads/".strtoupper($_POST['document_type_code']))) {
								rename(ROOTPATH."uploads/".strtoupper($data['rec']['document_type_code']), ROOTPATH."uploads/".strtoupper($_POST['document_type_code']));
							}

		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('document-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('document-types'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Modify Area";
	        $data['viewName'] = 'Modules\Documents\Views\document_types\frmDocumentType';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_document_type($id)
    {
    	$this->hasPermissionRedirect('delete-document-type');

    	$model = new DocumentTypesModel();
    	$model->deleteDocumentType($id);
    }

}
