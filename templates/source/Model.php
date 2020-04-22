<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* {{snippet:begin_class}} */

class {{$ __value__}} extends Model
{
    /* {{snippet:begin_properties}} */

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = '{{$ __value__/__lowercase_text__}}table';

    protected $fillable = [
{{LARAVEL_MODEL{{$ ../__item_index__/__value__}}_DEFINE_PROPERTIES}}
    ];

    /* {{snippet:end_properties}} */

    /* {{snippet:begin_methods}} */

    /* {{snippet:end_methods}} */
}

/* {{snippet:end_class}} */