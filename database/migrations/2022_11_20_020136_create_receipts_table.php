<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receipt_no');
            $table->string('name',150)->nullable();
            $table->string('contact_number');
            $table->string('brand')->nullable();
            $table->string('warranty_card')->nullable();
            $table->string('image')->nullable();
            $table->text('remark');
            $table->bigInteger('cost')->default(0);
            $table->bigInteger('prepayment')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
