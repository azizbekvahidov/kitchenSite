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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_uz');
            $table->string('site_name_ru');
            $table->string('site_name_en');
            $table->string('address_uz');
            $table->string('address_ru');
            $table->string('address_en');
            $table->string('phone');
            $table->string('email')->index()->unique();
            $table->string('map_link');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
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
        Schema::dropIfExists('contacts');
    }
};
