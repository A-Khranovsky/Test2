<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Test for Andersen</title>
</head>
<body>
<h1></h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-8 col-sm-4 offset-md-4">
            <form method="post" action="/sendMessage">
                @csrf
                <div class="mb-3">
                    <label for="InputName" class="form-label">Name</label>
                    <input name="name" id="InputName" class="form-control" type="text"
                           aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInputEmail" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInputEmail"
                           placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextareaMessage" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="exampleFormControlTextareaMessage"
                              rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Send</button>
            </form>
        </div>
        <div class="col-8 col-sm-6 offset-md-3">
            <hr>
        </div>
        <div class="col-8 col-sm-6 offset-md-3">
            @yield('content')
        </div>
    </div>

</div>
</body>
</html>
