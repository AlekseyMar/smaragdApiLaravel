<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('big_user', function (Blueprint $table) {
            $table->bigIncrements('big_user_id');
            $table->string('user_login',30)->comment('идентификатор пользователя'); 
            $table->string('firstName',20)->nullable()->comment('имя');
            $table->string('middleName',20)->nullable()->comment('отчество'); 
            $table->string('lastName',20)->nullable()->comment('фамилия'); 
            $table->string('rank',20)->nullable()->comment('ранг (роль)'); 
            $table->string('sex',10)->nullable()->comment('пол'); 
            $table->date('dateBirth')->nullable()->comment('дата рождения'); 
            $table->string('position',20)->nullable()->comment('должность');  
            $table->string('detachment',20)->nullable()->comment('отряд');  
            $table->string('class',20)->nullable()->comment('класс'); 
            $table->string('nationality',20)->nullable()->comment('национальность'); 
            $table->string('citizenship',20)->nullable()->comment('гражданство'); 
            $table->string('credo')->nullable()->comment('кредо'); 
            $table->string('color',20)->nullable()->comment('любимый цвет'); 
            $table->string('cuisine',30)->nullable()->comment('любимая кухня'); 
            $table->string('movie',30)->nullable()->comment('любимое кино'); 
            $table->string('literature',30)->nullable()->comment('любимый литературный жанр'); 
            $table->string('music',30)->nullable()->comment('любимое муз направление');  
            $table->string('song',30)->nullable()->comment('любимая песня');
            $table->string('picture',30)->nullable()->comment('любимый жанр изобраз искусст'); 
            $table->string('animal',20)->nullable()->comment('домашнее животное'); 
            $table->string('totem',20)->nullable()->comment('кем бы я был, если не чел.'); 
            $table->string('idol',30)->nullable()->comment('кумир'); 
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
        Schema::dropIfExists('big_user');
    }
}
