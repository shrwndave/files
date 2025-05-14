<div class="container">
    <a class="navbar-brand nav-hover color-white cursive" href="../pages/home.php">About Website</a>
    <!---------------------Sidebar Button----------------------->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="fa fa-bars color-white"></span>
    </button>
    <!------------------End of Sidebar Button------------------->
    
    <div class="offcanvas offcanvas-end bg-black" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title color-white" id="offcanvasNavbarLabel">About Website - <?php echo ucwords($location) ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-black">

        <!---------------------Navigations-------------------------->
        <ul class="navbar-nav marginleft-38px justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link nav-hover color-white <?php echo ($this->page == 'Home') ? 'nav-active' : ''; ?>" href="../pages/home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-hover color-white <?php echo ($this->page == 'About') ? 'nav-active' : ''; ?>" href="../pages/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-hover color-white <?php echo ($this->page == 'Contact') ? 'nav-active' : ''; ?>" href="../pages/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-hover color-white <?php echo ($this->page == 'account') ? 'nav-active' : ''; ?>" href="../pages/account.php">Accounts</a>
            </li>
          <li class="nav-item dropdown">
            <button class="nav-link" data-bs-toggle="dropdown" aria-expanded="true">
                <p class="color-white nav-hover">Others <span class="dropdown-toggle"></span></p>
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../pages/validate.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
              <input class="form-control me-2 hide" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success hide" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
