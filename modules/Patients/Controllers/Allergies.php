<?php
namespace Modules\Patients\Controllers;

use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\AllergyModel as PatientAllergyModel;
use Modules\SystemSettings\Models\AllergyModel;
use Modules\SystemSettings\Models\ReactionModel;
use Modules\SystemSettings\Models\AllergyTypesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Allergies extends BaseController
{

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

  public function index($id)
  {
  	$this->hasPermissionRedirect('list-patient-allergy');

  	$model = new PatientAllergyModel();
  	$patient_model = new PatientsModel();
		$reaction_model = new ReactionModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();

		$data['reactions'] = $reaction_model->get(['status' => 'a']);
		$data['visit_id'] = $visit_model->getVisitId($id);

		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['patient_allergies'] = $model->get(['patient_allergies.status' => 'a', 'patient_id' => $id],[
			'allergies' => ['name' => 'name'],
			'allergy_types' => ['name' => 'type']
			],[
				'allergies' => ['allergies.id' => 'patient_allergies.allergy_id'],
				'allergy_types' => ['allergies.allergy_type_id' => 'allergy_types.id']
			]);

    $data['viewName'] = 'Modules\Patients\Views\allergies\index';
    echo view('App\Views\theme\index', $data);
  }

	public function add($id){
		$this->hasPermissionRedirect('add-patient-allergy');
		$visit_model = new VisitsModel();
		$model = new PatientAllergyModel();
  	$patient_model = new PatientsModel();
		$allergy_model = new AllergyModel();
		$type_model = new AllergyTypesModel();
		$reaction_model = new ReactionModel();
		$vital_model = new VitalsModel();
		$data['visit_id'] = $visit_model->getVisitId($id);

		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['allergies'] = $allergy_model->get(['status' => 'a']);
		$data['allergy_types'] = $type_model->get(['status' => 'a']);
		$data['reactions'] = $reaction_model->get(['status' => 'a']);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('patientAllergy'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\allergies\frmAllergy';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
					$_POST['patient_id'] = $id;
					if (!is_numeric($_POST['allergy_id'])) {
							$allergy_data = [
								'name' => $_POST['allergy_id'],
								'description' => 'Other Allergy',
								'allergy_type_id' => 0
							];
							$_POST['allergy_id'] = $allergy_model->addReturnTheId($allergy_data);
					}
					$str = '[';
					foreach($_POST['reaction_id'] as $reactionIndex => $reactionID)
					{
						if (!is_numeric($reactionID)) {
							$reaction_data = [
								'name' => $reactionID,
								'description' => 'Other Reactions',
							];
							$reactionID = $reaction_model->addReturnTheId($reaction_data);
						}
						$str .= $reactionID.',';
					}
					$str = rtrim($str, ',');
					$str .= ']';
					$_POST['reaction_id'] = $str;
	        if($model->add($_POST))
	        {
	        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('patient-allergies/' . $id));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('patient-allergies/' . $id));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\allergies\frmAllergy';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function edit($id, $pId){
		$this->hasPermissionRedirect('edit-patient-allergy');

		$model = new PatientAllergyModel();
		$patient_model = new PatientsModel();
		$allergy_model = new AllergyModel();
		$type_model = new AllergyTypesModel();
		$reaction_model = new ReactionModel();
		$vital_model = new VitalsModel();
		$visit_model = new VisitsModel();
		$data['visit_id'] = $visit_model->getVisitId($pId);

		$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
		$data['allergies'] = $allergy_model->get(['status' => 'a']);
		$data['allergy_types'] = $type_model->get(['status' => 'a']);
		$data['reactions'] = $reaction_model->get(['status' => 'a']);

		$data['rec'] = $model->find($id);
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $pId]);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('patientAllergy'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\allergies\frmAllergy';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
					if ($_POST['allergy_id'] == 'other') {
						if (! $this->validate([
							'others' => "required",
						])){
							$data['errors'] = \Config\Services::validation()->getErrors();
							$data['viewName'] = 'Modules\Patients\Views\allergies\frmAllergy';
							return view('App\Views\theme\index', $data);
						}
						else{
							$allergy_data = [
								'name' => $_POST['others'],
								'description' => 'Other Allergy',
								'allergy_type_id' => 0
							];
							$_POST['allergy_id'] = $allergy_model->addReturnTheId($allergy_data);
						}
					}
					$str = '[';
					foreach($_POST['reaction_id'] as $reactionIndex => $reactionID)
					{
						if (!is_numeric($reactionID)) {
							$reaction_data = [
								'name' => $reactionID,
								'description' => 'Other Reactions',
							];
							$reactionID = $reaction_model->addReturnTheId($reaction_data);
						}
						$str .= $reactionID.',';
					}
					$str = rtrim($str, ',');
					$str .= ']';
					$_POST['reaction_id'] = $str;
	        if($model->edit($_POST, $id))
	        {
	        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('patient-allergies/' . $pId));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('patient-allergies/' . $pId));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\allergies\frmAllergy';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function delete($id, $Pid){
		$this->hasPermissionRedirect('delete-patient-allergy');
  	$model = new PatientAllergyModel();
		if ($model->softDelete($id)) {
			$_SESSION['success'] = 'You have Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('patient-allergies/' . $Pid));
		}
		else{
			$_SESSION['error'] = 'You an error in updating a record';
			$this->session->markAsFlashdata('error');
			return redirect()->to( base_url('patient-allergies/' . $Pid));
		}
	}

}
