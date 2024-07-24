<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testreports', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name')->nullable();
				$table->string('lab_test')->nullable();
				$table->string('referral')->nullable();
				$table->string('telephone')->nullable();
				$table->integer('total_price')->nullable();
                $table->integer('total_commission')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('testreports');
    }
}
