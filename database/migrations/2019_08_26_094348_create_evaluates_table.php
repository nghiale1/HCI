<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluatesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('evaluates')) {
            Schema::create('evaluates', function (Blueprint $table) {
                $table->increments('evaluate_id')->comment('id đánh giá');
                $table->text('evaluate_comment')->comment('nội dung bình luận');
                $table->integer('evaluate_rank')->unsigned()->comment('đánh giá');
                $table->integer('user_id')->unsigned()->comment('FK id người đánh giá');
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
            DB::statement("ALTER TABLE `evaluates` comment 'bình luận'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
