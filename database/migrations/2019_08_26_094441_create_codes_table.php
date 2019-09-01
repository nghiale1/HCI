<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('codes')) {
            Schema::create('codes', function (Blueprint $table) {
                $table->increments('code_id')->comment('id mã giảm giá');
                $table->string('code_code', 12)->comment('mã code');
                $table->text('code_description', 12)->comment('mô tả mã code');
                $table->integer('code_value')->unsigned()->comment('giá trị code');
                $table->text('code_condition')->comment('điều kiện mã code');
                $table->integer('code_amount')->unsigned()->comment('số lượng mã giảm giá');
                $table->integer('code_remaining_amount')->unsigned()->comment('số lượng còn lại');
                $table->integer('status_id')->unsigned()->comment('trạng thái mã giảm giá');

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
            DB::statement("ALTER TABLE `codes` comment 'mã giảm giá'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
