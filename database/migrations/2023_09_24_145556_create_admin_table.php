<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->String('nomUtil');
            $table->String('mdp');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
}
?>
