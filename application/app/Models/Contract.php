<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    /**
     * @primaryKey string - primry key column.
     * @dateFormat string - date storage format
     * @guarded string - allow mass assignment except specified
     * @CREATED_AT string - creation date column
     * @UPDATED_AT string - updated date column
     */

    protected $table = 'crm_contratos';
    protected $primaryKey = 'doc_id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ['foo_id'];
    const CREATED_AT = 'doc_created';
    const UPDATED_AT = 'doc_updated';

    /**
     * relatioship business rules:
     *         - the Creator (user) can have many Contracts
     *         - the Contract belongs to one Creator (user)
     */
    public function creator() {
        return $this->belongsTo('App\Models\User', 'doc_creatorid', 'id');
    }

    /**
     * relatioship business rules:
     *         - the Category can have many Contracts
     *         - the Contract belongs to one Category
     */
    public function category() {
        return $this->belongsTo('App\Models\Category', 'doc_categoryid', 'category_id');
    }

    /**
     * relatioship business rules:
     *         - the Contract can have many Tags
     *         - the Tags belongs to one Contract
     *         - other tags can belong to other tables
     */
    public function tags() {
        return $this->morphMany('App\Models\Tag', 'tagresource');
    }

    /**
     * display format for contract id - adding leading zeros & with any set prefix
     * formatted_bill_invoiceid
     * e.g. PRO-000001
     */
    public function getFormattedIdAttribute() {
        return runtimeContractIdFormat($this->doc_id);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getFormattedDocCreatedAttribute() {
        return runtimeDate($this->doc_created);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getFormattedDocDateStartAttribute() {
        return runtimeDate($this->doc_date_start);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getFormattedDocDateEndAttribute() {
        return runtimeDate($this->doc_date_end);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getFormattedDocDatePublishedAttribute() {
        return runtimeDate($this->doc_date_published);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getFormattedDocDateLastEmailedAttribute() {
        return runtimeDate($this->doc_date_last_emailed);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getFormattedDocSignedDateAttribute() {
        return runtimeDate($this->doc_signed_date);
    }

    /**
     * pre-formatted data
     * @return string
     */
    public function getSignedFullNameAttribute() {
        return $this->doc_signed_first_name . ' ' . $this->doc_signed_last_name;
    }

    /**
     * pre-lang applied data
     * @return string
     */
    public function getLangDocStatusAttribute() {
        return runtimeLang($this->doc_status);
    }
}