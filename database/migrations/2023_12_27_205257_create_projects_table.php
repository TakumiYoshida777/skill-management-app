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
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id',36)->primary();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->string('project_name', 50);
            $table->string('description', 255);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('team_size');
            $table->string('position', 50);
            $table->tinyInteger('requirement_definition')->default(0);
            $table->tinyInteger('design')->default(0);
            $table->tinyInteger('programming')->default(0);
            $table->tinyInteger('unit_testing')->default(0);
            $table->tinyInteger('integration_testing')->default(0);
            $table->tinyInteger('system_testing')->default(0);
            $table->tinyInteger('operation_testing')->default(0);
            $table->tinyInteger('system_migration')->default(0);
            $table->tinyInteger('operation_maintenance')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
