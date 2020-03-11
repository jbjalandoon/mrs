<?php
namespace Modules\Patients\Models;

use App\Models\BaseModel;

class ConditionsModel extends BaseModel
{
    protected $table = 'patient_conditions';

    protected $allowedFields = ['patient_id','condition_id','patient_condition_status','status', 'created_at','updated_at', 'deleted_at'];

}
