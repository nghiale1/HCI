<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseBooksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('warehouse_books')) {
            Schema::create('warehouse_books', function (Blueprint $table) {
                $table->increments('warehouse_book_id')->comment('id kho sách');
                $table->integer('book_id')->unsigned()->comment('FK id sách');
                $table->integer('warehouse_id')->unsigned()->comment('FK id kho');
                $table->integer('warehouse_book_amount')->unsigned()->comment('tổng số lượng sách có trong kho');
                $table->integer('warehouse_book_remaining_amount')->unsigned()->comment('số lượng sách còn lại');

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
            DB::statement("ALTER TABLE `warehouse_books` comment 'kho - sách'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
