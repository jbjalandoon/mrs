<?php
namespace Modules\Patients\Models;

use App\Models\BaseModel;

class AllergyModel extends BaseModel
{
    protected $table = 'patient_allergies';

    protected $allowedFields = ['patient_id','allergy_id','reaction_id','severity','status', 'created_at','updated_at', 'deleted_at'];

}
