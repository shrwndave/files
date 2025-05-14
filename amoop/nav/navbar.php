<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">About Me</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $this->page == 'home'? 'active':'' ?>" href="../page/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $this->page == 'about'? 'active':'' ?>" href="../page/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $this->page == 'contact'? 'active':'' ?>" href="../views/contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $this->page == 'destination'? 'active':'' ?>" href="../views/destination.php">Destinations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $this->page == 'account'? 'active':'' ?>" href="../page/account.php">Account</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
