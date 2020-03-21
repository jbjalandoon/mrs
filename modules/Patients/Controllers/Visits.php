<?php
namespace Modules\Patients\Controllers;

// use Modules\Visits\Models\RolesModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\AttachmentsModel;
use Modules\Patients\Models\DiagnosisModel;
use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Visits extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($id)
    {
    	$this->hasPermissionRedirect('list-of-active-visits');

    	$model = new VisitsModel();
			$patient_model = new PatientsModel();
			$vital_model = new VitalsModel();
			$diagnosis_model = new DiagnosisModel();
			$attachment_model = new AttachmentsModel();
			$visit_model = new VisitsModel();
			$data['visit_id'] = $visit_model->getVisitId($id);
			$data['vital_recorded'] = $vital_model->isVitalCaptured($data['visit_id']);
			$data['vitals'] = $vital_model->get(['visits.patient_id' => $id, 'vitals.status' => 'a'],[
				'visits' => ['created_at' => 'visit_date']
			],[
				'visits' => ['visits.id' => 'vitals.visit_id']
			]);

			$data['attachments'] = $attachment_model->get(['visits.patient_id' => $id, 'attachments.status' => 'a'],[
				'visits' => ['created_at' => 'visit_date']
			],[
				'visits' => ['visits.id' => 'attachments.visit_id']
			]);

			$data['diagnosis'] = $diagnosis_model->get(['visits.patient_id' => $id, 'diagnosis.status' => 'a'],[
				'visits' => ['created_at' => 'visit_date'],
				'conditions' => ['name' => 'condition_name'],
				'diagnosis_type' => ['name' => 'type_name'],
				'users' => ['firstname' => 'firstname', 'lastname' => 'lastname']
			],[
				'visits' => ['visits.id' => 'diagnosis.visit_id'],
				'conditions' => ['conditions.id' => 'diagnosis.condition_id'],
				'diagnosis_type' => ['diagnosis_type.id' => 'diagnosis.diagnosis_type_id'],
				'users' => ['users.id' => 'diagnosis.user_id']
			]);
			// print_r($data['attachments']);
			// die();
			$data['visit_id'] = $model->getVisitId($id);
      $data['visits'] = $model->orderBy('created_at', 'desc')->get(['status' => 'a', 'patient_id' => $id]);
			$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
      $data['viewName'] = 'Modules\Patients\Views\visits\index';
      echo view('App\Views\theme\index', $data);

    }

		public function start($id){
			$model = new VisitsModel();
			$val_array = [
				'patient_id' => $id,
			];
			if($model->add($val_array)){
				$_SESSION['success'] = 'Visit Has Started';
				$this->session->markAsFlashdata('success');
				return redirect()->to(base_url('visits/' . $id));
			}
		}

		public function end($vId, $pId){
			$model = new VisitsModel();
			if($model->edit($val_array = [], $vId)){
				$_SESSION['success'] = 'Visit Has Ended';
				$this->session->markAsFlashdata('success');
				return redirect()->to(base_url('patients/show/' . $pId));
			}
		}

}
