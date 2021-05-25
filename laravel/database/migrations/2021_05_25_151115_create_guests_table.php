<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table -> id();
            
            $table -> string('name', 100);
            $table -> string('lastname', 100);
            $table -> date('date_of_birth') -> nullable();
            $table -> string('document_type', 50) -> nullable();
            $table -> integer('document_number') -> nullable();
            $table -> string('phone_number', 50) -> nullable();
            $table -> string('address', 100) -> nullable();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
