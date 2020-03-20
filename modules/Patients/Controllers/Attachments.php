<?php
namespace Modules\Patients\Controllers;

use Modules\Visits\Models\VisitsModel;
use Modules\Visits\Models\VitalsModel;
use Modules\Patients\Models\PatientsModel;
use Modules\Patients\Models\RelativesModel;
use Modules\Patients\Models\AttachmentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Attachments extends BaseController
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

  	$model = new AttachmentsModel();
		$patient_model = new PatientsModel();
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['attachments'] = $model->get(['attachments.status' => 'a', 'visits.patient_id' => $id],[
			'visits' => ['created_at' => 'visit_date']
		],[
			'visits' => ['visits.id' => 'attachments.visit_id']
		]);

    $data['viewName'] = 'Modules\Patients\Views\attachments\index';
    echo view('App\Views\theme\index', $data);
  }

	public function add($id){
		$this->hasPermissionRedirect('add-patient-condition');
		$patient_model = new PatientsModel();
		$model = new AttachmentsModel();
		$visit_model = new VisitsModel();
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['visit_id'] = $visit_model->getVisitId($id);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('attachments'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\attachments\frmAttachment';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
				// echo "<pre>";
				// print_r($_FILES);
				// die();
				$file_array = [
					'file' => time().'_'.$_FILES["file"]['name'],
					'name' => $_POST['name'],
					'user_id' => $_SESSION['uid'],
					'patient_id' => $id,
					'visit_id' => $_POST['visit_id']
				];

	        if($model->add($file_array))
	        {

						$file = $this->request->getFile('file');
						$file->move(ROOTPATH."uploads/", time().'_'.$_FILES["file"]['name']);


	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('attachments/' . $id));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('attachments/' . $id));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\attachments\frmAttachment';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function edit($id, $pId){
		$this->hasPermissionRedirect('edit-patient-condition');
		$patient_model = new PatientsModel();
		helper(['form', 'url']);
		$model = new AttachmentsModel();
		$visit_model = new VisitsModel();
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $id]);
		$data['visit_id'] = $visit_model->getVisitId($id);

		$data['rec'] = $model->find($id);
		// print_r($data['rec']);
		// die();
		$data['profile'] = $patient_model->get(['status' => 'a','id' => $pId]);
  	if(!empty($_POST))
  	{
    	if (!$this->validate('attachmentsEdit'))
	    {
	    	$data['errors'] = \Config\Services::validation()->getErrors();
	      $data['viewName'] = 'Modules\Patients\Views\attachments\frmAttachment';
	      echo view('App\Views\theme\index', $data);
	    }
	    else
	    {
					if (!empty($_FILES["file"]['name'])) {
						$file_array = [
							'file' => time().'_'.$_FILES["file"]['name'],
							'name' => $_POST['name'],
							'user_id' => $_SESSION['uid'],
						];
					}else{
						$file_array = [
							'name' => $_POST['name'],
							'user_id' => $_SESSION['uid'],
						];
					}
					// print_r($_POST);
					// die();
	        if($model->edit($file_array, $id))
	        {
						if (!empty($_FILES['file']['name'])) {
							$file = $this->request->getFile('file');
							$file->move(ROOTPATH."uploads/", time().'_'.$_FILES["file"]['name']);
						}
	        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
	        	$_SESSION['success'] = 'You have added a new record';
						$this->session->markAsFlashdata('success');
	        	return redirect()->to(base_url('attachments/' . $pId));
	        }
	        else
	        {
	        	$_SESSION['error'] = 'You have an error in adding a new record';
						$this->session->markAsFlashdata('error');
	        	return redirect()->to(base_url('attachments/' . $pId));
	        }
	    }
  	}
  	else
  	{
      $data['viewName'] = 'Modules\Patients\Views\attachments\frmAttachment';
      echo view('App\Views\theme\index', $data);
  	}
	}

	public function delete($id, $Pid){
		$this->hasPermissionRedirect('delete-patient-condition');
  	$model = new AttachmentsModel();
		if ($model->softDelete($id)) {
			$_SESSION['success'] = 'You have Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('attachments/' . $Pid));
		}
		else{
			$_SESSION['error'] = 'You an error in updating a record';
			$this->session->markAsFlashdata('error');
			return redirect()->to( base_url('attachments/' . $Pid));
		}
	}

}
