<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MilestoneCategory extends Model {

    /**
     * @primaryKey string - primry key column.
     * @dateFormat string - date storage format
     * @guarded string - allow mass assignment except specified
     * @CREATED_AT string - creation date column
     * @UPDATED_AT string - updated date column
     */
    
     //protected $table = 'projects_assigned';
    protected $table = 'crm_categoriasdelameta';
    protected $primaryKey = 'milestonecategory_id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ['milestonecategory_id'];
    const CREATED_AT = 'milestonecategory_created';
    const UPDATED_AT = 'milestonecategory_updated';


}
