<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookImagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('book_images')) {
            Schema::create('book_images', function (Blueprint $table) {
                $table->increments('book_image_id')->comment('id hình ảnh - sách');
                $table->integer('book_id')->comment('id sách');
                $table->integer('image_id')->comment('id hình ảnh');

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
            DB::statement("ALTER TABLE `book_images` comment 'trạng thái'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
