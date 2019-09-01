<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksCartTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('books_cart')) {
            Schema::create('books_cart', function (Blueprint $table) {
                $table->increments('book_cart_id')->comment('id giỏ hàng - sách');
                $table->integer('book_id')->unsigned()->comment('FK id sách');
                $table->integer('cart_id')->unsigned()->comment('FK id giỏ hàng');
                $table->integer('book_cart_amount')->unsigned()->comment('số lượng sản phẩm');

                // log time
                $table->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('ngày tạo');

                $table->timestamp('updated_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
                    ->comment('ngày cập nhật');

                $table->timestamp('deleted_at')
                    ->nullable()
                    ->comment('ngày xóa tạm');
            });
            DB::statement("ALTER TABLE `books_cart` comment 'giỏ hàng - sách'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
