<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software developers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <link rel="stylesheet" href="/css/navbar.css">

</head>
<body>
    
        <div class="head" id="app">
            <nav class="navbar navbar-expand-lg ">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/what-we-do" class="nav-link">What we do?</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Who we are?</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Courses</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <div class="container">
        <div class="content">
            <div class="section">
                <section>
                    @yield('context')
                </section>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/app.js')}}"></script>

</body>
</html>