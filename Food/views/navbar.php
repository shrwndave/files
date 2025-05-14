<?php
function renderNavbar($currentPage) {
    $menuItems = [
        'Home' => '../views/Home.php',
        'Menu' => '../views/Menu.php',
        'About' => '../views/About.php',
        'Contact' => '../views/Contact.php',
    ];

    echo '<nav class="navbar navbar-expand-sm" id="navbar">';
    echo '<a href="index.php" class="navbar-brand" id="logo"><img src="../images/logo.png" alt=""></a>';
    echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">';
    echo '<span><i class="fa-solid fa-bars"></i></span>';
    echo '</button>';
    echo '<div class="collapse navbar-collapse" id="mynavbar">';
    echo '<ul class="navbar-nav me-auto">';

    foreach ($menuItems as $name => $link) {
        $activeClass = ($currentPage === $link) ? 'active' : '';
        echo "<li class='nav-item'>";
        echo "<a href='$link' class='nav-link $activeClass'>$name</a>";
        echo '</li>';
    }

   

    echo '</li>';

    echo '</ul>';
    echo '<form class="d-flex">';
    echo '<input type="text" class="form-control me-2" placeholder="Search" required>';
    echo '<button type="button" id="btn">Search</button>';
    echo '</form>';
    echo '</div>';
    echo '</nav>';






}
?>
