<?php
namespace Modules\Patients\Controllers;

use Modules\Patients\Models\PatientsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Patients extends BaseController
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
    	$this->hasPermissionRedirect('list-patient');

    	$model = new PatientsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getPatientWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['patients'] = $model->getPatientWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Patients List";
        $data['viewName'] = 'Modules\Patients\Views\patients\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_patient($id)
	  {
		$this->hasPermissionRedirect('show-patient');
		$data['permissions'] = $this->permissions;

		$model = new PatientsModel();

		$data['patient'] = $model->getPatientWithCondition(['id' => $id]);

		$data['function_title'] = "Patient Details";
    $data['viewName'] = 'Modules\Patients\Views\patients\patientDetails';
        echo view('App\Views\theme\index', $data);
	  }

    public function add_patient()
    {
    	$this->hasPermissionRedirect('add-patient');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new PatientsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('patient'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Patient";
		        $data['viewName'] = 'Modules\Patients\Views\patients\frmPatient';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addPatients($_POST))
		        {
		        	$patient_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('patients'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('patients'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Patient";
	        $data['viewName'] = 'Modules\Patients\Views\patients\frmPatient';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_patient($id)
    {
    	$this->hasPermissionRedirect('edit-patient');
    	helper(['form', 'url']);
    	$model = new PatientsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('patient'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Patient";
		        $data['viewName'] = 'Modules\Patients\Views\patients\frmPatient';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editPatients($_POST, $id))
		        {
		        	//$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('patients'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('patients'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Patient";
	        $data['viewName'] = 'Modules\Patients\Views\patients\frmPatient';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_patient($id)
    {
    	$this->hasPermissionRedirect('delete-patient');

    	$model = new PatientsModel();
    	$model->deletePatient($id);
    }

}
