<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->text('first_name')->nullable();
            $table->text('last_name');
            $table->date('dob');
            $table->text('email');
            $table->text('emergency_contact_name');
            $table->text('emergency_contact_number');
            $table->text('gender');
            $table->text('street');
            $table->text('city');
            $table->enum('parish',['St.Andrew','Kingston','St.Mary','St.Ann','St.Thomas','St.Elizabeth','Portland','St.Catherine','Manchester','Clarendon','Hanover','Westmoreland','St.James','Trelawny']);
            $table->text('home_phone');
            $table->text('middle_initial');
            $table->text('cell_phone');
            $table->enum('marital_title',['Mr','Ms','Miss','Mrs']);
            $table->text('occupation');
            $table->text('work_phone');
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
        Schema::dropIfExists('patients');
    }
};
