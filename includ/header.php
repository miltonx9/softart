      <header class="">
        <nav class="navbar navbar-expand-lg navbar-dark row" style="background-color: #A38E17">
          <a class="navbar-brand" href="index.php">FEJJA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="?pag=includ/usuario.php">Usuário</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pag=includ/entrarusuario.php">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link 3</a>
              </li>
            </ul>
            <?php 
              if ($_SESSION['login']) {
            ?>
            <div class="form-inline my-2 my-lg-0">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#"><svg-icon><src href="sprite.svg#si-glyph-global" /></svg-icon></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><svg-icon><src href="sprite.svg#si-glyph-bubble-message" /></svg-icon></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><svg-icon><src href="sprite.svg#si-glyph-circle-help" /></svg-icon></a>
                </li>
              </ul>
            </div>
            <?php } ?>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Search">
              <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
      </header>