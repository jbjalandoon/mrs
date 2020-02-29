<?php
namespace Modules\Appointments\Controllers;

use Modules\Appointments\Models\AppointmentsModel;
use App\Controllers\BaseController;

class Appointments extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-appointments');

    	$model = new AppointmentsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getAppointmentsWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['appointments'] = $model->getAppointmentsWithConditionWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Appointments List";
        $data['viewName'] = 'Modules\Appointments\Views\appointments\index';
        echo view('App\Views\theme\index', $data);
    }

    public function list_appointments($id)
	{
		$this->hasPermissionRedirect('list-appointments');
		$data['permissions'] = $this->permissions;

		$model = new AppointmentsModel();

		$data['appointments'] = $model->getAppointmentsWithCondition(['id' => $id]);

		$data['function_title'] = "List Appointments";
        $data['viewName'] = 'Modules\Appointments\Views\appointments\appointmentsDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_appointments()
    {
    	$this->hasPermissionRedirect('add-appointments');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new AppointmentsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('appointments'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Appointments";
		        $data['viewName'] = 'Modules\Appointments\Views\appointments\frmAppointments';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addAppointments($_POST))
		        {
		        	$appointments_id = $model->insertID();
		        	$permissions_model->update_permitted_appointments($appointments_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('appointments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('appointments'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Appointments";
	        $data['viewName'] = 'Modules\Appointments\Views\appointments\frmAppointments';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_appointments($id)
    {
    	$this->hasPermissionRedirect('edit-appointments');
    	helper(['form', 'url']);
    	$model = new AppointmentsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('appointments'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Appointments";
		        $data['viewName'] = 'Modules\Appointments\Views\appointments\frmAppointments';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editAppointments($_POST, $id))
		        {
		        	$permissions_model->update_permitted_appointments($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('appointments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('appointments'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Appointments";
	        $data['viewName'] = 'Modules\Appointments\Views\appointments\frmAppointments';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_appointments($id)
    {
    	$this->hasPermissionRedirect('delete-appointments');

    	$model = new AppointmentsModel();
    	$model->deleteAppointments($id);
    }

}
