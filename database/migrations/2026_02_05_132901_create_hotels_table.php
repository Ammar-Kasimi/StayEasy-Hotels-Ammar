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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string(column:'address' );
            $table->string('img',1000)->default('https://www.bing.com/ck/a?!&&p=4e13f6d6731112f94ecb0a3cab20abef6147355b8243632ad3be16419d227471JmltdHM9MTc3MDI0OTYwMA&ptn=3&ver=2&hsh=4&fclid=1e19fdcd-81c7-6a56-3a49-eb3980fa6b90&u=a1L2ltYWdlcy9zZWFyY2g_cT1ob3RlbCtpbWFnZXMmaWQ9MDAyNTcwRjBDQUFBNzYxMEFGMzIzQTM1NkUzODIxRDA3NDhCQTQxRCZGT1JNPUlBQ0ZJUg&ntb=1');
            $table->string('desc')->nullable();
            $table->enum('status', ['pending', 'active', 'denied'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
