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
        if (!Schema::hasTable('group_person'))
        {
            Schema::create('group_person', function (Blueprint $table) {
                $table->id("group_perid",11);
                $table->String("group_pername",255)->nullable();          
                $table->dateTime("updated_at")->nullable();
                $table->dateTime("created_at")->nullable();
            });
        }
        if (Schema::hasTable('group_person')) {
            DB::table('group_person')->truncate();
        }
        DB::table('group_person')->insert(array(
            'group_perid' => '1',
            'group_pername' => 'ผู้จัดการ',         
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ));
        DB::table('group_person')->insert(array(
            'group_perid' => '2',
            'group_pername' => 'พนักงาน',         
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ));
        DB::table('group_person')->insert(array(
            'group_perid' => '3',
            'group_pername' => 'สมาชิก',         
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_person');
    }
};
