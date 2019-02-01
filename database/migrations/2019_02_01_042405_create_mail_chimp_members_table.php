<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailChimpMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_chimp_members', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('email_address')->nullable();
            $table->text('merge_fields')->nullable();
            $table->string('status')->nullable();
            $table->string('mail_chimp_id')->nullable();
            $table->string('mail_chimp_member_id')->nullable();
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
        Schema::dropIfExists('mail_chimp_members');
    }
}
