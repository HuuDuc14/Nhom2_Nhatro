<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phongtro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_chutro');
            $table->string('ten_phong', 255);
            $table->decimal('dien_tich', 8, 2);
            $table->integer('so_nguoi_o');
            $table->decimal('gia_thue', 10, 2);
            $table->text('mo_ta')->nullable();
            $table->enum('trang_thai', ['trống', 'đã thuê']);
            $table->timestamps();
        
            $table->foreign('id_chutro')->references('id')->on('chutro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phongtro');
    }
};
