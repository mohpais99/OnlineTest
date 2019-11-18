<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12 py-3">

                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <label>Name : </label> <input type="text" name="name" />
                    <button class="btn btn-primary" type="submit">Create</button>
                </form>

            </div>
        </div>
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
          </div>
        @endif
        @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
          </div>
        @endif
        <div class="row">
            <div class="col-12">
                <table class="table py-3">
                    <thead>
                        <tr>
                            <th scope="col">No. ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Parity (Odd/Even)</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->parity}}</td>
                                <td>
                                    <a href="/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td align="center" colspan="4"><h1>Tidak ada list</h1></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
