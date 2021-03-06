
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

        <title>Rating</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('dashboard')}}">Navbar</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard')}}">Home
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a
                                class="nav-link"
                                href="logout"
                                onclick="event.preventDefault();
            this.closest('form').submit();">Logout</a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-4" style="margin-top: 20px; text-align: center;">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$service->service_name}}</h5>
                          <p class="card-text">{{$service->description}}</p>
                          @if($service->avg_rating>0)
                          <h2 class="card-title">Average Rating</h2>
                          @for ($i=0;$i<$service->avg_rating;$i++)
                          <label for="rating{{$i}}" class="fa fa-star" style="color: red;"></label>
                          @endfor
                          @else
                          <h2 class="card-title">Not Rated Yet. PLease rate</h2>
                          @endif
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>
