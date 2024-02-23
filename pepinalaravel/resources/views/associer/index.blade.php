<html>
<head>
    <title>{{ env('APP_NAME').'-Acceuil' }}</title>
</head>
<body>
    <navbar>
        <?php
        $menu = [
            [
                'url' => '/',
                'nom' => 'Accueil'
            ],
            [
                'url' => '/about',
                'nom' => 'A propos'
            ],
            [
                'url' => '/',
                'nom' => 'Contact'
            ]
        ];
        ?>
        <ul>
            @foreach ($menu as $link)
                <a href="{{ $link['url'] }}">{{ $link['nom'] }}</a>
            @endforeach
        </ul>
    </navbar>

    <h1>Acceuil</h1>
    <p>{{ $content ?? '' }}</p>
    <footer>

    </footer>
</body>
</html>
