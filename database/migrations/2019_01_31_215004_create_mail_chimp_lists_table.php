<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailChimpListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_chimp_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->text('campaign_defaults')->nullable();
            $table->text('contact')->nullable();
            $table->boolean('email_type_option')->default(false);
            $table->string('mail_chimp_id')->nullable();
            $table->string('name')->nullable();
            $table->string('notify_on_subscribe')->nullable();
            $table->string('notify_on_unsubscribe')->nullable();
            $table->string('permission_reminder')->nullable();
            $table->boolean('use_archive_bar')->nullable()->default(false);
            $table->string('visibility')->nullable();
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
        Schema::dropIfExists('mail_chimp_lists');
    }
}
