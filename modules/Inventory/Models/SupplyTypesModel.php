<?php
namespace Modules\Inventory\Models;

use CodeIgniter\Model;

class SupplyTypesModel extends \CodeIgniter\Model
{
    protected $table = 'supply_types';

    protected $allowedFields = ['type_name', 'description', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getSupplyTypeWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getSupplyTypeWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM supply_types WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getSupplyTypes()
	{
	    return $this->findAll();
	}

    public function addSupplyTypes($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editSupplyTypes($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteSupplyTypes($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
