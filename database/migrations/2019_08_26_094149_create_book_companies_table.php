<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('book_companies')) {
            Schema::create('book_companies', function (Blueprint $table) {
                $table->increments('book_company_id')->comment('id công ty sách');
                $table->string('book_company_name', 50)->comment('tên công ty sách');

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
            DB::statement("ALTER TABLE `book_companies` comment 'công ty sách'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
