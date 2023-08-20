<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_business_contact_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessContactTable extends Migration
{
    public function up()
    {
        Schema::create('business_contact', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('content', 1000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('business_contact');
    }
}
