<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME').'-Acceuil' }}</title>
    </head>
    <body>
        @include('components.menu')
        @include('components.formErrors')
        @yield('content')
    </body>
</html>
