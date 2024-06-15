<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('book', function (Blueprint $table) {
            $table->enum('status', ['available', 'borrowed'])->default('available')->after('data_wydania');
        });
    }

    public function down()
    {
        Schema::table('book', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};

