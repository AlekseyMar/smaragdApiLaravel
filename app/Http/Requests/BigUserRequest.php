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

			'big_user_id' => 'required|string', //- id
			'user_login' => 'required|string', //- идентификатор пользователя
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
			// 'phone.string' => 'Phone should be string'

			'big_user_id' => 'big_user_id required!', //- id
			'user_login' => 'big_user login required!', //- идентификатор пользователя
			'firstName' => 'should be string', //- имя
			'middleName' => 'should be string', //- отчество
			'lastName' => 'should be string', //- фамилия
			'rank' => 'should be string', //- ранг (роль)
			'sex' => 'should be string', //- пол
			'dateBirth' => 'should be date', //- дата рождения
			'position' => 'should be string', //- должность
			'detachment' => 'should be string', //- отряд
			'class' => 'should be string', //- класс
			'nationality' => 'should be string', //- национальность
			'citizenship' => 'should be string', //- гражданство
			'credo' => 'should be string', //- кредо
			'color' => 'should be string', //- любимый цвет 
			'cuisine' => 'should be string', //- любимая кухня
			'movie' => 'should be string', //- любимое кино
			'literature' => 'should be string', //- любимый литературный жанр
			'music' => 'should be string', //- любимое муз направление
			'song' => 'should be string', //- любимая песня
			'picture' => 'should be string', //- любимый жанр изобраз искусст
			'animal' => 'should be string', //- домашнее животное
			'totem' => 'should be string', //- кем бы я был, если не чел.
			'idol' => 'should be string', //- кумир
			'created_at' => 'should be string', // - дата создания записи
			'updated_at' => 'should be string' // - дата обновнения записи
		];
	}

}