<?php
namespace Modules\Patients\Controllers;

// use Modules\Visits\Models\RolesModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\AttachmentsModel;
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
    	// $this->hasPermissionRedirect('list-visits');

    	$model = new VisitsModel();
			$patient_model = new PatientsModel();
			$vital_model = new VitalsModel();
			$attachment_model = new AttachmentsModel();

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
			// print_r($data['attachments']);
			// die();
			$data['visit_id'] = $model->getVisitId($id);
      $data['visits'] = $model->orderBy('created_at', 'desc')->get(['status' => 'a', 'patient_id' => $id]);
			$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
      $data['viewName'] = 'Modules\Patients\Views\visits\index';
      echo view('App\Views\theme\index', $data);

    }


    public function add()
    {
    	$this->hasPermissionRedirect('add-role');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new RolesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('role'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addRoles($_POST))
		        {
		        	$role_id = $model->insertID();
		        	$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('roles'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('roles'));
		        }
		    }
    	}
    	else
    	{

	        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit($id)
    {
    	$this->hasPermissionRedirect('edit-role');
    	helper(['form', 'url']);
    	$model = new RolesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('role'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editRoles($_POST, $id))
		        {
		        	$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('roles'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('roles'));
		        }
		    }
    	}
    	else
    	{
	        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete($id)
    {
    	$this->hasPermissionRedirect('delete-role');

    	$model = new RolesModel();
    	$model->deleteRole($id);
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
				return redirect()->to(base_url('visits/' . $pId));
			}
		}

}
