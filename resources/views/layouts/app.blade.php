
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <style>
        .vr-gallery hr {
            width: 90%;
            border-top: 1px solid rgba(0,0,0,.3);
        }
        .vr-gallery a {
            text-decoration: none;
        }
    </style>
    <title>
        @section('title') @show
    </title>
</head>

<body>
<header class="mt-0 pt-0">
    <div class="bg-cover clearfix pt-3">
        <h2 class="logo">Shahala</h2>
        <nav class="nav nav-fill mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/fh5co" target="_blank"><i
                        class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
            </li>
        </nav>


        <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
        <div class="ml-0 mr-0 pb-1">
            <nav class="navbar navbar-expand-md">

                <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        @foreach ($category as $item)
                            <li class="nav-item">
                                <a class="nav-link" href="/categories/{{ $item['id'] }}">{{ $item['category'] }}</a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <form action="" method="POST">
                                <div class="input-group mt-0 mx-auto" style="width:16px;">

                                    <div class="">
                                        <img src="/assets/images/search-icon.png" id="toggle-search"
                                             class="ml-2 toggle-search" alt="search icon">
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        @section('breadCrumbs') @show
    </div>

    @section('topic') @show

</header>

@yield('content', 'Нет новостей')

<div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
    <h2 class="text-center">Будте вкурсе всех событий</h2>
    <p class="text-center mt-2">Подпишитесь на нашу рассылку, чтобы получать последние новости и сообщения о мероприятиях.</p>
    <div class="input-group mt-4 mx-auto" style="max-width: 640px">
        <input type="email" class="form-control" placeholder="Ваша почта">
        <div class="">
            <button class="btn btn-success ml-2" type="submit">Подписаться</button>
        </div>
    </div>
</div>

<footer class="container-fluid pt-5">
    <div class="container">
        <h2 class="logo text-center">Shahala</h2>
        <nav class="nav nav-fill mx-auto mt-5">
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                        class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
            </li>
        </nav>
    </div>
</footer>


<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/jquery-1.12.0.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.yu2fvl.js"></script>
@stack('scripts')

</body>

</html>
