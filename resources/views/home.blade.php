<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHINMAKatanungan</title>
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;700&display=swap');

    * {
        margin: 0;
        padding: 0;
    }


    /*========== NAVBAR SECTION ==========*/
    #nav-bar {
        position: sticky;
        top: 0;
        z-index: 10;
    }


    /*========== BANNER SECTION ==========*/
    #banner {
        background-color: rgba(0, 0, 0, 0.1);
        color: #0e0e0e;
        padding: 5%;
        margin: 0px 35px 0px 35px;
    }

    .home-desc {
        font-size: 25px;
        font-weight: 300;
        margin-top: 60px;
    }

    /*========== ABOUT SECTION ==========*/
    #about {
        padding: 80px 0;
    }

    .about-img {
        width: 100px;
        margin-top: 20px;
    }

    .about {
        padding: 20px;
    }

    .about h4 {
        padding: 5px;
        margin-top: 25px;
        text-transform: uppercase;
    }

    /*========== FOOTER SECTION ==========*/
    #footer {
        background-color: rgba(0, 0, 0, 0.1);
        color: #0e0e0e;
        padding: 2.7%;
        font-size: 12px;
    }

    .footer-img {
        width: 40px;
        margin-bottom: 10px;
    }

    .copyright {
        margin-bottom: 0;
        text-align: center;
    }
</style>

<body>

    <!--============= NAVBAR SECTION =============-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body rounded">
            <div class="container-fluid">
                <img src="{{ url('storage/images/phinma-logo.png') }}" style="width: 50px;"><a class="navbar-brand ms-3" href="#">PHINMA<span class="text-success">Katanungan</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-auto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Topics</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">No idea</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">No idea</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success me-3" type="submit">Login</button>
                        <button class="btn btn-success" type="submit">Signup</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <!--============= BANNER SECTION =============-->
    <section id="banner">
        <div class="container text-center">
            <img src="{{ url('storage/images/cite-logo.png') }}" style="width: 90px; margin-top: 20px;">
            <div class="row">
                <div class="col-md-auto">
                    <p class="home-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officiis nobis deleniti neque modi eius, alias, iusto qui earum hic perferendis repellendus laborum voluptate, amet quod saepe cum. Accusamus tempore harum doloremque vero tempora dolores fugit perspiciatis, nisi nostrum sequi neque. Debitis, officiis tenetur minima velit numquam aperiam voluptatum consequatur!</p>
                </div>
            </div>
        </div>
    </section>

    <!--============= ABOUT SECTION =============-->
    <section id="about">
        <div class="container text-center">
            <h1>Features</h1>
            <div class="row text-center">
                <div class="col-md-4 about">
                    <img class="about-img" src="{{ url('storage/images/articles-img.png') }}" style="width: 83px;">
                    <h4>Articles</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reprehenderit eligendi unde quaerat sit laborum non, ipsum molestias officiis. Incidunt aliquid dolore hic neque quasi.</p>
                </div>
                <div class="col-md-4 about">
                    <img class="about-img" src="{{ url('storage/images/searching-img.png') }}">
                    <h4>Searching</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reprehenderit eligendi unde quaerat sit laborum non, ipsum molestias officiis. Incidunt aliquid dolore hic neque quasi.</p>
                </div>
                <div class="col-md-4 about">
                    <img class="about-img" src="{{ url('storage/images/sharing-img.png') }}">
                    <h4>Sharing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reprehenderit eligendi unde quaerat sit laborum non, ipsum molestias officiis. Incidunt aliquid dolore hic neque quasi.</p>
                </div>
            </div>
            <button type="button" class="btn btn-success" style="font-weight: 500;">Explore the community</button>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 footer-box">
                    <img class="footer-img" src="{{ url('storage/images/cite-logo.png') }}">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis totam excepturi qui facere architecto eligendi, quisquam commodi vero adipisci cumque, obcaecati, dolores quia perferendis reprehenderit hic! Ipsam, excepturi cum! Dignissimos et ut velit dolores autem hic exercitationem consequuntur corrupti, fuga, quos optio iure accusamus aliquid ducimus eveniet, doloribus ipsum voluptatem!</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p style="font-weight: 700;">INFORMATION</p>
                    <p><i class="fa fa-map-marker"></i>Dagupan City, Pangasinan</p>
                    <p><i class="fa fa-phone"></i>+63 9258 6475</p>
                    <p><i class="fa fa-envelope"></i>phinmakatanungan@gmail.com</p>
                    <p></i>CITE Students</p>
                    <p>PHINMAKatanungan</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p style="font-weight: 700;">TEAM</p>
                    <p>Custodio, Johann</p>
                    <p>De Guzman, Danielle Marie</p>
                    <p>Mondero, David Aldrin</p>
                    <p>Collado, Jean</p>
                    <p>Arcega, Ranier Dave</p>
                </div>
            </div>
            <hr>
            <p class="copyright">Website created by D=MAC²</p>
        </div>
    </section>
</body>

</html>