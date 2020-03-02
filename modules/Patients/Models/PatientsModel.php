<?php
namespace Modules\Patients\Models;

use CodeIgniter\Model;

class PatientsModel extends \CodeIgniter\Model
{
    protected $table = 'patients';

    protected $allowedFields = ['last_name','first_name','middle_name','extension_name','birthdate','gender','cellphone_no','address','city','province','postal','relative_name','relative_contact','status', 'created_at','updated_at', 'deleted_at'];

    public function getPatientWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getPatientWithFunction($args = [])
	{
		$db = \Config\Database::connect();

    $str = "SELECT * FROM patients WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getPatients()
	{
	    return $this->findAll();
	}

    public function addPatients($val_array = [])
	{
    //$val_array['user_id'] = $_SESSION['uid'];
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editPatients($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deletePatient($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
