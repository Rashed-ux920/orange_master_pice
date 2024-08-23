<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <title>{{config('app.name')}}</title>
</head>
<body>



    {{-- start header  --}}

    <header>
        <div class="logo">
            <a href="#">{{config('app.name')}}</a>
        </div>
        <div class="search">
            <form action="#" method="post">
                <input type="search" name="search" id="search">
            </form>
        </div>
        <div class="navbar">
            <nav>
                <a href="#home" class="links">home</a>
                <a href="#sevices" class="links">sevices</a>
                <a href="#about" class="links">about</a>
                <a href="#contact" class="links">contact</a>
            </nav>
        </div>
        <div class="getin">
            <a href="#" id="signin">signin</a>
            <a href="#" id="login">login</a>
        </div>

    </header>

    {{-- end header  --}}
    <hr>








    {{-- start footer  --}}

    <footer>
        <div class="card">
            <div class="card-title">
                <h3>
                    socialmedia
                </h3>
            </div>
            <div class="card-body">
                <ul>
                    <li><a href="#" class="links">facebook</a></li>
                    <li><a href="#" class="links">snapchat</a></li>
                    <li><a href="#" class="links">youtube</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                <h3>
                    partners
                </h3>
            </div>
            <div class="card-body">
                <ul>
                    <li><a href="#" class="links">meta</a></li>
                    <li><a href="#" class="links">microsoft</a></li>
                    <li><a href="#" class="links">jordan goverent</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                <h3>
                    partners
                </h3>
            </div>
            <div class="card-body">
                <ul>
                    <li><a href="#" class="links">meta</a></li>
                    <li><a href="#" class="links">microsoft</a></li>
                    <li><a href="#" class="links">jordan goverent</a></li>
                </ul>
            </div>
        </div>
    </footer>

    {{-- end footer  --}}


</body>
</html>
