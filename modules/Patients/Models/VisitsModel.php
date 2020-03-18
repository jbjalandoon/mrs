<?php
namespace Modules\Visits\Models;

use App\Models\BaseModel;

class VisitsModel extends BaseModel
{
    protected $table = 'visits';

    protected $allowedFields = ['patient_id','status', 'created_at','updated_at', 'deleted_at'];

    public function getVisitId($id){
      $visit_list = $this->get(['patient_id' => $id, 'status' => 'a', 'updated_at' => null]);
      if(!empty($visit_list))
        return $visit_list[0]['id'];

      return 0;
    }

}
