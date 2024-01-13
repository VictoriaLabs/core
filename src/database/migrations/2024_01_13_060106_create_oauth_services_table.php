<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('oauth_services', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->unique()->nullable(false);
            $table->longText("redirect_uri")->nullable(false);
            $table->text("btn_icon")->nullable();
            $table->text("btn_label")->nullable(false);
            $table->longText("btn_url")->nullable(false);
            $table->boolean("active");
            $table->bigInteger("order");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oauth_services');
    }
};
