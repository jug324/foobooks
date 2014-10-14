@extends ('_master')

@section('title')
Text Generator
@stop

@section('content')
	<h1>Lorem Ipsum Paragraph Generator</h1>
	<form action="text" method="POST">
		<p>Number of paragraphs to generate:
			<select name="paragraphs">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
		</p>
		<input type="submit" value="Generate Text">
	</form>

	<!--<div><?php /* foreach ($paragraph as $value) echo $value; */?> </div>
	-->
@stop
