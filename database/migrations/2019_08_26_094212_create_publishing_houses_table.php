<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishingHousesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('publishing_houses')) {
            Schema::create('publishing_houses', function (Blueprint $table) {
                $table->increments('publishing_house_id')->comment('id nhà xuất bản');
                $table->string('publishing_house_name', 50)->comment('tên nhà xuất bản');

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
            DB::statement("ALTER TABLE `publishing_houses` comment 'nhà xuất bản'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
