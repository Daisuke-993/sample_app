<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="col-3 mx-auto my-4">
            <form action={{ route('store') }} method="POST" }}>
                @csrf
                <div class="form-group">
                    <label for="content">Word</label>
                    <input type="text" class="form-controll" id="content" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('index') }}" class="btn btn-secondry">Back</button>
             </form>
        </div>
    </body>
</html>
