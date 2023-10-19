<?php
  require_once('config.php');
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="shortcut icon" href="/ConsultaNumero/views/sist/favicon.png" type="image/x-icon">
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    
    <!-- bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    
<style>
  body {
    background-color: #f6f6f6;
  }
  @media (min-width: 991.98px) {
    main {
      padding-left: 240px;
    }
    .sidebar {
      width: 100%;
      background-color: black;
    }
  }
  
  /* Sidebar LATERAL */
  .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    padding: 58px 0 0; /* Height of navbar */
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
    width: 240px;
    z-index: 600;
  }
  
  @media (max-width: 991.98px) {
    .sidebar {
      width: 100%;
      display: block;
      background-color: black;
    }
  }
  .sidebar .active {
    border-radius: 5px;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
  }
  
  .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: 0.5rem;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  }
  .material-symbols-outlined {
    font-size: 1.2rem;
  }
  .navbar-brand{
   margin-top: 5px; 
   margin-bottom: 2px; 
  }
  .linhaMenu{
    width: 40px;
    border: solid 1px #000000 ;
  }
  #spanMenu{
    margin-top: 5px;
  }
  #navbarSupportedContent{
    height: 50px;
  }
  .material-symbols-outlined{
    font-size: 1rem;
  }
  .opMenu{
    font-size: 0.9rem;
  }
  .navbar, .sidebar {
    box-shadow:none;
    border-right: solid 1px #dbdbdb ;
    border-bottom: solid 1px #dbdbdb ;

  }
</style>

</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="?pagina=">Consulta Número</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="?pagina=Home"> Home </a>
              <a class="nav-link active" href="?pagina=Servico"> Serviço</a>
              <a class="nav-link active" href="?pagina=ModeloDB">Modelo DB</a>
              <a class="nav-link active" href="?pagina=TabelaUsuario">Usuário</a>
              <a class="nav-link active" href="?pagina=Registro">Registro</a>
              
            </div>
          </div>
        </div>
      </nav> -->


<!--header Navigation-->
<header>

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- elemento a esquerda -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <a class="navbar-brand" href="#" >
          <img
            src="<?php echo $consultaTelefonePath; ?>/assests/imgs/Logotipo.png"
          
            height="50"
            alt="Logo"
            loading="lazy"
          />
        </a>
      </div>
      <!-- fim elemento a esquerda -->
      
      <!-- elemento a direita -->
      <div class="d-flex align-items-center">
        <!-- Avatar -->
        <div class="dropdown">  
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">[tipo do usuário]</a>
            </li>
            <li class="nav-item">
              <a class=" dropdown-toggle d-flex align-items-start hidden-arrow " style="margin-right: 10px;" role="button"  id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown" aria-expanded="false">
                <img
                  src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png"
                  class="rounded-circle"
                  height="35"
                  alt="user"
                  loading="lazy"
                />
              </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="perfil">Perfil</a></li>
                  <li><a class="dropdown-item" href="../views/home.php">Sair</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- fim Navbar -->

  <!-- Sidebar lateral -->
  <nav id="sidebarMenu" class=" d-lg-block sidebar  bg-white fixed-top ">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">     
        <span id="spanMenu"><strong>Menu</strong></span>
        <!-- <a
          href="?pagina=Perfil"
          class=" list-group-item-action py-2 ripple"
          aria-current="true" style="margin-left: 15px;"
        ><span class="material-symbols-outlined me-1" >
          home
          </span><span class="opMenu">Início</span>
        </a> -->
         
        <!-- <a href="?pagina=" class=" list-group-item-action py-2 mt-2 ripple" style="margin-left: 15px;" ><span class="material-symbols-outlined me-1 " >bar_chart_4_bars</span><span class="opMenu">Dashboard</span></a> -->
        
        <a href="servico" class="list-group-item-action py-2  mt-2 ripple" style="margin-left: 15px;" 
          ><span class="material-symbols-outlined me-1" >
            call</span><span class="opMenu" >Serviço</span></a
        >
        <a href="?pagina=TabelaUsuario" class="list-group-item-action py-2  mt-2 ripple" style="margin-left: 15px;" 
          ><span class="material-symbols-outlined me-1">
            data_table</span><span class="opMenu">Histórico de usuários</span></a
        >
        <a href="histLog" class="list-group-item-action py-2  mt-2 ripple" style="margin-left: 15px;" 
        ><span class="material-symbols-outlined me-1">
          data_table</span><span class="opMenu">Histórico de Logs</span></a
        >
        <a href="database" class="list-group-item-action py-2 mt-2 ripple" style="margin-left: 15px;"  >
          <span class="material-symbols-outlined me-1" >database</span><span class="opMenu" >Data base</span>
        </a>
      </div>
    </div>
  </nav>
</header>
<!--end Navigation-->

      <main id="conteudo" style="margin: 82px 60px 0px 0px;"> 
        <?php
                if ($currentPage === 'histLog') {
                    require_once "views/sist/admin/histLog.php";       

                } else if ($currentPage === 'perfil') {
                    require_once "views/sist/Perfil.php";
                    
                }else if ($currentPage === 'historico') {
                  require_once "views\sist\admin\histLog.php";
                  
                }else if ($currentPage === 'database') {
                  require_once "views\sist\admin\modeloDB.php";
                  
                }else if ($currentPage === 'servico') {
                  require_once "views\sist\servico.php";
                   
              } else {
                    require_once "controller\ErroController.php";
                }
              ?>
      </main>



</body>
</html>