<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netherland</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
function renderNavbar() {
    $links = [
        'Home' => 'home.php',
        'TouristSpot' => 'touristspot.php',
        'TulipSpot' => 'tulipspot.php',
        'Contact' => 'contact.php',
        'Account' => 'Account.php'
       
    ];

    $currentPage = basename($_SERVER['PHP_SELF']);

    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">';
    echo '<div class="container-fluid">';
    echo '<a class="navbar-brand" href="#">Netherland</a>';
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

<!-- Call the renderNavbar function -->
<?php renderNavbar(); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>