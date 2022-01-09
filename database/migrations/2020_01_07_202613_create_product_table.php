<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //ürün adı
            $table->string('serial_no')->nullable(); //ürün seri no
            $table->string('keywords')->nullable(); //arama motoru
            $table->string('short_description')->nullable();//kısa ürün açıklaması
            $table->longText('description')->nullable(); //ürün açıklaması
            $table->string('product_type')->nullable(); //ürün tipi
            $table->integer('category_id')->nullable(); //kategori
            $table->integer('tag_id')->nullable(); //ürün tipi
            $table->string('author')->nullable(); //ürün tipi
            $table->float('quantity')->nullable(); //miktar stok
            $table->float('reguler_price')->nullable(); //kdv'siz normal fiyat
            $table->float('tax_rate')->nullable(); //vergi oranı kdv oranı
            $table->float('kdv_reguler_price')->nullable(); //kdv dahil fiyatı
            $table->float('discount_range')->nullable(); //indirimli oranı
            $table->string('main_image')->nullable(); //Ana Fotoğraf
            $table->longText('images')->nullable(); //images
            $table->char('status',1)->nullable(); //durum
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
        Schema::dropIfExists('product');
    }
}
