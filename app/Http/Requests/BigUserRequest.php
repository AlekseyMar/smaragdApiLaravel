<?php

namespace App\Http\Requests;


class BigUserRequest extends ApiRequest
{

	public function rules()
	{
		return [
			//'name' => 'required|string', обязательное поле \ тип стр
			//'price' => 'required|int',
			//'email' => 'required|string',
			//'phone' => 'string', не обязательное поле

			'big_user_id' => 'string', //- id
			'user_login' => 'string', //- идентификатор пользователя
			'firstName' => 'string', //- имя
			'middleName' => 'string', //- отчество
			'lastName' => 'string', //- фамилия
			'rank' => 'string', //- ранг (роль)
			'sex' => 'string', //- пол
			'dateBirth' => 'date', //- дата рождения
			'position' => 'string', //- должность
			'detachment' => 'string', //- отряд
			'class' => 'string', //- класс
			'nationality' => 'string', //- национальность
			'citizenship' => 'string', //- гражданство
			'credo' => 'string', //- кредо
			'color' => 'string', //- любимый цвет 
			'cuisine' => 'string', //- любимая кухня
			'movie' => 'string', //- любимое кино
			'literature' => 'string', //- любимый литературный жанр
			'music' => 'string', //- любимое муз направление
			'song' => 'string', //- любимая песня
			'picture' => 'string', //- любимый жанр изобраз искусст
			'animal' => 'string', //- домашнее животное
			'totem' => 'string', //- кем бы я был, если не чел.
			'idol' => 'string', //- кумир
			'created_at' => 'string', // - дата создания записи
			'updated_at' => 'string' // - дата обновнения записи
		];
	}

	/**
	 * Custom message for validation
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			// 'name.required' => 'Name required!', текст сооб. 
			// 'price.required' => 'Price required!',
			// 'email.required' => 'Email required!',
			// 'phone.string' => 'Phone should be sting'

			'big_user_id' => 'string', //- id
			'user_login' => 'string', //- идентификатор пользователя
			'firstName' => 'string', //- имя
			'middleName' => 'string', //- отчество
			'lastName' => 'string', //- фамилия
			'rank' => 'string', //- ранг (роль)
			'sex' => 'string', //- пол
			'dateBirth' => 'date', //- дата рождения
			'position' => 'string', //- должность
			'detachment' => 'string', //- отряд
			'class' => 'string', //- класс
			'nationality' => 'string', //- национальность
			'citizenship' => 'string', //- гражданство
			'credo' => 'string', //- кредо
			'color' => 'string', //- любимый цвет 
			'cuisine' => 'string', //- любимая кухня
			'movie' => 'string', //- любимое кино
			'literature' => 'string', //- любимый литературный жанр
			'music' => 'string', //- любимое муз направление
			'song' => 'string', //- любимая песня
			'picture' => 'string', //- любимый жанр изобраз искусст
			'animal' => 'string', //- домашнее животное
			'totem' => 'string', //- кем бы я был, если не чел.
			'idol' => 'string', //- кумир
			'created_at' => 'string', // - дата создания записи
			'updated_at' => 'string' // - дата обновнения записи
		];
	}

}