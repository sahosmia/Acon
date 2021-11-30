<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('short_content');
            $table->text('content');
            $table->string('client_name');
            $table->string('client_company');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('website');
            $table->integer('cost');
            $table->text('client_comment');
            $table->integer('category_id');
            $table->string('photo')->nullable();
            $table->string('banner')->nullable();
            $table->string('meta_title');
            $table->string('meta_description');
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
        Schema::dropIfExists('portfolios');
    }
}
