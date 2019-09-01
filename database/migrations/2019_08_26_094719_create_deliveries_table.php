<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('deliveries')) {
            Schema::create('deliveries', function (Blueprint $table) {
                $table->increments('delivery_id')->comment('id người nhận');
                $table->string('delivery_name', 100)->comment('tên người nhận');
                $table->string('delivery_address', 50)->comment('địa chỉ nhận hàng');
                $table->string('delivery_tel', 12)->comment('sdt');
                $table->integer('ward_id')->unsigned()->comment('FK id phường xã');
                $table->integer('user_id')->unsigned()->comment('FK id khách hàng');

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
            DB::statement("ALTER TABLE `deliveries` comment 'thông tin nhận hàng'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
