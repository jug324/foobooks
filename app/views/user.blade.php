@extends('_master')

@section('title')
Random User Generator
@stop



@section('content')
<h1>Random User Generator</h1>
	<form action="user" method="POST">
		{{ Form::token()}}
		<label for="users">Number of users to generate:</label>
			<select name="users">
				<option value="1" selected>1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
		</p>
		<input type="submit" name="submit" value="Generate Text">
	</form>
	<p><?php
	if(isset($_POST['submit']))
	{ 
	$faker = Faker\Factory::create();
	for ( $i = 1; $i <= $_POST['users']; $i++){
		echo $faker->name."<br>";
	}}
		?></p>
@stop