@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

      <!-- Masthead-->
      <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">ReadersVibe Bookstore</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome to the ReadersVibe Bookstore, where you will find loads of books with low prices. Register for a free account and gain full access to ReadersVibe Bookstore. Also don't forget to look out for the sales!</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="/categories">Browse</a>
                </div>
            </div>
        </header>

       
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-6 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bbb1.jpg" alt="" /></div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="featured-text text-center text-lg-left">
                        <img class="img-fluid mb-3 mb-lg-0" src="assets/img/ccc1.jpg" alt="" />
                        </div>
                    </div>
                </div>
                </br></br></br></br></br></br></br></br></br>
                
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/harry1.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Harry Potter Book series</h4>
                                    <p class="mb-0 text-white-50">The entire harry potter book series available here! With the best price.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/fault2.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">The fault in our stars</h4>
                                    <p class="mb-0 text-white-50">Enjoy this young adult novel with just a small price</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
