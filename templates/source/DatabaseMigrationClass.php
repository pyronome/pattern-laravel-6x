<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/* {{@snippet:begin_class}} */

class Create{{$ __value__}}Table extends Migration
{

    /* {{@snippet:begin_properties}} */

    /* {{@snippet:end_properties}} */

    /* {{@snippet:begin_methods}} */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* {{@snippet:begin_up_method}} */
     
        Schema::create('{{$ __value__/__lowercase_text__}}table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('deleted')->default(0);
{{LARAVEL_MODEL{{$ ../__item_index__/__value__}}_MIGRATION_PROPERTIES}}
        });

{{LARAVEL_MODEL{{$ ../__item_index__/__value__}}_MIGRATION_FILE_IMAGE_PROPERTY}}

        /* {{@snippet:end_up_method}} */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        /* {{@snippet:begin_down_method}} */

        Schema::drop('{{$ __value__/__lowercase_text__}}table');

		/* {{@snippet:end_down_method}} */

    }

    /* {{@snippet:end_methods}} */
}

/* {{@snippet:end_class}} */