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
        <h1 class="text-center my-4">Words</h1>
        <div class="col-6 mx-auto">
            <table class="table">
		<thead>
		    <tr>
                        <td>Word</td>
		        <td>Created_at</td>
                        <td>Option</td>
                   </tr>
		</thead>
		<tbody>
		    @foreach($words as $word)
			<tr>
                            <td>{{ $word->content }}</td>
			    <td>{{ $word->created_at }}</td>
                            <td>
				<form action={{ route('delete', ['id' => $word->id]) }} method="POST">
				    @csrf
				    @method('delete')
				    <button type="submit" class="btn btn-danger">Delete</button>
				</form>
			    </td>
			</tr>
		    @endforeach
		</tbody>
	    </table>
	    <div class="text-center">
	        <a href="{{ route('form') }}" class="btn btn-primary">Create Word</a>
	    </div>
        </div>
    </body>
</html>
