<?php
namespace Modules\Patients\Controllers;

use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\RelativesModel;
use Modules\Patients\Models\DiagnosisModel;
use Modules\SystemSettings\Models\ConditionsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Diagnosis extends BaseController
{

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

	public function add($id){
		$this->hasPermissionRedirect('add-diagnosis');
		$patient_model = new PatientsModel();
		$model = new DiagnosisModel();
		$visit_model = new VisitsModel();
		$condition_model = new ConditionsModel();
		$vital_model = new VitalsModel();

		$data['visit_id'] = $visit_model->getVisitId($id);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['conditions'] = $condition_model->get(['status' => 'a']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('diagnosis'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\diagnosis\frmDiagnosis';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
				// echo "<pre>";
				// print_r($_FILES);
				// die();
				// $_POST['patient_id'] = $id;
				$_POST['user_id'] = $_SESSION['uid'];
				if (!is_numeric($_POST['condition_id'])) {
						$condition_data = [
							'name' => $_POST['condition_id'],
							'description' => 'Other Condition',
						];
						$_POST['condition_id'] = $condition_model->addReturnTheId($condition_data);
				}
	        if($model->add($_POST))
	        {


	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('visits/' . $id));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('visits/' . $id));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\diagnosis\frmDiagnosis';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function edit($id, $pId){
		$this->hasPermissionRedirect('edit-diagnosis');
		$patient_model = new PatientsModel();
		helper(['form', 'url']);
		$model = new DiagnosisModel();
		$visit_model = new VisitsModel();
		$vital_model = new VitalsModel();
		$condition_model = new ConditionsModel();

		$data['conditions'] = $condition_model->get(['status' => 'a']);
		$data['visit_id'] = $visit_model->getVisitId($pId);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);

		$data['rec'] = $model->find($id);
		// print_r($data['rec']);
		// die();
		// $data['profile'] = $patient_model->get(['status' => 'a','id' => $pId]);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('diagnosis'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\diagnosis\frmDiagnosis';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
				if (!is_numeric($_POST['condition_id'])) {
						$condition_data = [
							'name' => $_POST['condition_id'],
							'description' => 'Other Condition',
						];
						$_POST['condition_id'] = $condition_model->addReturnTheId($condition_data);
				}
					// print_r($_POST);
					// die();
	        if($model->edit($_POST, $id))
	        {
	        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('visits/' . $pId));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('visits/' . $pId));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\diagnosis\frmDiagnosis';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function delete($id, $Pid){
		$this->hasPermissionRedirect('delete-diagnosis');
  	$model = new DiagnosisModel();
		if ($model->softDelete($id)) {
			$_SESSION['success'] = 'You have Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('visits/' . $Pid));
		}
		else{
			$_SESSION['error'] = 'You an error in Deleting a record';
			$this->session->markAsFlashdata('error');
			return redirect()->to( base_url('visits/' . $Pid));
		}
	}

}
