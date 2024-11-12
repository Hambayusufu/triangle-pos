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
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_number')->nullable();         // Add product number
            $table->string('barcode_symbology')->nullable();      // Add barcode symbology
            $table->integer('stock_alert')->default(0);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('product_number');       // Drop product number
            $table->dropColumn('barcode_symbology');    // Drop barcode symbology
            $table->dropColumn('stock_alert'); 
        });
    }
};
