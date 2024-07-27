<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->text('mo_ta')->nullable();
            $table->decimal('gia_ban', 15, 2);
            $table->integer('so_luong_ton');
            $table->foreignId('id_nha_cung_cap')->constrained('suppliers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
