<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        // Correct the column name to product_barcode_symbology
        if (Schema::hasColumn('products', 'product_barcode_symbology')) {
            $table->dropColumn('product_barcode_symbology');  // Correct column name
        }
        if (Schema::hasColumn('products', 'barcode')) {
            $table->dropColumn('barcode');  // Drop barcode if you want to remove it too
        }
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('product_barcode_symbology')->nullable();  // Re-add product_barcode_symbology if rolled back
        $table->string('barcode')->nullable();  // Re-add barcode if needed
    });
}

};
