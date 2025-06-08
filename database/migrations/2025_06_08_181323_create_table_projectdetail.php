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
        Schema::create('projectdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->integer('year');
            $table->decimal('production', 15, 2)->nullable();
            $table->decimal('income', 15, 2)->nullable();
            $table->decimal('invest_capital', 15, 2)->nullable();
            $table->decimal('invest_non_capital', 15, 2)->nullable();
            $table->decimal('operational', 15, 2)->nullable();
            $table->decimal('depreciation', 15, 2)->nullable();
            $table->decimal('taxable_income', 15, 2)->nullable();
            $table->decimal('tax', 15, 2)->nullable();
            $table->decimal('ncf', 15, 2)->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectdetail');
    }
};
