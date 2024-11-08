<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harry Potter Universum</title>
</head>
<body>
     <h2>Alle Charactere</h2>
        <ul>
            @foreach ($characters as $character)
                <li>{{ $character->name }}</li>
            @endforeach
        </ul>

    <h2>Ravenclaw Characters</h2>
    <ul>
        @foreach ($housesRavenclaw as $character)
            <li>{{ $character->name }}</li>
        @endforeach
    </ul>

    <h2>Slytherin Characters</h2>
    <ul>
        @foreach ($housesSlytherin as $character)
            <li>{{ $character->name }}</li>
        @endforeach
    </ul>

    <h2>Hufflepuff Characters</h2>
    <ul>
        @foreach ($housesHufflepuff as $character)
            <li>{{ $character->name }}</li>
        @endforeach
    </ul>

    <h2>Ravenclaw Characters</h2>
    <ul>
        @foreach ($housesGriffendor as $character)
            <li>{{ $character->name }}</li>
        @endforeach
    </ul>

    <h2>Spells</h2>
    <ul>
        @foreach ($spells as $spell)
            <li>{{ $spell->name }}</li>
        @endforeach
    </ul>
</body>
</html>