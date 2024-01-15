<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHINMAKatanungan</title>
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css')}}">
    <script type="text/javascript" href="{{ URL::to('js/script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<style>
    .btn {
        outline: solid 1px #3A4F24;
    }

    .btn-join:hover {
        background-color: #C4B139;
    }

    .btn:hover {
        color: #fff;
        background-color: #3A4F24;
    }

    .signup {
        outline: solid 1px #C4B139;
    }

    .sign-up:hover {
        background-color: #C4B139;
        outline: none;
    }
</style>

<body>

    <!--============= NAVBAR SECTION =============-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body rounded">
            <div class="container-fluid">
                <img src="{{ url('storage/images/phinma-logo.png') }}" style="width: 50px;"><a class="navbar-brand ms-3" href="#"><span style="font-weight: 700; font-family: 'Oswald', sans-serif;">PHINMA</span><span class="katanungan">Katanungan</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quotes">Quotes</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-auto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Topics</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#about">Features</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#quotes">Quotes</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn ms-2" type="submit">Login</button>
                        <button class="btn sign-up ms-3" type="submit">Signup</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <!--============= BANNER SECTION =============-->
    <section id="banner">
        <div class="container text-center">
            <img src="{{ url('storage/images/cite-logo.png') }}" style="width: 90px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-auto mb-4">
                    <h1><span style="font-weight: 700; font-family: 'Oswald', sans-serif;">PHINMA</span><span class=" katanungan">Katanungan</span></h1>
                    <p class="home-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officiis nobis deleniti neque modi eius, alias, iusto qui earum hic perferendis repellendus laborum voluptate, amet quod saepe cum. Accusamus tempore harum doloremque vero tempora dolores fugit perspiciatis, nisi nostrum sequi neque. Debitis, officiis tenetur minima velit numquam aperiam voluptatum consequatur!</p>
                </div>
            </div>
        </div>
    </section>

    <!--============= ABOUT SECTION =============-->
    <section id="about">
        <div class="container text-center mt-5">
            <h1 style="color: #C4B139; font-family: 'Oswald', sans-serif;">Features</h1>
            <div class="row text-center">
                <div class="col-md-4 about">
                    <img class="about-img" src="{{ url('storage/images/articles-nb.png') }}" style="width: 83px;">
                    <h4>Articles</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reprehenderit eligendi unde quaerat sit laborum non, ipsum molestias officiis. Incidunt aliquid dolore hic neque quasi.</p>
                </div>
                <div class="col-md-4 about">
                    <img class="about-img" src="{{ url('storage/images/search-nb.png') }}">
                    <h4>Searching</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reprehenderit eligendi unde quaerat sit laborum non, ipsum molestias officiis. Incidunt aliquid dolore hic neque quasi.</p>
                </div>
                <div class="col-md-4 about">
                    <img class="about-img" src="{{ url('storage/images/sharing-nb.png') }}">
                    <h4>Sharing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reprehenderit eligendi unde quaerat sit laborum non, ipsum molestias officiis. Incidunt aliquid dolore hic neque quasi.</p>
                </div>
            </div>
            <button type="button" class="btn btn-join" style="font-weight: 300; color: #fff;">Explore the community</button>
        </div>
    </section>

    <!--============= QUOTES SECTION =============-->
    <section id="quotes">
        <div class="container text-center mt-5">
            <h1 style="color: #C4B139; font-family: 'Oswald', sans-serif;">Quotes</h1>
            <div class="row">
                <div class="col-md-4 quotes">
                    <img class="quotes-img" src="{{ url('storage/images/quotes-img.png') }}" style="width: 50px;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis, labore doloribus aliquid molestiae non in, dolorem molestias optio perspiciatis pariatur iste debitis quaerat. Voluptatem reiciendis, repellat nam esse laboriosam porro ipsam accusamus illum fugit? Ipsum atque illo qui voluptatum, ad veniam, et soluta corporis quisquam ipsa illum. Labore minus eum maxime vero vitae explicabo quos aperiam ducimus unde quas?</p>
                </div>
                <div class="col-md-4 quotes">
                    <img class="quotes-img" src="{{ url('storage/images/quotes-img.png') }}" style="width: 50px;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis, labore doloribus aliquid molestiae non in, dolorem molestias optio perspiciatis pariatur iste debitis quaerat. Voluptatem reiciendis, repellat nam esse laboriosam porro ipsam accusamus illum fugit? Ipsum atque illo qui voluptatum, ad veniam, et soluta corporis quisquam ipsa illum. Labore minus eum maxime vero vitae explicabo quos aperiam ducimus unde quas?</p>
                </div>
                <div class="col-md-4 quotes">
                    <img class="quotes-img" src="{{ url('storage/images/quotes-img.png') }}" style="width: 50px;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis, labore doloribus aliquid molestiae non in, dolorem molestias optio perspiciatis pariatur iste debitis quaerat. Voluptatem reiciendis, repellat nam esse laboriosam porro ipsam accusamus illum fugit? Ipsum atque illo qui voluptatum, ad veniam, et soluta corporis quisquam ipsa illum. Labore minus eum maxime vero vitae explicabo quos aperiam ducimus unde quas?</p>
                </div>
            </div>
        </div>
    </section>

    <!--============= FOOTER SECTION =============-->
    <section id="footer">
        <div class="container footer-text">
            <div class="row text-center" style="font-size: 30px;">
                <div class="col-md-5 footer-box">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quotes">Quotes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quotes">Who We Are</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 footer-box">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, numquam.</p>
                </div>
            </div>
            <hr>
        </div>
        <p class="copyright">&#169; PHINMAKatanungan. All rights reserved.</p>
    </section>

    <!--============= SCROLL UP SECTION =============-->
    <section>
        <div onclick="backtoTop()">
            <a aria-label="Back to Top" class="back-to-Top" id="top">
                <img class="scrollup-img" src="{{ url('storage/images/up-arrow.png') }}">
            </a>
        </div>
    </section>

</body>

</html>