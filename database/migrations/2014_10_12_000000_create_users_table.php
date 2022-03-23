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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('pname')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('cid')->nullable();
            $table->string('fingle')->nullable();
            $table->string('tel')->nullable();
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('type', ['ADMIN', 'STAFF', 'CUSTOMER', 'MANAGE'])->default('CUSTOMER');
            $table->string('line_token')->nullable();
            $table->string('dep_id')->nullable();
            $table->string('dep_name')->nullable();
            $table->string('dep_subid')->nullable();
            $table->string('dep_subname')->nullable();
            $table->string('dep_subsubid')->nullable();
            $table->string('dep_subsubnsme')->nullable();
            $table->string('status')->nullable();
            $table->string('permiss_admin')->nullable();
            $table->string('permiss_staff')->nullable();
            $table->string('permiss_customer')->nullable();
            $table->string('permiss_hn')->nullable();
            $table->string('permiss_group')->nullable();
            $table->string('permiss_po')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
