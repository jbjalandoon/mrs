<?php
namespace Modules\Patients\Controllers;

use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\RelativesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Relatives extends BaseController
{

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

  public function index($id)
  {
  	$this->hasPermissionRedirect('list-patient-relative');

  	$model = new RelativesModel();
  	$patient_model = new PatientsModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($id);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['relatives'] = $model->get(['status' => 'a', 'patient_id' => $id]);

    $data['viewName'] = 'Modules\Patients\Views\relatives\index';
    echo view('App\Views\theme\index', $data);
  }

	public function add($id){
		$this->hasPermissionRedirect('add-patient-relative');
		$patient_model = new PatientsModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($id);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);

		$model = new RelativesModel();

  	if(!empty($_POST))
  	{
    	if (!$this->validate('patientRelative'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\relatives\frmRelative';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
					$_POST['patient_id'] = $id;
	        if($model->add($_POST))
	        {
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('patient-relatives/' . $id));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('patient-relatives/' . $id));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\relatives\frmRelative';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function edit($id, $pId){
		$this->hasPermissionRedirect('edit-patient-relative');

		$model = new RelativesModel();
  	$patient_model = new PatientsModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($pId);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['rec'] = $model->find($id);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $pId]);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('patientRelative'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\relatives\frmRelative';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
					// print_r($_POST);
					// die();
	        if($model->edit($_POST, $id))
	        {
	        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('patient-relatives/' . $pId));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('patient-relatives/' . $pId));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\relatives\frmRelative';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function delete($id, $Pid){
		$this->hasPermissionRedirect('delete-patient-relative');
  	$model = new RelativesModel();
		if ($model->softDelete($id)) {
			$_SESSION['success'] = 'You have Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('patient-relatives/' . $Pid));
		}
		else{
			$_SESSION['error'] = 'You an error in updating a record';
			$this->session->markAsFlashdata('error');
			return redirect()->to( base_url('patient-relatives/' . $Pid));
		}
	}

}
