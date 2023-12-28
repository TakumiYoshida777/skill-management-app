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
        Schema::create('mdr_portfolio_used_skills', function (Blueprint $table) {
            $table->foreignUlid('portfolio_id', 36)->index()->constrained()->onDelete('cascade');
            $table->string('mst_os', 100);
            $table->tinyInteger('has_work_experience_os');
            $table->string('mst_server', 100);
            $table->tinyInteger('has_work_experience_server');
            $table->string('mst_database', 100);
            $table->tinyInteger('has_work_experience_database');
            $table->string('mst_lang', 100);
            $table->tinyInteger('has_work_experience_lang');
            $table->string('mst_framework', 100);
            $table->tinyInteger('has_work_experience_framework');
            $table->string('mst_middleware', 100);
            $table->tinyInteger('has_work_experience_middleware');
            $table->string('mst_version_management', 100);
            $table->tinyInteger('has_work_experience_version_management');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdr_portfolio_used_skills');
    }
};
