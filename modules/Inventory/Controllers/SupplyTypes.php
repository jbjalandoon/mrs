<?php
namespace Modules\Inventory\Controllers;

use Modules\Inventory\Models\SuppliesModel;
use Modules\Inventory\Models\PermissionsModel;
use App\Controllers\BaseController;

class Supplies extends BaseController
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
    	$this->hasPermissionRedirect('list-supplies');

    	$model = new SuppliesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getSupplyWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['suplies'] = $model->getSupplyWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Supplies";
        $data['viewName'] = 'Modules\Inventory\Views\supplies\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_supply($id)
	{
		$this->hasPermissionRedirect('show-supplies');
		$data['permissions'] = $this->permissions;

		$model = new SuppliesModel();

		$data['supply'] = $model->getSupplyWithCondition(['id' => $id]);

		$data['function_title'] = "Supply Details";
        $data['viewName'] = 'Modules\Inventory\Views\supplies\suppliesDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_supplies()
    {
    	$this->hasPermissionRedirect('add-supplies');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new SuppliesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('supply'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Add Supplies";
		        $data['viewName'] = 'Modules\Inventory\Views\supplies\frmSupplies';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addSupplies($_POST))
		        {
		        	// $role_id = $model->insertID();
		        	// $permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('supplies'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('supplies'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Add Supplies";
	        $data['viewName'] = 'Modules\Inventory\Views\supplies\frmSupplies';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_supplies($id)
    {
    	$this->hasPermissionRedirect('edit-supplies');
    	helper(['form', 'url']);
    	$model = new SuppliesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('supply'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit Supplies";
		        $data['viewName'] = 'Modules\Inventory\Views\supplies\frmSupplies';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editSupplies($_POST, $id))
		        {
		        	// $permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('supplies'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errors in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('supplies'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Edit Supplies";
	        $data['viewName'] = 'Modules\Inventory\Views\supplies\frmSupplies';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_supplies($id)
    {
    	$this->hasPermissionRedirect('delete-supplies');

    	$model = new SuppliesModel();
    	$model->deleteSupplies($id);
    }

}
