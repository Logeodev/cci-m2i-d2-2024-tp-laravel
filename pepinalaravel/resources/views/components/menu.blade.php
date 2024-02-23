<navbar>
    <?php
    $menu = [
        [
            'routeName' => 'index',
            'label' => 'Accueil'
        ],
        [
            'routeName' => 'create',
            'label' => 'Ajouter un associé'
        ],
        [
            'routeName' => 'admin',
            'label' => 'Administration'
        ]
    ];
    ?>
    <ul>
        @foreach ($menu as $link)
            <a href="{{ route($link['routeName']) }}">{{ $link['label'] }}</a>
        @endforeach
    </ul>
</navbar>
