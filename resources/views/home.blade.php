<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel!</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="https://logowik.com/content/uploads/images/laravel8530.jpg" alt="laravel"
                        class="img-fluid" style="width: 25%">
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>{{ $hello }}</h1>
                </div>
                <div class="col-12 mt-3 d-flex gap-4 justify-content-center">
                    <a href="{{ route('whatsnew') }}" class="btn btn-success">What's new</a>
                    <a href="{{ route('download') }}" class="btn btn-warning">Getting Started</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
