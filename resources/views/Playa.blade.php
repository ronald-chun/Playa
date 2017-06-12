<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Playa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Playa</h1>
                    </div>
                    <div class="col-md-5 nav">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>SERVICES</h5>
                            </div>
                            <div class="col-md-3">
                                <h5>PROJECTS</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>BLOG</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>CONTACT</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>中文</h5>
                            </div>
                        </div>
                </div>
            </div>
        </header>

        <section class="main">
            <div class="dimmed">
                <div class="container slogan">
                    {{-- <div class=""> --}}
                        <br>
                        <br>
                        <br>
                        <span>EXPERIENCE</span>
                        <br>
                        <span>MATTERS.</span>
                    {{-- </div> --}}
                </div>
            </div>
        </section>
        <section class="showcase">
            <div class="row">
                <div class="col-md-3  col-sm-6 col-xs-12 showcase-item" style="background-size: cover; background-image: url('https://playa.hk/content/uploads/2017/05/DC2017-Desk-En-V6-1.jpg')">
                </div>
                <div class="col-md-3  col-sm-6 col-xs-12 showcase-item" style="background-size: cover; background-image: url('https://playa.hk/content/uploads/2017/05/Portfolio-Desk-En.jpg')">
                </div>
                <div class="col-md-3  col-sm-6 col-xs-12 showcase-item" style="background-size: cover; background-image: url('https://playa.hk/content/uploads/2017/05/Travel-Moment.jpg')">
                </div>
                <div class="col-md-3  col-sm-6 col-xs-12 showcase-item" style="background-size: cover; background-image: url('https://playa.hk/content/uploads/2017/05/Colloquium-Desk-En.jpg')">
            </div>
        </section>

        <section class="banner">
            <h4>Latest Blog Post: Dreamcatcher 100K Highlights</h4>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <h1>
                            Playa
                        </h1>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="right"><b>PLAYA</b></div>
                        <div class="right">About</div>
                        <div class="right">Status</div>
                        <div class="right">Privacy Policy</div>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="right"><b>SOCIAL</b></div>
                        <div class="right">Facebook</div>
                        <div class="right">AngelList</div>
                        <div class="right">Brand</div>
                        <div class="right">StackShare</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div>T: (852) 8191 3181</div>
                        <div>E: hello@playa.hk</div>
                        <div>A: Rm A5, 4/F, Jone Mult Industrial Building,</div>
                        <div>169 Wai Yip Street, Kwun Tong, Hong Kong</div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="copyright">© 2017 Playa All Rights Reserved</div>
                    </div>
                </div>

            </div>
        </footer>
    </body>
</html>
