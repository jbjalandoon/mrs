<?php
namespace Modules\SystemSettings\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\SystemSettings\Models\ReactionModel;
// use Modules\SystemSettings\Models\AllergyTypesModel;
use App\Controllers\BaseController;

class Reaction extends BaseController
{

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);

	}

  public function index()
  {
  	$this->hasPermissionRedirect('list-reaction');
		$model = new ReactionModel();

		// die();
    $data['reactions'] = $model->get(['status' => 'a']);
    $data['function_title'] = "Reactions List";
    $data['viewName'] = 'Modules\SystemSettings\Views\reactions\index';
    echo view('App\Views\theme\index', $data);
  }

  public function add()
  {
  	$this->hasPermissionRedirect('add-reaction');
		$model = new ReactionModel();
		if (!empty($_POST)) {
			if ($this->validate('reaction')) {
				if ($model->add($_POST)) {
					$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
					return redirect()->to(base_url('reactions'));
				}
				else{
					$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
					return redirect()->to(base_url('reactions'));
				}
			}else{
				$data['errors'] = \Config\Services::validation()->getErrors();
				$data['function_title'] = "Adding Allergy";
				$data['viewName'] = 'Modules\SystemSettings\Views\reactions\frmReaction';
				echo view('App\Views\theme\index', $data);
			}
		}
		else{
			// die();
			$data['function_title'] = "Adding Allergy";
			$data['viewName'] = 'Modules\SystemSettings\Views\reactions\frmReaction';
			echo view('App\Views\theme\index', $data);
		}
  }

	function edit($id){
		$this->hasPermissionRedirect('edit-reaction');
		$model = new ReactionModel();
		$data['rec'] = $model->find($id);
		if (!empty($_POST)) {
			if ($this->validate('reaction')) {
				if ($model->edit($_POST, $id)) {
					$_SESSION['success'] = 'You have edited a record';
					$this->session->markAsFlashdata('success');
					return redirect()->to(base_url('reactions'));
				}
				else{
					$_SESSION['error'] = 'You have an error in editing a record';
					$this->session->markAsFlashdata('error');
					return redirect()->to(base_url('reactions'));
				}
			}else{
				$data['errors'] = \Config\Services::validation()->getErrors();
				$data['function_title'] = "Editing Allergy";
				$data['viewName'] = 'Modules\SystemSettings\Views\reactions\frmReaction';
				echo view('App\Views\theme\index', $data);
			}
		}
		else{
			// die();
			$data['function_title'] = "Editing Allergy";
			$data['viewName'] = 'Modules\SystemSettings\Views\reactions\frmReaction';
			echo view('App\Views\theme\index', $data);
		}
	}

	function delete($id){
		$this->hasPermissionRedirect('delete-reaction');
		$model = new ReactionModel();
		if($model->softDelete($id)){
			$_SESSION['success'] = 'You have successfuly Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('reactions'));
		}else{
			$_SESSION['error'] = 'You have an error in deleting record';
			$this->session->markAsFlashdata('error');
			return redirect()->to(base_url('reactions'));
		}
	}

}
