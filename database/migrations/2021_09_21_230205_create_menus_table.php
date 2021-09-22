<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('panel')->default('super-admin');
            $table->string('section')->default('dashboard');
            $table->unsignedTinyInteger('section_order')->nullable();
        });

        Schema::table('menus', function (Blueprint $table){
            $table->unique(['panel','section']);
        });

        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('menu_id')->constrained();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('route')->nullable();
            $table->string('url')->nullable();
            $table->string('target')->nullable();
            $table->string('icon_class')->nullable();
            $table->unsignedTinyInteger('order')->default(1);
            $table->text('tags')->nullable();
            $table->string('parameters')->nullable();
        });

        Schema::table('menu_items', function (Blueprint $table){
            $table->foreign('parent_id')->references('id')->on('menu_items')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
        Schema::dropIfExists('menus');
    }
}
