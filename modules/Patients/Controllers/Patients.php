<?php
namespace Modules\Patients\Controllers;

use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Patients extends BaseController
{

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

  public function index()
  {
  	$this->hasPermissionRedirect('list-patient');

  	$model = new PatientsModel();
    // $data['all_items'] = $model->get(['status'=> 'a']);

    $data['patients'] = $model->get(['status'=> 'a']);

    $data['function_title'] = "Patients List";
    $data['viewName'] = 'Modules\Patients\Views\patients\index';
    echo view('App\Views\theme\index', $data);
  }

  public function show_patient($id)
  {
		$this->hasPermissionRedirect('show-patient');

		$model = new PatientsModel();
		$visit_model = new VisitsModel();
		$vital_model = new VitalsModel();

		$data['visit_id'] = $visit_model->getVisitId($id);
		$data['recent_visits'] = $visit_model->get(['status' => 'a', 'patient_id' => $id]);
		$data['latest_vital'] = $vital_model->getLatestVital($id);
		$data['health_summary'] = $vital_model->getHealthTrendSummary($id);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		// die('+' . $data['vital_recorded']);
		// echo "<pre>";
		// print_r($data['latest_vital']);
		// die();
		$data['profile'] = $model->get(['status' => 'a','id' => $id]);
		if (empty($data['profile'])) {
			die('Walang Laman!');
		}
		// $data['function_title'] = "Patient Details";
  	$data['viewName'] = 'Modules\Patients\Views\patients\patientDetails';
    echo view('App\Views\theme\index', $data);
  }

  public function add_patient()
  {
  	$this->hasPermissionRedirect('add-patient');

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
	        if($model->add($_POST))
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
		// die('here');
  	$this->hasPermissionRedirect('delete-patient');

  	$model = new PatientsModel();
		if ($model->softDelete($id)) {
			$_SESSION['success'] = 'You have Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('patients'));
		}
		else{
			$_SESSION['error'] = 'You an error in updating a record';
			$this->session->markAsFlashdata('error');
			return redirect()->to( base_url('patients'));
		}
  }

}
