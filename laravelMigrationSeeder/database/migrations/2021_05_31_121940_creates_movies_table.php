<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesMoviesTable extends Migration
{
   
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table -> id();
            $table -> string('title');
            $table -> string('original_title');
            $table -> date('date');
            $table -> unsignedDecimal('vote', 2, 1);
            $table -> timestamps();
        });
    }
    }

    
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
