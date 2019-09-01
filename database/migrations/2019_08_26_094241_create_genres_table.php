<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('genres')) {
            Schema::create('genres', function (Blueprint $table) {
                $table->increments('genre_id')->comment('id thể loại nghệ thuật');
                $table->string('genre_name', 100)->comment('tên thể loại nghệ thuật');
                $table->integer('category_id')->unsigned()->comment('FK id hạng mục sách');

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
            DB::statement("ALTER TABLE `genres` comment 'thể loại nghệ thuật'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
