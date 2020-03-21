<?php
namespace Modules\Visits\Controllers;

// use Modules\Visits\Models\RolesModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Visits\Models\VisitsModel;
use App\Controllers\BaseController;

class Vitals extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function delete_role($id)
    {
    	$this->hasPermissionRedirect('delete-role');

    	$model = new RolesModel();
    	$model->deleteRole($id);
    }

		public function capture_vital($id){
			$model = new VitalsModel();
			$visit_model = new VisitsModel();
			$patient_model = new PatientsModel();
			$data['visit_id'] = $visit_model->getVisitId($id);
			$data['vital_recorded'] = $model->isVitalCaptured($data['visit_id']);
			$data['profile'] = $patient_model->get(['id' => $id]);
			if($_POST){
				$_POST['user_id'] = $_SESSION['uid'];
				$_POST['blood_pressure'] = $_POST['blood_pressure_numerator'] . '/' . $_POST['blood_pressure_denominator'];
				// print_r($_POST);
				// die();
				if($this->validate('vitals')){
					if($model->add($_POST)){
						$_SESSION['success'] = 'You have Successfuly captured a vital';
						$this->session->markAsFlashdata('success');
						return redirect()->to(base_url('patients/show/' . $id));
					}
					else{
						$_SESSION['error'] = 'You have an error in adding a record';
						$this->session->markAsFlashdata('error');
						return redirect()->to( base_url('vitals/capture/' . $id));
					}
				}
				else {
					$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['viewName'] = 'Modules\Visits\Views\vitals\frmVital';
		      echo view('App\Views\theme\index', $data);
				}
			}
			else{
				$data['viewName'] = 'Modules\Visits\Views\vitals\frmVital';
				echo view('App\Views\theme\index', $data);
			}
		}
		public function edit($id, $pId){
			$model = new VitalsModel();
			$visit_model = new VisitsModel();
			$patient_model = new PatientsModel();
			$data['rec'] = $model->find($id);
			$data['visit_id'] = $visit_model->getVisitId($pId);
			$data['vital_recorded'] = $model->isVitalCaptured($data['visit_id']);
			$data['profile'] = $patient_model->get(['id' => $pId]);
			if($_POST){
				// die('here');
				// $_POST['user_id'] = $_SESSION['uid'];
				$_POST['blood_pressure'] = $_POST['blood_pressure_numerator'] . '/' . $_POST['blood_pressure_denominator'];
				// print_r($_POST);
				// die();
				if($this->validate('vitals')){
					if($model->edit($_POST, $id)){
						$_SESSION['success'] = 'You have Successfuly captured a vital';
						$this->session->markAsFlashdata('success');
						return redirect()->to(base_url('visits/' . $pId));
					}
					else{
						$_SESSION['error'] = 'You have an error in adding a record';
						$this->session->markAsFlashdata('error');
						return redirect()->to( base_url('visits/' . $pId));
					}
				}
				else {
					$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['viewName'] = 'Modules\Visits\Views\vitals\frmVital';
		      echo view('App\Views\theme\index', $data);
				}
			}
			else{
				$data['viewName'] = 'Modules\Visits\Views\vitals\frmVital';
				echo view('App\Views\theme\index', $data);
			}
		}
}
