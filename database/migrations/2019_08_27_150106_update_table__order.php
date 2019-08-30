<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Order', function (Blueprint $table) {
            $table->foreign("Customer_id")->references("Customer_id")->on("Customer");
            $table->foreign("Product_id")->references("Product_id")->on("Product");
            $table->foreign("Employees_id")->references("Employees_id")->on("Employees");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Order', function (Blueprint $table) {
            $table->dropForeign(["customer_id"]);
            $table->dropForeign(["product_id"]);
            $table->dropForeign(["employees_id"]);

        });
    }
}
