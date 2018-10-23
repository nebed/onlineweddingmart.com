<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id');
            $table->boolean('decorator')->default(false);
            $table->boolean('makeup')->default(false);
            $table->boolean('venues')->default(false);
            $table->boolean('gown')->default(false);
            $table->boolean('cake')->default(false);
            $table->boolean('traditional')->default(false);
            $table->boolean('groom')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
}
