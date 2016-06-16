<!DOCTYPE html>
<html>
<head>
    
    <link href="/css/style.css" rel="stylesheet">
    <title>Draw a random Card</title>

</head>
<body>
        <p>You can log into the application through this link, login doesn't really affect anything but the database properly logs in the user and encrypts the database <a href="/auth/login">login</a> </p>
        <br>
    <div>
    <button>
        Logout
        <?php Auth::logout(); ?>
    </button>
    </div>
    <h3>You can see all the cards by going to <a href="/cards" target="_blank">/cards</a></h3>
    <div>
    <center>
        
        <h1> Click the button to draw a random card</h1>
            <a href="{{action('CardsController@randomCard')}}">
            <button>
                Random Card
            </button>

            </a>
        </a>
                <script>
                    function reloadPage() {
                        location.reload();
                    }
                </script>
        

        <h2>{{$card->name}}</h2>
        <img style="height:350px" class="card" src="{{'img/card_deck/' . $card->img_url}}">
    </center>




    </div>


</body>
</html>
