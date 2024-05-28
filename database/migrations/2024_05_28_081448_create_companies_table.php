<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_code');
            $table->year('year_of_data');
            $table->decimal('current_assets', 15, 2);
            $table->decimal('current_liabilities', 15, 2);
            $table->decimal('total_assets', 15, 2);
            $table->decimal('ebit', 15, 2);
            $table->decimal('net_income', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
