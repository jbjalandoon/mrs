<?php
namespace Modules\Inventory\Controllers;

use Modules\Inventory\Models\SupplyTypesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class SupplyTypes extends BaseController
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
    	$this->hasPermissionRedirect('list-of-supply-types');

    	$model = new SupplyTypesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getSupplyTypeWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['supply_types'] = $model->getSupplyTypeWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Supply Types";
        $data['viewName'] = 'Modules\Inventory\Views\supplytypes\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_supply_types($id)
	{
		$this->hasPermissionRedirect('show-supply-types');
		$data['permissions'] = $this->permissions;

		$model = new SupplyTypesModel();

		$data['supply_types'] = $model->getSupplyTypeWithCondition(['id' => $id]);

		$data['function_title'] = "Supply Type Details";
    $data['viewName'] = 'Modules\Inventory\Views\supplytypes\supplytypesDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function add_supply_types()
    {
    	$this->hasPermissionRedirect('add-supply-types');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new SupplyTypesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('supply_type'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Add Supply Types";
		        $data['viewName'] = 'Modules\Inventory\Views\supplytypes\frmSupplyTypes';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addSupplyTypes($_POST))
		        {
		        	// $role_id = $model->insertID();
		        	// $permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('supply-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('supply-types'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Add Supply Types";
	        $data['viewName'] = 'Modules\Inventory\Views\supplytypes\frmSupplyTypes';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_supply_types($id)
    {
    	$this->hasPermissionRedirect('edit-supply-types');
    	helper(['form', 'url']);
    	$model = new SupplyTypesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('supply_type'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit Supply Type";
		        $data['viewName'] = 'Modules\Inventory\Views\supplytypes\frmSupplyTypes';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editSupplyTypes($_POST, $id))
		        {
		        	// $permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('supply-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You errors in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('supply-types'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Edit Supply Types";
	        $data['viewName'] = 'Modules\Inventory\Views\supplytypes\frmSupplyTypes';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_supply_types($id)
    {
    	$this->hasPermissionRedirect('delete-supply-types');

    	$model = new SupplyTypesModel();
    	$model->deleteSupplyTypes($id);
    }

}
