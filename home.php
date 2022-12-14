<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
  <script src="components/loader.js"></script>
  <script src="lib/onsenui/js/onsenui.min.js"></script>

  <link rel="stylesheet" href="components/loader.css">
  <link rel="stylesheet" href="home.css">

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
      function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }

      function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</head>
<body>
    <header>
        <span style="color:white;padding:0;font-size:40px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        <h1>Meus OvO</h1>
        <button onclick="window.location.href='index.php'"><ion-icon href="#" name="person-outline" size="large"></ion-icon></button>
    </header>
    <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Novidades</a>
            <a href="#">Categorias</a>
            <a href="#">Minhas Compras</a>
            <a href="#">Contato</a>
    </div>
    <section class="sec1">
        <div style="width:75%;height:25vh;">
            <h1>aproveite meus ovos!</h1>
            <h2>Veja o nosso catálogo de ovos e encomende a quantidade que você quiser.</h2>
        </div>
    </section>
    <section class="sec2">
        <a href="ovo-branco.html" class="card-a">
        <div class="card">
            <img src="/images/ovo-branco.png" alt="ovo-branco">
            <div class="container">
                <h4><b>Ovo Branco</b></h4> 
                <a class="btn-verprodutos" href="ovo-branco.html">Ver produtos</a>
            </div>
        </div>
        </a>
        <a href="ovo-caipira.html" class="card-a">
            <div class="card">
                <img src="/images/ovo-caipira.png" alt="ovo-caipira" style="width: 80%;">
                <div class="container">
                    <h4><b>Ovo Caipira</b></h4> 
                    <a class="btn-verprodutos" href="ovo-caipira.html">Ver produtos</a>
                </div>
            </div>
        </a>
    </section>
    <section class="sec2">
        <a href="ovo-cage-free.html" class="card-a">
        <div class="card">
            <img src="/images/ovo-cage-free.png" alt="ovo-cage-free">
            <div class="container">
                <h4><b>Ovo Cage Free</b></h4> 
                <a href="ovo-cage-free.html" class="btn-verprodutos">Ver produtos</a>
            </div>
        </div>
        </a>
        <a href="ovo-organico" class="card-a">
        <div class="card">
            <img src="/images/ovo-organico.png" alt="ovo-organico">
            <div class="container">
                <h4><b>Ovo Orgânico</b></h4> 
                <a href="ovo-organico.html" class="btn-verprodutos">Ver produtos</a>
            </div>
        </div>
        </a>
    </section>
    <section class="sec2">
        <a href="ovo-jumbo.html" class="card-a">
        <div class="card">
            <img src="/images/ovo-jumbo.png" alt="ovo-jumbo">
            <div class="container">
                <h4><b>Ovo Jumbo</b></h4>
                <a href="ovo-jumbo.html" class="btn-verprodutos">Ver produtos</a>
            </div>
        </div>
        </a>
        <a href="ovo-chocolate" class="card-a">
        <div class="card">
            <img src="/images/ovo-chocolate.png" alt="ovo-chocolate">
            <div class="container">
                <h4><b>Ovos de Chocolate</b></h4>
                <a href="ovo-chocolate.html" class="btn-verprodutos">Ver produtos</a>
            </div>
        </div>
        </a>
    </section>
</body>
</html>
