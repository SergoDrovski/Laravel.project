@extends('news.layouts.app')

@section('title')
    @parent Новость
@endsection

@section('breadCrumbs')
    @parent
    <ul class="nav nav-fill mx-auto breadc pb-3">
        <li class="nav-item">
            <a class="nav-link active" href="/news">Главная</a>
        </li>
        <li><img src="/assets/images/star-shape.png" class="mt-2" alt=""></li>
        <li class="nav-item">
            <a class="nav-link" href="#">Статья</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container-fluid ar-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pr-5">
                    <div class="card ar-img-over">
                        <img class="card-img" src="/assets/images/article-banner.png" alt="">
                        <div class="card-img-overlay">
                            <a href="#" class="d-flex align-items-center justify-content-center"><img
                                    src="/assets/images/full-screen.png" alt=""></a>
                        </div>
                    </div>
                    <div class="row date-time mt-3">

                        <div class="col text-white">
                            <a href="#"> <i class="fas fa-retweet"></i> Поделиться</a>
                        </div>
                        <div class="col text-right"><a href="#"> {{ $article['date'] }} <i
                                    class="far fa-comments"></i></a></div>
                    </div>

                    <h2>{{ $article['title'] }}</h2>
                    <p>{{ $article['description'] }}</p>

                    <div class="media my-5">
                        <div class="q-box d-flex align-items-center justify-content-center"><img
                                src="/assets/images/quote.png" alt=""></div>
                        <div class="bbg media-body">
                            <h5 class="mb-0">{{ $article['description'] }}</h5>

                        </div>
                    </div>

                    <p>
                        {{ $article['description'] }} </p>

                    <p> {{ $article['description'] }}</p>
                    <h2 class="text-center fs-35 mt-5 pt-5 mb-0 pb-2">Похожие статьи</h2>
                    <hr class="mt-0 pt-0" />

                    <div class="row">
                        <div class="col-md-6">
                            <img src="/assets/images/ar-left.png" class="w-100" alt="">
                            <p class="img-tag text-center">LIFESTYLE</p>
                            <hr class="mt-0" />
                            <h3 class="text-center">Inside a Surf Champion’s World</h3>

                            <ul class="nav nav-fill mx-auto pb-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">By John Doe</a>
                                </li>
                                <li><span>.</span></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">10 Oct 2016</a>
                                </li>
                                <li><span>.</span></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">12 Comments</a>
                                </li>


                            </ul>
                            <p class="second-clr text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                In laoreet, enim nec venenatis luctus, lectus dolor accumsan magna, non rhoncus.</p>

                            <a href="#" class="btn text-uppercase text-center mx-auto">Read More</a>

                        </div>
                        <div class="col-md-6 mt-md-4">
                            <img src="/assets/images/ar-right.png" class="w-100" alt="">
                            <p class="img-tag text-center">FASHION</p>
                            <hr class="mt-0" />
                            <h3 class="text-center">10 Places in France Every
                                Woman Should Go</h3>

                            <ul class="nav nav-fill mx-auto pb-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">By John Doe</a>
                                </li>
                                <li><span>.</span></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">10 Oct 2016</a>
                                </li>
                                <li><span>.</span></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">12 Comments</a>
                                </li>


                            </ul>
                            <p class="second-clr text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                In laoreet, enim nec venenatis luctus, lectus dolor accumsan magna, non rhoncus.</p>

                            <a href="#" class="btn text-uppercase text-center mx-auto">Read More</a>
                        </div>
                    </div>
                    <div class="comment-section mt-5">
                        <h3>3 Comments</h3>
                        <hr class="ml-0" />
                        <div class="media pt-5">
                            <div class="card mr-4">
                                <img src="/assets/images/comment-user1.png" alt="" class="card-img">
                                <div class="card-img-overlay">

                                </div>
                            </div>

                            <div class="media-body">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>John Deo</h4>
                                    </div>
                                    <div class="col text-right">
                                        <p class="my-0"><span>Add 11 Oct 2016</span> <a href="#" class="ml-3">Reply</a>
                                        </p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla massa et
                                    tristique convallis. Class aptent taciti sociosqu ad litora torquent per conubia
                                    nostra, per inceptos himenaeos. Suspendisse orci sem, ultrices sit amet cursus
                                    vitae, fermentum nec turpis.</p>
                                <div class="media py-5 mt-5 both-border">
                                    <div class="card mr-4">
                                        <img src="/assets/images/comment-user2.png" alt="" class="card-img">
                                        <div class="card-img-overlay">

                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col text-left">
                                                <h4>Jen Smith</h4>
                                            </div>
                                            <div class="col text-right">
                                                <p class="my-0"><span>Add 11 Oct 2016</span> <a href="#"
                                                                                                class="ml-3">Reply</a></p>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla
                                            massa et tristique convallis. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos. Suspendisse orci sem,
                                            ultrices sit amet cursus vitae, fermentum nec turpis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="media py-5 bottom-border">
                            <div class="card mr-4">
                                <img src="/assets/images/comment-user3.png" alt="" class="card-img">
                                <div class="card-img-overlay">

                                </div>
                            </div>

                            <div class="media-body">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>John Deo</h4>
                                    </div>
                                    <div class="col text-right">
                                        <p class="my-0"><span>Add 11 Oct 2016</span> <a href="#" class="ml-3">Reply</a>
                                        </p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla massa et
                                    tristique convallis. Class aptent taciti sociosqu ad litora torquent per conubia
                                    nostra, per inceptos himenaeos. Suspendisse orci sem, ultrices sit amet cursus
                                    vitae, fermentum nec turpis.</p>

                            </div>
                        </div>


                    </div>
                    <div class="comment-form my-5 pt-5">
                        <h3>Add Comments</h3>
                        <hr class="ml-0" />
                        <hr class="s-br" />
                        <table class="table table-borderless mt-4">
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Name" /></td>
                                <td><input type="email" class="form-control" placeholder="Email" /> </td>
                                <td><input type="url" class="form-control" placeholder="Website" /> </td>
                            </tr>
                            <tr>
                                <td colspan="3"><textarea class="form-control" placeholder="Your comment"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><button class="btn text-uppercase ml-auto d-block">Add Comment</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-lg-3 pl-0">
                    <div class="sidebar">
                        <h3 class="text-center text-white">Top Authors</h3>
                        <hr class="bg-white" />

                        <div class="owl-carousel owl-carousel4 owl-theme">
                            <div>
                                <div class="card pb-5"> <img class="card-img link-img rounded"
                                                             src="/assets/images/carlla-willstons.jpg" alt="">
                                </div>
                                <h3 class="text-center mt-3 mb-0">Carlla Willstons</h3>
                                <p class="text-center mt-1 third-clr">Reporter</p>
                            </div>

                            <div>
                                <div class="card pb-5"> <img class="card-img link-img rounded"
                                                             src="/assets/images/carlla-willstons.jpg" alt="">
                                </div>
                                <h3 class="text-center mt-3 mb-0">Carlla Willstons</h3>
                                <p class="text-center mt-1 third-clr">Reporter</p>
                            </div>

                            <div>
                                <div class="card pb-5"> <img class="card-img link-img rounded"
                                                             src="/assets/images/carlla-willstons.jpg" alt="">
                                </div>
                                <h3 class="text-center mt-3 mb-0">Carlla Willstons</h3>
                                <p class="text-center mt-1 third-clr">Reporter</p>
                            </div>

                            <div>
                                <div class="card pb-5"> <img class="card-img link-img rounded"
                                                             src="/assets/images/carlla-willstons.jpg" alt="">
                                </div>
                                <h3 class="text-center mt-3 mb-0">Carlla Willstons</h3>
                                <p class="text-center mt-1 third-clr">Reporter</p>
                            </div>
                        </div>


                        <div class="owl-carousel bg-gray owl-carousel5 owl-theme my-5 pb-5">
                            <div>
                                <div class="card bg-gray">
                                    <h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
                                    <hr class="mx-auto" />
                                    <p class="text-center mt-1">To take a trivial example, which of us ever undertakes
                                        laborious physical exercise, some advantage from it? </p>
                                    <p class="text-center my-1"><span>14 minutes ago</span></p>
                                </div>

                            </div>
                            <div>
                                <div class="card bg-gray">
                                    <h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
                                    <hr class="mx-auto" />
                                    <p class="text-center mt-1">To take a trivial example, which of us ever undertakes
                                        laborious physical exercise, some advantage from it? </p>
                                    <p class="text-center my-1"><span>14 minutes ago</span></p>
                                </div>

                            </div>
                            <div>
                                <div class="card bg-gray">
                                    <h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
                                    <hr class="mx-auto" />
                                    <p class="text-center mt-1">To take a trivial example, which of us ever undertakes
                                        laborious physical exercise, some advantage from it? </p>
                                    <p class="text-center my-1"><span>14 minutes ago</span></p>
                                </div>

                            </div>
                            <div>
                                <div class="card bg-gray">
                                    <h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
                                    <hr class="mx-auto" />
                                    <p class="text-center mt-1">To take a trivial example, which of us ever undertakes
                                        laborious physical exercise, some advantage from it? </p>
                                    <p class="text-center my-1"><span>14 minutes ago</span></p>
                                </div>

                            </div>


                        </div>

                        <h3 class="text-center">Follow Us</h3>
                        <hr class="mx-auto" />
                        <nav class="nav nav-fill mx-auto mb-5">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/js/article.js"></script>
@endpush
