<!DOCTYPE html>
<html>
<head>
	<title>cards</title>
</head>
<body>

	<center>
	<h1>Cards</h1>
	<link href="/css/style.css" rel="stylesheet">

		
		@foreach($cards as $card)
			<div class="card">
				<h2>{{$card->name}}</h2>
				<img src="{{'img/card_deck/' . $card->img_url}}">
			</div>
		@endforeach
	</center>

</body>

</html>
