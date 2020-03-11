<?php
namespace Modules\SystemSettings\Models;

use App\Models\BaseModel;

class AllergyModel extends BaseModel
{
    protected $table = 'allergies';

    protected $allowedFields = ['name','description','status', 'created_at','updated_at', 'deleted_at'];

}
