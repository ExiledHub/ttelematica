<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::defaultStringLength(191);
	Schema::create('projects', function (Blueprint $table) {
            $table->string('pname')->unique();
            $table->string('pdesc');
	    $table->date('idate');
	    $table->date('edate');
	    $table->timestamp('updated_at')->nullable();
	    $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
