<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings2 extends Model {

    /**
     * @primaryKey string - primry key column.
     * @dateFormat string - date storage format
     * @guarded string - allow mass assignment except specified
     * @CREATED_AT string - creation date column
     * @UPDATED_AT string - updated date column
     */

    protected $table = 'crm_config2';
    protected $primaryKey = 'settings2_id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ['settings2_id'];
    const CREATED_AT = 'settings2_created';
    const UPDATED_AT = 'settings2_updated';

}
