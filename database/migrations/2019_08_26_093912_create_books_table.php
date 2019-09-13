<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('books')) {
            Schema::create('books', function (Blueprint $table) {
                $table->increments('book_id')->comment('id sách');
                $table->text('book_title')->comment('tên sách');
                $table->text('book_description')->comment('mô tả sách');
                $table->float('book_price', 8, 2)->commnent('giá');
                $table->string('book_releasedate', 50)->comment('ngày phát hành');
                $table->string('book_form', 45)->comment('kiểu bìa sách');
                $table->integer('book_pagenumber')->unsigned()->comment('số trang sách');
                $table->string('book_size', 50)->comment('kích cỡ sách');
                $table->string('book_weight', 50)->comment('trọng lượng sách');
                $table->integer('tranlator_id')->nullable()->unsigned()->index()->comment('FK id dịch giả');
                $table->integer('author_id')->unsigned()->index()->comment('FK id tác giả');
                $table->integer('publishing_house_id')->unsigned()->index()->comment('FK id nhà xuất bản');
                $table->integer('book_company_id')->unsigned()->index()->comment('FK id cty sách');
                $table->integer('sale_id')->unsigned()->index()->comment('FK id giá khuyến mãi');

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
            DB::statement("ALTER TABLE `books` comment 'lưu trữ thông tin sách'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
