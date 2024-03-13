<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCriteriaToAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alternatives', function (Blueprint $table) {
            $table->float('penciptaan_arsip')->nullable()->after('kode');
            $table->float('pemindahan_arsip')->nullable()->after('penciptaan_arsip');
            $table->float('pemberkasan')->nullable()->after('pemindahan_arsip');
            $table->float('layanan_arsip')->nullable()->after('pemberkasan');
            $table->float('pengelolaan_arsip')->nullable()->after('layanan_arsip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alternatives', function (Blueprint $table) {
            $table->dropColumn('penciptaan_arsip');
            $table->dropColumn('pemindahan_arsip');
            $table->dropColumn('pemberkasan');
            $table->dropColumn('layanan_arsip');
            $table->dropColumn('pengelolaan_arsip');
        });
    }
}
