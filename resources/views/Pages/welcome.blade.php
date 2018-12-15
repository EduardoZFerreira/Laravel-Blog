@extends('main')

@section('title', ' | Homepage')

@section('content')
    <!-- Content start -->

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
            <h1 class="display-4">Welcome!</h1>
            <p class="lead"> We hope you enjoy our content!  </p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="#" role="button"> Popular posts </a>
            </div>
        </div>
    </div>
    <!-- End header -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum</p>
                <a href="" class="btn btn-primary"> Read More </a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum</p>
                <a href="" class="btn btn-primary"> Read More </a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum</p>
                <a href="" class="btn btn-primary"> Read More </a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum</p>
                <a href="" class="btn btn-primary"> Read More </a>
            </div>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2> Sidebar </h2>
        </div>
    </div>
@endsection
