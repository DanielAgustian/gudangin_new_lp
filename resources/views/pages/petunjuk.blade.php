@extends('master')

@section('content')
    <section class="fitur__hero">
        <div class="container">
            <div class="inner__container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Petunjuk penggunaan gudangin</h2>
                        <h6>Beberapa hal ini yang harus kamu pahami sebelum menggunakan gudangin
                        </h6>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1636602785">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1636602786">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1636602787">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="guide__wrapper">
        <div class="container">
            <nav id="navbar-example3" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#item-1">Item 1</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
                        <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
                    </nav>
                    <a class="nav-link" href="#item-2">Item2</a>
                    <a class="nav-link" href="#item-3">Item3</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
                        <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
                    </nav>
                </nav>
            </nav>

            <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
                <h4 id="item-1">Item 1</h4>
                <p>...</p>
                <h5 id="item-1-1">Item 1-1</h5>
                <p>...</p>
                <h5 id="item-1-2">Item 2-2</h5>
                <p>...</p>
                <h4 id="item-2">Item 2</h4>
                <p>...</p>
                <h4 id="item-3">Item 3</h4>
                <p>...</p>
                <h5 id="item-3-1">Item 3-1</h5>
                <p>...</p>
                <h5 id="item-3-2">Item 3-2</h5>
                <p>...</p>
            </div>
        </div>
    </section>



@endsection


@section('pageJS')
    <script>
        $('body').scrollspy({
            target: '#navbar-example3'
        })
    </script>
@endsection
