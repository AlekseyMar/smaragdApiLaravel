<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigUser extends Model
{
    protected $table = 'big_user';

    protected $fillable = [
        'big_user_id', //- id
        'user_login', //- идентификатор пользователя
        'firstName', //- имя
        'middleName', //- отчество
        'lastName', //- фамилия
        'rank', //- ранг (роль)
        'sex', //- пол
        'dateBirth', //- дата рождения
        'position', //- должность
        'detachment', //- отряд
        'class', //- класс
        'nationality', //- национальность
        'citizenship', //- гражданство
        'credo', //- кредо
        'color', //- любимый цвет 
        'cuisine', //- любимая кухня
        'movie', //- любимое кино
        'literature', //- любимый литературный жанр
        'music', //- любимое муз направление
        'song', //- любимая песня
        'picture', //- любимый жанр изобраз искусст
        'animal', //- домашнее животное
        'totem', //- кем бы я был, если не чел.
        'idol', //- кумир
        'created_at', // - дата создания записи
        'updated_at' // - дата обновнения записи
    ];

    protected $visible = [
        'big_user_id', //- id
        'user_login', //- идентификатор пользователя
        'firstName', //- имя
        'middleName', //- отчество
        'lastName', //- фамилия
        'rank', //- ранг (роль)
        'sex', //- пол
        'dateBirth', //- дата рождения
        'position', //- должность
        'detachment', //- отряд
        'class', //- класс
        'nationality', //- национальность
        'citizenship', //- гражданство
        'credo', //- кредо
        'color', //- любимый цвет 
        'cuisine', //- любимая кухня
        'movie', //- любимое кино
        'literature', //- любимый литературный жанр
        'music', //- любимое муз направление
        'song', //- любимая песня
        'picture', //- любимый жанр изобраз искусст
        'animal', //- домашнее животное
        'totem', //- кем бы я был, если не чел.
        'idol', //- кумир
        'created_at', // - дата создания записи
        'updated_at' // - дата обновнения записи
    ];
    //use Notifiable;
   
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
