<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFocTbcToReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receipts', function (Blueprint $table) {
            //
            $table->boolean('free_of_charge')->default(false)->after('status_id');
            $table->boolean('to_be_confirmed')->default(false)->after('free_of_charge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipts', function (Blueprint $table) {
            //
            $table->dropColumn('free_of_charge');
            $table->dropColumn('to_be_confirmed');

        });
    }
}
