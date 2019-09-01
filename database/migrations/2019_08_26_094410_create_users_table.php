<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('user_id')->comment('id người dùng');
                // Mac dinh lenght = 10 , Khong dc comment
                $table->string('user_name', 50)->comment('tên đầy đủ của người dùng');
                $table->string('user_username', 50)->comment('tên đăng nhập');
                $table->string('user_password', 60)->comment('mật khẩu');
                $table->string('user_tel', 20)->comment('sdt');
                $table->string('user_mail', 64)->comment('email');
                $table->date('user_birth')->comment('ngày sinh');
                $table->string('user_gender', 10)->comment('giới tính');

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
            DB::statement("ALTER TABLE `users` comment 'Lưu thông tin người dùng'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
