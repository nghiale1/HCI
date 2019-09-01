<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreBooksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('genre_books')) {
            Schema::create('genre_books', function (Blueprint $table) {
                $table->increments('genre_book_id')->comment('id thể loại nghệ thuật và sách');
                $table->integer('genre_id')->unsigned()->comment('FK id tên thể loại nghệ thuật');
                $table->integer('book_id')->unsigned()->comment('FK id sách');

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
            DB::statement("ALTER TABLE `genre_books` comment 'thể loại nghệ thuật và sách'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
