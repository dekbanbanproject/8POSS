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
        if (!Schema::hasTable('store_manager'))
        {
            Schema::create('store_manager', function (Blueprint $table) {
                $table->id("store_id",11);
                $table->String("store_name",255)->nullable();        
                $table->String("store_storename",255)->nullable();     
                $table->String("store_tel",255)->nullable();     
                $table->String("store_email",255)->nullable();  
                $table->String("store_username",255)->nullable();    
                $table->String("store_password",255)->nullable();     
                $table->String("max_user",10)->nullable();  
                $table->enum('store_type', ['0', '1','2']);     
                $table->dateTime("updated_at");
                $table->dateTime("created_at");
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_manager');
    }
};
