<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\AreasModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UsersModel;
use App\Controllers\BaseController;

class Areas extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-area');

    	$model = new AreasModel();
    	 //kailangan ito para sa pagination
       	$data['all_items'] = $model->getAreaWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['areas'] = $model->getAreaWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
				// die("here");

        $data['function_title'] = "Area List";
        $data['viewName'] = 'Modules\SystemSettings\Views\areas\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_area($id)
	 {

		$this->hasPermissionRedirect('show-area');
		$data['permissions'] = $this->permissions;
		$user_model = new UsersModel();
		$data['users'] = $user_model->findAll();

		$model = new AreasModel();

		$data['area'] = $model->getAreaWithCondition(['id' => $id]);
		$data['function_title'] = "Area Details";
    $data['viewName'] = 'Modules\SystemSettings\Views\areas\areaDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function add_area()
    {
    	$this->hasPermissionRedirect('add-area');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;
			$user_model = new UsersModel();
			$data['users'] = $user_model->findAll();

    	helper(['form', 'url']);
    	$model = new AreasModel();
			// die("here");

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('area'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Area";
		        $data['viewName'] = 'Modules\SystemSettings\Views\areas\frmArea';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
					//print_r($_POST); die("takte");
		        if($model->addArea($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('areas'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('areas'));
		        }
		    }
    	}
    	else
    	{

	    	  $data['function_title'] = "Adding Area";
	        $data['viewName'] = 'Modules\SystemSettings\Views\areas\frmArea';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_area($id)
    {
    	$this->hasPermissionRedirect('edit-area');
    	helper(['form', 'url']);
    	$model = new AreasModel();
    	$data['rec'] = $model->find($id);

			$user_model = new UsersModel();
			$data['users'] = $user_model->findAll();

			// print_r($data['users']);

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('area'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Modify Area";
		        $data['viewName'] = 'Modules\SystemSettings\Views\areas\frmArea';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editArea($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('areas'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('areas'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Modify Area";
	        $data['viewName'] = 'Modules\SystemSettings\Views\areas\frmArea';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_area($id)
    {
    	$this->hasPermissionRedirect('delete-area');

    	$model = new AreasModel();
    	$model->deleteArea($id);
    }

}
