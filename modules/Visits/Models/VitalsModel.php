<?php
namespace Modules\Visits\Models;

use App\Models\BaseModel;

class VitalsModel extends BaseModel
{
    protected $table = 'vitals';

    protected $allowedFields = ['user_id', 'patient_id', 'visit_id','weight', 'height','temperature', 'respiratory_rate', 'pulse_rate', 'blood_pressure', 'status', 'created_at', 'updated_at', 'deleted_at'];

    public function getLatestVital($id){

      $db = \Config\Database::connect();

      $str = 'SELECT a.*, c.created_at FROM vitals a LEFT JOIN visits c ON a.visit_id = c.id WHERE a.status = "a" AND a.patient_id = '.$id.' AND a.created_at = (SELECT max(created_at) FROM vitals b WHERE b.patient_id = a.patient_id)';

      $query = $db->query($str);

  	  return $query->getResultArray();
    }

    public function getHealthTrendSummary($id){

      $db = \Config\Database::connect();

      $str = 'SELECT a.*, b.created_at FROM vitals a LEFT JOIN visits b ON a.visit_id = b.id WHERE a.status = "a" AND a.patient_id = '.$id;

      $query = $db->query($str);
      // echo "<pre>";
  		// print_r($query->getResultArray()); die();
  	  return $query->getResultArray();
    }

    public function isVitalCaptured($id){
      $db = \Config\Database::connect();

      $str = 'SELECT * FROM vitals a LEFT JOIN visits b ON a.visit_id = b.id WHERE a.visit_id = ' . $id;

      $query = $db->query($str);

      return count($query->getResultArray());
    }

}
