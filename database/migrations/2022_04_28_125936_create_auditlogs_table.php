<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditlogs', function (Blueprint $table) {
            $table->id();
            $table->string('browser')->nullable(true);
            $table->string('host')->nullable(true);
            $table->string('referrer')->nullable(true);
            $table->string('remote_address')->nullable(false);
            $table->string('path')->nullable(true);
            $table->string('query_string')->nullable(true);
            $table->string('message')->nullable(true);
            $table->string('severity')->nullable(true);
            $table->string('type')->nullable(true);
            $table->string('user_account')->nullable(true);
            $table->date('event_date')->nullable(false);
            $table->string('browser_version')->nullable(true);
            $table->string('user_agent')->nullable(true);
            $table->boolean('success')->nullable(true);
            $table->string('app')->nullable(true);
            $table->string('source')->nullable(true);
            $table->string('stack')->nullable(true);
            $table->string('exception')->nullable(true);
            $table->string('detail')->nullable(true);
            $table->string('app_version')->nullable(true);
            $table->string('request_headers')->nullable(true);
            $table->string('response_headers')->nullable(true);
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
        Schema::dropIfExists('auditlogs');
    }
}
