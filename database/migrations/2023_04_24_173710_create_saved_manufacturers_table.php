<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_manufacturers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('manufacturer_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('manufacturer_model_id')->index();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->foreign('manufacturer_model_id')->references('id')->on('manufacturer_models');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saved_manufacturers');
    }
}
