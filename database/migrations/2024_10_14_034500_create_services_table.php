<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            // $table->id();
            // $table->string('image');
            // $table->string('header');
            // $table->text('content');
            // $table->string('slug')->unique();
            // $table->timestamps();
              $table->id();
            $table->unsignedBigInteger('parent_id')->nullable(); // For child services
            $table->string('title');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->string('banner')->nullable(); // Could be image path or URL
            $table->string('slug')->unique();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
