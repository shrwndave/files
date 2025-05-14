<?php
function renderNavbar() {
    $links = [
        'Home' => 'index.php',
        'TouristSpot' => 'touristspot.php',
        'TulipSpot' => 'tulipspot.php',
        'Contact' => 'contact.php'
    ];

    $currentPage = basename($_SERVER['PHP_SELF']);

    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
    echo '<div class="container-fluid">';
    echo '<a class="navbar-brand" href="#">Netherlands</a>';
    echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
    echo '<span class="navbar-toggler-icon"></span>';
    echo '</button>';
    echo '<div class="collapse navbar-collapse" id="navbarNav">';
    echo '<ul class="navbar-nav ms-auto">';

    foreach ($links as $name => $url) {
        $activeClass = ($currentPage === $url) ? 'active' : '';
        echo "<li class='nav-item'><a class='nav-link $activeClass' href='$url'>$name</a></li>";
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';
}
?>

