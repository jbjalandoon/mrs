<?php
namespace Modules\SystemSettings\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\SystemSettings\Models\ConditionsModel;
use App\Controllers\BaseController;

class Conditions extends BaseController
{

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);

	}

  public function index()
  {
  	$this->hasPermissionRedirect('list-condition');
		$model = new ConditionsModel();

    $data['conditions'] = $model->get(['status'=> 'a']);

		// die();
    $data['function_title'] = "Conditions List";
    $data['viewName'] = 'Modules\SystemSettings\Views\conditions\index';
    echo view('App\Views\theme\index', $data);
  }

  public function add()
  {
  	$this->hasPermissionRedirect('add-condition');
		$model = new ConditionsModel();
		if (!empty($_POST)) {
			if ($this->validate('condition')) {
				if ($model->add($_POST)) {
					$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
					return redirect()->to(base_url('conditions'));
				}
				else{
					$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
					return redirect()->to(base_url('conditions'));
				}
			}else{
				$data['errors'] = \Config\Services::validation()->getErrors();
				$data['function_title'] = "Adding Condition";
				$data['viewName'] = 'Modules\SystemSettings\Views\conditions\frmCondition';
				echo view('App\Views\theme\index', $data);
			}
		}
		else{
			// die();
			$data['function_title'] = "Adding Condition";
			$data['viewName'] = 'Modules\SystemSettings\Views\conditions\frmCondition';
			echo view('App\Views\theme\index', $data);
		}
  }

	function edit($id){
		$this->hasPermissionRedirect('edit-condition');
		$model = new ConditionsModel();
		$data['rec'] = $model->find($id);
		if (!empty($_POST)) {
			if ($this->validate('condition')) {
				if ($model->edit($_POST, $id)) {
					$_SESSION['success'] = 'You have edited a record';
					$this->session->markAsFlashdata('success');
					return redirect()->to(base_url('conditions'));
				}
				else{
					$_SESSION['error'] = 'You have an error in editing a record';
					$this->session->markAsFlashdata('error');
					return redirect()->to(base_url('conditions'));
				}
			}else{
				$data['errors'] = \Config\Services::validation()->getErrors();
				$data['function_title'] = "Editing Condition";
				$data['viewName'] = 'Modules\SystemSettings\Views\conditions\frmCondition';
				echo view('App\Views\theme\index', $data);
			}
		}
		else{
			// die();
			$data['function_title'] = "Editing Condition";
			$data['viewName'] = 'Modules\SystemSettings\Views\conditions\frmCondition';
			echo view('App\Views\theme\index', $data);
		}
	}

	function delete($id){
		$this->hasPermissionRedirect('delete-condition');
		$model = new ConditionsModel();
		if($model->softDelete($id)){
			$_SESSION['success'] = 'You have successfuly added a new record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('conditions'));
		}else{
			$_SESSION['error'] = 'You have an error in deleting record';
			$this->session->markAsFlashdata('error');
			return redirect()->to(base_url('conditions'));
		}
	}

}
