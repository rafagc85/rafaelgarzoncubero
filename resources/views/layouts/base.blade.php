<!doctype html>
<html lang="en">
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147254651-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-147254651-1');
  </script>



     <!--  style  -->
    <style>

   .textimportant {
      color: #f28900;
    }

    #footer {
          background-color: #343a40;   
     }

    #footer a {
      color: white;
    } 

  

    #content{
      height: 800px;
    }

  
    
   </style>

   <!--  /style  -->  

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    
  <!--  Header -->
 
<nav id="header"  class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">RG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link textimportant"  href="/curriculum">Currículum Vitae</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" tabindex="-1" href="http://stack-space.blogspot.com/" target="_blank" >Blog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link textimportant" href="/programas" >Programas</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/contacto">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
<!--  /Header -->

<!-- Content -->

<div id="content"  style="width: 100%; height: 100%; background: grey; padding: 25px 50px 75px 100px; min-height: 800px;" >

       @yield('contenido')

</div>
   <!--  /Contentr -->

  <!--  /footer-->

  <footer id="footer" class="pb-4 pt-4">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-lg">
        <a title="Infojobs" href="https://www.infojobs.net/rafael-garzon-cubero-1.prf" target="_blank"><img src="{{asset('media/image/logo_infojobs.png') }}" alt="logo_infojobs" width="50px"/></a>
        <a title="GitHub" href="https://github.com/rafagc85/" target="_blank"><img src="{{asset('media/image/logo_github.png') }}" alt="logo_github" width="40px"/></a>
        <a title="Platzi" href="https://platzi.com/@rafagc85/" target="_blank"><img src="{{asset('media/image/logo_platzi.png') }}" alt="logo_platzi" width="30px"/></a>
        </div>

      </div>
    </div>
  </footer> 
 <!--  /footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>

  <script type="text/javascript" id="cookieinfo"
  src="//cookieinfoscript.com/js/cookieinfo.min.js">
  </script>

</html>


