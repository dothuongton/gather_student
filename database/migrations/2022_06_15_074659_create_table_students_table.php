<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ten_truong',200);
            $table->string('quan_huyen',255);
            $table->string('ma_hs');
            $table->string('lop');
            $table->string('ho_ten');
            $table->string('ngay');
            $table->string('thang');
            $table->string('nam');
            $table->string('gioi_tinh');
            $table->string('noi_sinh');
            $table->string('dan_toc');
            $table->string('ho_khau');
            $table->string('sdt',false);
            $table->string('sc_1');
            $table->string('sc_2');
            $table->string('sc_3');
            $table->string('sc_4');
            $table->string('sc_total');
            $table->string('ghi_chu');



            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
