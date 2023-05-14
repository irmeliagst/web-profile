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
        Schema::create('base-table',function(Blueprint $b){
            $b->smallInteger('id','true');
            $b->string('nama','50');
            $b->string('hobi','50');
            $b->string('nim','9');
            $b->string('email','35');
            $b->string('tempat_lahir','25');
            $b->date('tanggal_lahir');
            $b->string('foto','35');
            $b->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
