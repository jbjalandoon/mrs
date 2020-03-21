<?php
namespace Modules\Patients\Controllers;

use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\ConditionsModel as PatientConditionModel;
use Modules\SystemSettings\Models\ConditionsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Conditions extends BaseController
{

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

  public function index($id)
  {
  	$this->hasPermissionRedirect('list-patient-condition');

  	$model = new PatientConditionModel();
  	$patient_model = new PatientsModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($id);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['conditions'] = $model->get(['patient_conditions.status' => 'a', 'patient_id' => $id],[
			'conditions' => ['name' => 'name']
		], [
			'conditions' => ['conditions.id' => 'patient_conditions.condition_id']
		]);

    $data['viewName'] = 'Modules\Patients\Views\conditions\index';
    echo view('App\Views\theme\index', $data);
  }

	public function add($id){
		$this->hasPermissionRedirect('add-patient-condition');

		$model = new PatientConditionModel();
  	$patient_model = new PatientsModel();
		$condition_model = new ConditionsModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($id);
		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['conditions'] = $condition_model->get(['status' => 'a']);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('patientCondition'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\conditions\frmCondition';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
					$_POST['patient_id'] = $id;
					if (!is_numeric($_POST['condition_id'])) {
							$condition_data = [
								'name' => $_POST['condition_id'],
								'description' => 'Other Condition',
							];
							$_POST['condition_id'] = $condition_model->addReturnTheId($condition_data);
					}
	        if($model->add($_POST))
	        {
	        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('patient-conditions/' . $id));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('patient-conditions/' . $id));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\conditions\frmCondition';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function edit($id, $pId){
		$this->hasPermissionRedirect('edit-patient-condition');

		$model = new PatientConditionModel();
  	$patient_model = new PatientsModel();
		$condition_model = new ConditionsModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($pId);

		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['rec'] = $model->find($id);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $pId]);
		$data['conditions'] = $condition_model->get(['status' => 'a']);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('patientCondition'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\conditions\frmCondition';
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
	        	return redirect()->to(base_url('patient-conditions/' . $pId));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('patient-conditions/' . $pId));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\conditions\frmCondition';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function delete($id, $Pid){
		$this->hasPermissionRedirect('delete-patient-condition');
  	$model = new PatientConditionModel();
		if ($model->softDelete($id)) {
			$_SESSION['success'] = 'You have Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('patient-conditions/' . $Pid));
		}
		else{
			$_SESSION['error'] = 'You an error in updating a record';
			$this->session->markAsFlashdata('error');
			return redirect()->to( base_url('patient-conditions/' . $Pid));
		}
	}

}
