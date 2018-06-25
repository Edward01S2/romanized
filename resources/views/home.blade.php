<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Et II Roman</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <section class="hero is-fullheight is-dark is-bold">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <h1 class="has-text-weight-bold is-size-3">ET II ROMAN</h1>
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                    <span></span>
                    <span></span>
                    <span></span>
                    </span>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                    <a href="http://edwardindustries.com/" class="navbar-item">
                        Edward Shannon
                    </a>
                    <a href="https://github.com/Edward01S2" class="navbar-item">
                        Github
                    </a>
                    <a href="https://www.linkedin.com/in/patrickeshannon/" class="navbar-item">
                        LinkedIn
                    </a>
                    </div>
                </div>
                </div>
            </nav>
            </div>
        
            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                Convert a # to Roman numeral.
                </h1>
                <form method="POST" action="/convert">
                    @csrf
                    <div id="example"></div>
                </form>

            </div>
            </div>
        
            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot"></div>
        </section>

        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>
