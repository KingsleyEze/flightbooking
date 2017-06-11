<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookingRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'from' => 'required|min:3' ,
            'to' => 'required|min:3',
            'mode' => 'required',
            'depart' => 'required',
            'first' => 'required',
            'last' => 'required',
            'mobile' => 'required',
            'email' => 'required|email'
		];
	}

}
