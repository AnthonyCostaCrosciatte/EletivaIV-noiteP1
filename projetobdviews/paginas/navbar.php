<?php
    session_start();
    if (!isset($_SESSION['acesso'])) {
        header('Location: login.php');        
    }
?>

<style>

  @keyframes rgbCycle {
    0% {
        background-color: rgb(52, 58, 64); 
    }
    16.6% {
        background-color: rgb(73, 80, 87); 
    }
    33.3% {
        background-color: rgb(52, 58, 64); 
    }
    50% {
        background-color: rgb(255, 0, 255); 
    }
    66.6% {
        background-color: rgb(30, 42, 71); 
    }
    83.3% {
        background-color: rgb(33, 37, 41); 
    }
    100% {
        background-color: rgb(216, 207, 196); 
    }
  }

  .navbar {
    animation: rgbCycle 10s infinite linear; /* 'linear' para transições suaves */
    background-color: rgb(255, 0, 0); /* Red - cor inicial */
  }
</style>

<nav class="navbar navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Sistema de Compras de Produtos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <!-- Apenas visível para o administrador -->
        <?php
          if ($_SESSION['nivel'] == 'adm'):
        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuários
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="usuarios.php">Gerenciar</a></li>
            </ul>
          </li>
        <?php
          endif;
        ?>
         <!-- Fim -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="categorias.php">Gerenciar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="produtos.php">Gerenciar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Compras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="compras.php">Gerenciar</a></li>
            <li><a class="dropdown-item" href="relatorio_compras.php">Relatórios</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Seja bem-vindo(a) 
                    <?php
                      if (isset($_SESSION['usuario']))
                        echo $_SESSION['usuario'];
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="editar_usuario.php">Editar dados</a></li>
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
