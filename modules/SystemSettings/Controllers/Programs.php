<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\ProgramsModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UsersModel;
use App\Controllers\BaseController;

class Programs extends BaseController
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
    	$this->hasPermissionRedirect('list-program');

    	$model = new ProgramsModel();
    	 //kailangan ito para sa pagination
       	$data['all_items'] = $model->getProgramWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['academic_programs'] = $model->getProgramWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Academic Programs";
        $data['viewName'] = 'Modules\SystemSettings\Views\programs\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_program($id)
	 {

		$this->hasPermissionRedirect('show-program');
		$data['permissions'] = $this->permissions;

		$user_model = new UsersModel();
		$data['users'] = $user_model->findAll();

		$model = new ProgramsModel();

		$data['academic_program'] = $model->getProgramWithCondition(['id' => $id]);
		$data['function_title'] = "Academic Program Details";
    $data['viewName'] = 'Modules\SystemSettings\Views\programs\academicProgramDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function add_program()
    {
    	$this->hasPermissionRedirect('add-program');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new ProgramsModel();

			$user_model = new UsersModel();
			$data['users'] = $user_model->findAll();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('academic_program'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Academic Program";
		        $data['viewName'] = 'Modules\SystemSettings\Views\programs\frmAcademicProgram';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addAcademicProgram($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('academic-programs'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('academic-programs'));
		        }
		    }
    	}
    	else
    	{
	    	  $data['function_title'] = "Adding Academic Program";
	        $data['viewName'] = 'Modules\SystemSettings\Views\programs\frmAcademicProgram';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_program($id)
    {
			// die("here");
    	$this->hasPermissionRedirect('edit-program');
    	helper(['form', 'url']);
    	$model = new ProgramsModel();
    	$data['rec'] = $model->find($id);

    	$data['permissions'] = $this->permissions;
			$user_model = new UsersModel();
			$data['users'] = $user_model->findAll();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('academic_program'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Modify Academic Program";
		        $data['viewName'] = 'Modules\SystemSettings\Views\programs\frmAcademicProgram';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editAcademicProgram($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('academic-programs'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('academic-programs'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Modify Academic Program";
	      $data['viewName'] = 'Modules\SystemSettings\Views\programs\frmAcademicProgram';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_program($id)
    {
    	$this->hasPermissionRedirect('delete-program');

    	$model = new ProgramsModel();
    	$model->deleteAcademicProgram($id);
    }

}
