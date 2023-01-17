<?php

use App\Models\membership;
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
        Schema::create('memberships', function (Blueprint $table) {
            $table->primary(['user_id', 'club_id']);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('club_id')->references('club_id')->on('clubs');
        });
        membership::create(['user_id'=>1, 'club_id'=>1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
};
