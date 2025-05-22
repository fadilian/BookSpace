<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <title>HOME PAGE</title> --}}
    <style>
        h2 {
            border-bottom: 3px solid #a4a4a4;
        }

        /* #desk {
            margin: 0px 50px;
        } */


        .carousel-item img {
            width: 100%;
            height: auto;
            display: block;

        }

        .container-tittle {
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            margin: 40px 50px 0px 50px;
            background-color: #fff;
        }

        .container-desk {
            display: flex;
            gap: 50px;
            padding-right: 50px;
            padding-left: 50px;
        }

        .desk-book {
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding-top: 45px;
            width: 25%;
            margin-top: 35px;
            height: 175px;
            background-color: #fff;
            cursor: pointer;
            text-align: center;
            transition: transform 0.5s ease;
        }

        .desk-book:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
        }

        .cont-book {
            display: flex;
            gap: 20%;
            justify-content: center;
            margin-bottom: 50px;
        }

        .container-book {
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 25%;
            margin-top: 35px;
            padding: 50px;
            background-color: #fff;
            text-align: center;
        }

        .action {
            display: flex;
        }

        .button-action {
            text-Align: center;
            color: black;
            text-Decoration: none;
            padding: 5px 17px;
            margin: 0px 10px;
            border-Radius: 14px;
            border: 2px solid black;
            width: 100%;
        }

        :hover.button-action {
            background-color: #cccccc;
            color: black;
            text-decoration: none;
        }

        .button2-action {
            text-Align: center;
            color: #f4f4f4;
            text-Decoration: none;
            padding: 5px 17px;
            margin: 0px 10px;
            background-Color: #1a8068;
            border-Radius: 14px;
            border: 2px solid black;
            width: 100%;
        }

        :hover.button2-action {
            background-color: #135e4d;
            color: #f4f4f4;
            text-decoration: none;
        }

        .form-container {
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin-top: 40px;
            background-color: #fff;
            width: 100%;
            text-align: left;
        }
    </style>
</head>

<body>
    <div>
        <section id="home">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/slider1.jpg')}}" class="d-block w-100" alt="pict1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/slider2.jpg')}}" class="d-block w-100" alt="pict2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/slider3.jpg')}}" class="d-block w-100" alt="pict3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


        <section id="desk">
            <div class="container-tittle">
                <h1>DESK</h1>
            </div>
            <div class="container-desk">
                <div class="desk-book" onclick="location.href='#fiction'">
                    <img src="{{asset('assets/fiction.png')}}" alt="" width="50px">
                    <p><b>Fiction Book</b></p>
                </div>
                <div class="desk-book" onclick="location.href='#horror'">
                    <img src="{{asset('assets/horror.png')}}" alt="" width="50px">
                    <p><b>Horror Book</b></p>
                </div>
                <div class="desk-book" onclick="location.href='#science'">
                    <img src="{{asset('assets/science.png')}}" alt="" width="50px">
                    <p><b>Science Book</b></p>
                </div>
                <div class="desk-book" onclick="location.href='#selfdev'">
                    <img src="{{asset('assets/selfdev.png')}}" alt="" width="50px">
                    <p><b>Self Development Book</b></p>
                </div>
            </div>
        </section>

        <section id="books">
            <div class="container-tittle">
                <h1>BOOKS</h1>
            </div>
            <div class="container-tittle" id="fiction">
                <h2>Fiction Book</h2>
                <div class="cont-book">
                    <div class="container-book">
                        <img src="{{asset('assets/fiction1.jpg')}}" alt="" width="150px">
                        <h4><b>Romeo dan Juliet</b></h4>
                        <p>William Shakespare</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-romeo">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                    <div class="container-book">
                        <img src="{{asset('assets/fiction2.png')}}" alt="" width="150px">
                        <h4><b>Hilmy Milan</b></h4>
                        <p>Nadia Ristivani</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-hilmyMilan">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-tittle" id="horror">
                <h2>Horror Book</h2>
                <div class="cont-book">
                    <div class="container-book">
                        <img src="{{asset('assets/horror1.png')}}" alt="" width="150px">
                        <h4><b>Gua Jepang</b></h4>
                        <p>Kisah Tanah Jawa</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-guaJepang">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                    <div class="container-book">
                        <img src="{{asset('assets/horror2.png')}}" alt="" width="150px">
                        <h4><b>KKN di Desa Penari</b></h4>
                        <p>Simpleman</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-KKN">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-tittle" id="science">
                <h2>Science Book</h2>
                <div class="cont-book">
                    <div class="container-book">
                        <img src="{{asset('assets/science2.png')}}" alt="" width="150px">
                        <h4><b>Kartun Kalkulus</b></h4>
                        <p>Larry Gonick</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-kartunKalkulus">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                    <div class="container-book">
                        <img src="{{asset('assets/science1.png')}}" alt="" width="150px">
                        <h4><b>Akar</b></h4>
                        <p>Dee Lestari</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-akar">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-tittle" id="selfdev">
                <h2>Self Development Book</h2>
                <div class="cont-book">
                    <div class="container-book">
                        <img src="{{asset('assets/selfdev1.png')}}" alt="" width="150px">
                        <h4><b>The Alpha Girl's Guide</b></h4>
                        <p>Henry Manampiring</p>
                        <div class="action">
                            <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                data-target="#view-theAlpha">View</a>
                            <a href="{{ route('login') }}" class="button2-action">Take</a>
                        </div>
                    </div>
                    <div class="container-book">
                        <img src="{{asset('assets/selfdev2.png')}}" alt="" width="150px">
                        <h4><b>Filosofi Teras</b></h3>
                            <p>Henry Manampiring</p>
                            <div class="action">
                                <a href="#" wire:click="" class="button-action" data-toggle="modal"
                                    data-target="#view-filosofiTeras">View</a>
                                <a href="{{ route('login') }}" class="button2-action">Take</a>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <footer style="text-align:center;
        margin-top: 45px">
            <div>
                <h3>Any problem? Feel free to contact us:</h3>
                <div style="display:flex; align-items:center; justify-Content:center; margin-bottom: 50px;">
                    <a href="https://wa.me/+62859171641589">
                        <img src="{{asset('assets/wa.jpg')}}" alt="" width="50px"></a>
                    <h5>+62859171641589</h5>
                </div>
            </div>
            <p>BookSpace 2024 &copy; All Right Reserved.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>