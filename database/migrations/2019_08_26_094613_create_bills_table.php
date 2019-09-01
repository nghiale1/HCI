<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('bills')) {
            Schema::create('bills', function (Blueprint $table) {
                $table->increments('bill_id')->comment('id hóa đơn');
                $table->float('bill_total', 8, 2)->comment('tổng tiền');
                $table->integer('cart_id')->unsigned()->comment('FK id giỏ hàng');
                $table->float('bill_fee', 8, 2)->comment('phí vận chuyển');
                $table->integer('delivery_id')->unsigned()->comment('FK id nhận hàng');

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
            DB::statement("ALTER TABLE `bills` comment 'hóa đơn'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
