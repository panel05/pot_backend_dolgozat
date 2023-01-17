<?php

use App\Models\clubs;
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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->timestamps();
            $table->date('establishment');
            $table->string('location');
            $table->integer('max_number');
        });

        clubs::create(['establishment'=>'1996-11-06', 'location'=>'Budapest Népliget', 'max_number'=>2000 ]);
        clubs::create(['establishment'=>'2000-07-14', 'location'=> 'Debrecen', 'max_number'=>1500]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
};
