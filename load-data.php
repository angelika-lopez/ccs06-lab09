<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Cookie', 'Female', 'May 08, 2020', 'Angel', 'angel-cookie@gmail.com', 'Angeles City', '09123456789');
	echo "<li>Added 1 student";

	$pets = [
		[
			'name' => 'Browny',
			'gender' => 'Male',
			'birthdate' => 'February 11, 2019',
			'owner' => 'Angel',
			'email' => 'angel-browny@gmail.com',
			'address' => 'Angeles City',
			'contact_number' => '09123456789'
		],
		[
			'name' => 'Chewy',
			'gender' => 'Male',
			'birthdate' => 'December 20, 2021',
			'owner' => 'Angel',
			'email' => 'angel-chewy@gmail.com',
			'address' => 'Angeles City',
			'contact_number' => '09123456789'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

