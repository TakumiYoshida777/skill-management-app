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
        Schema::create('mdr_engineer_skills', function (Blueprint $table) {
            $table->foreignUuid('project_id', 36)->index()->constrained()->onDelete('cascade');
            $table->string('mst_os', 100);
            $table->integer('os_experience_months');
            $table->tinyInteger('os_auto_renew_flg');
            $table->string('mst_server', 100);
            $table->integer('server_experience_months');
            $table->tinyInteger('server_auto_renew_flg');
            $table->string('mst_database', 100);
            $table->integer('database_experience_months');
            $table->tinyInteger('database_auto_renew_flg');
            $table->string('mst_lang', 100);
            $table->integer('lang_experience_months');
            $table->tinyInteger('lang_auto_renew_flg');
            $table->string('mst_framework', 100);
            $table->integer('framework_experience_months');
            $table->tinyInteger('framework_auto_renew_flg');
            $table->string('mst_middleware', 100);
            $table->integer('middleware_experience_months');
            $table->tinyInteger('middleware_auto_renew_flg');
            $table->string('mst_version_management', 100);
            $table->integer('version_management_experience_months');
            $table->tinyInteger('version_management_auto_renew_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdr_engineer_skills');
    }
};
