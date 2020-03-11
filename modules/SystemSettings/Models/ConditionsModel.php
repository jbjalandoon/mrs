<?php
namespace Modules\SystemSettings\Models;

use App\Models\BaseModel;

class ConditionsModel extends BaseModel
{
    protected $table = 'conditions';

    protected $allowedFields = ['name','description','patient_condition_status','status', 'created_at','updated_at', 'deleted_at'];

}
