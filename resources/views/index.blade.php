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
                    <label>Nama : </label> <input type="text" name="nama" />
                    <button class="btn btn-primary" type="submit">Create</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table py-3">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Angka Fibonacci</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- LOGIC HERE -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
