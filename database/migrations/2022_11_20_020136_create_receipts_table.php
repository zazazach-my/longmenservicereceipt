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
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('service_type')->nullable();
            $table->string('customer_name',150)->nullable();
            $table->string('contact_number');
            $table->string('brand')->nullable();
            $table->string('warranty_card')->nullable();
            $table->string('image')->nullable();
            $table->text('remark');
            $table->bigInteger('cost')->nullable();
            $table->bigInteger('prepayment')->nullable();
            $table->char('status_id')->default(1);
            $table->timestamps();

            $table->index('status_id');
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
