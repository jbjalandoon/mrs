<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\DepartmentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UsersModel;
use App\Controllers\BaseController;

class Departments extends BaseController
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
    	$this->hasPermissionRedirect('list-departments');

    	$model = new DepartmentsModel();

    	 //kailangan ito para sa pagination
       	$data['all_items'] = $model->getDepartmentWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['departments'] = $model->getDepartmentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Departments List";
        $data['viewName'] = 'Modules\SystemSettings\Views\departments\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_department($id)
	 {
		$this->hasPermissionRedirect('show-department');
		$data['permissions'] = $this->permissions;

		$user_model = new UsersModel();
		$data['users'] = $user_model->findAll();

		$model = new DepartmentsModel();

		$data['department'] = $model->getDepartmentWithCondition(['id' => $id]);
		$data['function_title'] = "Departments Details";
    $data['viewName'] = 'Modules\SystemSettings\Views\departments\departmentDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function add_department()
    {
    	$this->hasPermissionRedirect('add-role');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$user_model = new UsersModel();
			$data['users'] = $user_model->findAll();

    	helper(['form', 'url']);
    	$model = new DepartmentsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('department'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Department";
		        $data['viewName'] = 'Modules\SystemSettings\Views\departments\frmDepartment';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
					//print_r($_POST); die("takte");
		        if($model->addDepartment($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('departments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('departments'));
		        }
		    }
    	}
    	else
    	{

	    	  $data['function_title'] = "Adding Department";
	        $data['viewName'] = 'Modules\SystemSettings\Views\departments\frmDepartment';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_department($id)
    {
    	$this->hasPermissionRedirect('edit-department');
    	helper(['form', 'url']);
    	$model = new DepartmentsModel();
    	$data['rec'] = $model->find($id);

			$user_model = new UsersModel();
			$data['users'] = $user_model->findAll();

			// print_r($data['users']);

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('department'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Modify Department";
		        $data['viewName'] = 'Modules\SystemSettings\Views\departments\frmDepartment';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDepartments($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('departments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('departments'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Modify Department";
	        $data['viewName'] = 'Modules\SystemSettings\Views\departments\frmDepartment';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_department($id)
    {
    	$this->hasPermissionRedirect('delete-department');

    	$model = new DepartmentsModel();
    	$model->deleteDepartment($id);
    }

}
