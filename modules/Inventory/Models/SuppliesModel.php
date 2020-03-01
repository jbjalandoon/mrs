<?php
namespace Modules\Inventory\Models;

use CodeIgniter\Model;

class SuppliesModel extends \CodeIgniter\Model
{
    protected $table = 'supplies';

    protected $allowedFields = ['supply_type_id', 'name', 'description', 'quantity', 'unit','status', 'created_at','updated_at', 'deleted_at'];

    public function getSupplyWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getSupplyWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.type_name FROM supplies a LEFT JOIN supply_types b ON a.supply_type_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getSupplies()
	{
	    return $this->findAll();
	}

    public function addSupplies($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editSupplies($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteSupplies($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
