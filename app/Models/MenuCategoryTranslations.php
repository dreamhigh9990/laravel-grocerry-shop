<?php

/**
 * HelpCategoryLang Us Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    HelpCategoryLang Us
 * @author      Trioangle Product Team
 * @version     1.5.3
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class MenuCategoryTranslations extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu_category_lang';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function language() {
        return $this->belongsTo('App\Models\Language','locale','value');
    }
}
