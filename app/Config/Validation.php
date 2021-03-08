<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'first_name' => [
			'rules' => 'required',
		],
		'last_name' => [
			'rules' => 'required',
		],
		'e_mail' => [
			'rules' => 'required',
		],
		'phone_number' => [
			'rules' => 'required',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]'
		],
	];

	public $register_errors = [
		'username' => [
			'required' => 'Username Harus Diisi',
			'min_length' => 'Username Minimal 5 karakter',
		],
		'first_name' => [
			'required' => 'First name Harus Diisi',
		],
		'last_name' => [
			'required' => 'Last name Harus Diisi',
		],
		'e_mail' => [
			'required' => 'Email Harus Diisi',
		],
		'phone_number' => [
			'required' => 'Phone Number Harus Diisi',
		],
		'password' => [
			'required' => 'Password Harus Diisi',
		],
		'repeatPassword' => [
			'required' => 'Repeat Password Harus Diisi',
			'matches' => 'Repeat Password Password tidak sama'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => 'Username Harus Diisi',
			'min_length' => 'Username Minimal 5 karakter',
		],
		'password' => [
			'required' => 'Password Harus Diisi',
		],
	];
}
