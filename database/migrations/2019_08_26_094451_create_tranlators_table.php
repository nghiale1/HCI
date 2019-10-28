<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranlatorsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('tranlators')) {
            Schema::create('tranlators', function (Blueprint $table) {
                $table->increments('tranlator_id')->comment('id dịch giả');
                $table->string('tranlator_name', 50)->comment('tên dịch giả');
                $table->text('tranlator_info')->nullable()->comment('thông tin dịch giả');

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
            DB::statement("ALTER TABLE `tranlators` comment 'dịch giả'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
