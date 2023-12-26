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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('os', 50);
            $table->string('server', 50);
            $table->string('database', 50);
            $table->string('langs', 50);
            $table->string('framework', 50);
            $table->string('middleware', 50);
            $table->string('version_management', 30);
            $table->tinyInteger('project_manager');
            $table->tinyInteger('project_leader');
            $table->tinyInteger('requirements_definition');
            $table->tinyInteger('basic_design');
            $table->tinyInteger('detailed_design');
            $table->tinyInteger('development');
            $table->tinyInteger('unit_test');
            $table->tinyInteger('integration_test');
            $table->tinyInteger('system_test');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
