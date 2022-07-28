<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">

        <div class="row justify-content-center g-3 mt-2">

            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-8 title">
                                    {{ $movie['title'] }}
                                </div>
                                <div class="col-4 vote">
                                    {{ $movie['vote'] }}
                                </div>
                                <div class="col-6 og-title">
                                    {{ $movie['original_title'] }}
                                </div>
                                <div class="col-6 nation">
                                    {{ $movie['nationality'] }}
                                </div>
                                <div class="col-12 release text-center">
                                    {{ $movie['date'] }}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
