<?php

require "config.php";

use App\Pets;

try {
	Pets::register('ed', 'Male', 'march 29, 2018', 'hohn', 'hohnjendrick@gmail.com', 'Pandacaqui', '09207022289');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Jericho',
			'gender' => 'Male',
			'birthdate' => 'January 28, 2023',
			'owner' => 'John Hendrick',
			'email' => 'johnhendrick@gmail.com',
			'address' => 'Pandacaqui',
			'contact_number' => '09207022289'
		],
		[
			'name' => 'CC',
			'gender' => 'Male',
			'birthdate' => 'April 20, 2021',
			'owner' => 'John Hendrick',
			'email' => 'hendrickjohn@gmail.com',
			'address' => 'Pandacaqui',
			'contact_number' => '0920702289'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

