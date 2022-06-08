<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        img{
            width: 100%;
        }
        nav{
            display: flex;
            justify-content: center;
            column-gap: 1rem;
            background-color: black;
            padding: 1.5rem 0;
        }
        nav > a{
            color: white;
            text-decoration: none;
        }
        main{
            height: calc(100vh - 132px);
            background-color: paleturquoise;
            overflow-y: auto;
        }
        .jumbotron{
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: palegreen;
            color: red;
        }
        .jumbotron > h1{
            font-size: 50px;
        }
        .jumbotron > p{
            font-size: 30px;
        }
        .container{
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 0;
            overflow-y: auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .col-3{
            width: calc(100% / 3 - 0.5rem);
        }
        .card{
            border: 1px solid palegreen;
            box-shadow: 0 0 10px palegreen;
            background-color: white;
        }
        .card-body{
            text-align: center;
            padding: 1rem;
        }
        footer{
            padding: 1.5rem 0;
            text-align: center;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav class="nav">
        <a href="/">Home</a>
          <a href="/second">2nd Page</a>
          <a href="/third">3nd Page</a>
        </nav>
    </header>
    <main>
        <div class="jumbotron">
            <h1>2ND PAGE</h1>
            <p>Benvenuto nella seconda pagina</p>
            <p>Qui sotto offriamo alcuni corsi</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-3">
                    <div class="card">
                        <img src="{{$course['img']}}" alt="{{$course['title']}}">
                        <div class="card-body">
                            <h3>{{$course['title']}}</h3>
                            <p>€ {{$course['price']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <h4>Copyright &copy; Saba Alessandro</h4>
    </footer>
</body>
</html>
