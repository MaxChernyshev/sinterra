<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobtypesTable extends Migration
{
    public function up()
    {
        Schema::create('jobtypes', function (Blueprint $table)
        {
            $table->id();
            $table->string('title');
            $table->string('thumbnail');
            $table->text('content');
            $table->string('slug');
            $table->string('seo_title');
            $table->string('seo_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobtypes');
    }
}
