@extends('layouts.about')

@section('content')
    <h1>Bronnen:</h1>
    <p>https://laravel.com/docs/6.x/requests</p>
    <p>https://laravel.com/docs/6.x/requests</p>
    <h1>Links:</h1>
    <h2>User platform -> heeft authenticatie nodig d.m.v. login => email= 'gebruiker@hotmail.com' && passwoord='123456'</h2>

    <h3>Home</h3>
    <p>get:http://127.0.0.1:8000/ -> Home met de beschikbare games en sessies, ook is er meer info over de vervoersmogelijkheden, datum en locatie</p>
    <p>get:http://127.0.0.1:8000/home -> Home met de beschikbare games en sessies, ook is er meer info over de vervoersmogelijkheden, datum en locatie</p>
    <p>get:http://127.0.0.1:8000/home/gameDetails/{id} -> Detail pagina met details van de gekozen game.</p>
    <p>get:http://127.0.0.1:8000/home/sessieDetails/{id} -> Detail pagina met details van de gekozen sessie.</p>
    <p>get:http://127.0.0.1:8000/home/about->verzameling van links en bronnen</p>


    <h3>Profiel</h3>
    <p>get:http://127.0.0.1:8000/profiel/ -> Profiel pagina waar je je gegevens kan aanpassen en je kan de game en sessies waar je aan mee doet bekijken.</p>
    <p>put:http://127.0.0.1:8000/profiel/changePassword -> Veranderd het passwoord met hashing en extra controles</p>
    <p>put:http://127.0.0.1:8000/profiel/changeProfiel -> veranderd de profiel gegevens buiten het passwoord</p>
    <p>get:http://127.0.0.1:8000/profiel/addSessie/{id} -> laat user deelnemen aan sessie</p>
    <p>get:http://127.0.0.1:8000/profiel/addGame/{id} -> laat user deelnemen aan sessie op home en add in profiel</p>
    <p>get:http://127.0.0.1:8000/profiel/addGame/{id} -> laat user deelnemen aan game op home en add in profiel</p>

    <h2>Admin platform -> heeft authenticatie nodig d.m.v. login=>email= 'gebruiker@hotmail.com' && passwoord='123456'</h2>

    <h3>Admin</h3>
    <p>get:http://127.0.0.1:8000/admin/ -> admin home</p>
    <p>get:http://127.0.0.1:8000/admin/home -> admin home</p>
    <p>get:http://127.0.0.1:8000/admin/login -> gaat naar login voor admins</p>
    <p>post:http://127.0.0.1:8000/admin/login -> gaat login uitvoeren voor admin</p>

    <h3>Sponser</h3>
    <p>get:http://127.0.0.1:8000/sponser -> krijgt pagina met alle sponser en hun tier, hier kan je het tier niveau veranderen</p>
    <p>put:http://127.0.0.1:8000/sponser -> veranderd tier van sponsers</p>

    <h3>Sessie</h3>
    <p>get:http://127.0.0.1:8000/sessie/delete/{id} -> delete sessie uit database</p>
    <p>get:http://127.0.0.1:8000/sessie/create -> gaat naar create form voor sessie</p>
    <p>post:http://127.0.0.1:8000/sessie/createPost -> voegt sessie toe aan database</p>
    <p>get:http://127.0.0.1:8000/sessie/edit/{id} -> gaat naar edit form voor sessie</p>
    <p>put:http://127.0.0.1:8000/sessie/editPost/{id} -> voert edit uit op database</p>

    <h3>game</h3>
    <p>get:http://127.0.0.1:8000/game/delete/{id} -> delete game uit database</p>
    <p>get:http://127.0.0.1:8000/game/create -> gaat naar create form voor game</p>
    <p>post:http://127.0.0.1:8000/game/createPost -> voegt game toe aan database</p>
    <p>get:http://127.0.0.1:8000/game/edit/{id} -> gaat naar edit form voor game</p>
    <p>put:http://127.0.0.1:8000/game/editPost/{id} -> voert edit uit op database</p>
@endsection
