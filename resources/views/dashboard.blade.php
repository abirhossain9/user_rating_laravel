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
            <a class="navbar-brand" href="#">Navbar</a>
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
                @foreach($services as $service)
                <div class="col-md-4">
                    <div class="card text-center border border-primary shadow-0 mb-2">
                        <div class="card-header">Services</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$service->service_name}}</h5>
                            <p class="card-text">
                                {{$service->description}}
                            </p>

                        </div>
                        <div class="card-footer">
                            <h4>Give your rating</h4>
                            <form action="{{route('rating.store')}}" method="POST">
                                @csrf
                                <div class="form-group" hidden="hidden">
                                    <input
                                        type="text"
                                        name="user_id"
                                        class="form-control"
                                        value="{{Auth::user()->id}}"
                                        required="required"
                                        autocomplete="off">
                                </div>
                                <div class="form-group" hidden="hidden">
                                    <input
                                        type="text"
                                        name="service_id"
                                        class="form-control"
                                        value="{{$service->id}}"
                                        required="required"
                                        autocomplete="off">
                                </div>
                                <div class="rating-css">
                                    <div class="star-icon form-group">
                                        <input
                                            type="radio"
                                            value="1"
                                            name="product_rating"
                                            checked="checked"
                                            id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                            <form action="{{route('avgRating')}}" method="POST">
                                @csrf
                                <div class="form-group" hidden="hidden">
                                    <input
                                        type="text"
                                        name="service_id"
                                        class="form-control"
                                        value="{{$service->id}}"
                                        required="required"
                                        autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-success" style="margin-top: 10px;">Average Rating</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
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
        <scrip
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>
