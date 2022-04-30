<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" conetnt="width=device-width, initial-scale=1.0">
        <title>Ingredient Manager</title>
    </head> 

    <body>
        
                <button><a href="{{ route('ingredients.index') }}">Ingredient Manager</a></button>
                <button><a href="{{ route('ingredients.create') }}">Add New Ingredient</a></button>

            
            @yield('content')
    </body>
</html>