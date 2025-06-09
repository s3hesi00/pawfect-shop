<?php
// Yhdistä tietokantaan
$connection = new mysqli('localhost', 'root', '', 'pawfectshop');

// Tarkista yhteys
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Koiranruokatuotteet
$sql_koiranruoka = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Koiranruoka'";
$result_koiranruoka = $connection->query($sql_koiranruoka);

// Koiran ulkoilu -tuotteet
$sql_ulkoilu = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Koiran ulkoilu'";
$result_ulkoilu = $connection->query($sql_ulkoilu);

// Koiran lelut
$sql_koiranlelu = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Koiran lelut'";
$result_koiranlelu = $connection->query($sql_koiranlelu);

// Koirien muut tarvikkeet
$sql_koira_muut = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Muut tarvikkeet' AND animal_group = 'Koirat'";
$result_koira_muut = $connection->query($sql_koira_muut);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Shop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="kuvat/logo.png" alt="Logo" class="logo-img">
        </div>
        <div class="nav-right">
            <a href="#" class="wishlist">
                <img src="kuvat/heart.png" alt="Toivelista Ikoni">
                Toivelista
            </a>
            <a href="#" class="cart">
                <img src="kuvat/cart.png" alt="Ostoskori Ikoni">
                Ostoskori
            </a>
            <div class="search-bar">
                <img src="kuvat/search.png" alt="Search Ikoni">
                <input type="text" placeholder="Hae tuotevalikoimasta">
            </div>
        </div>
    </nav>
    <nav class="secondary-nav">
        <a href="index.php#products">Tuotteet</a>
        <a href="kissat.php">Kissat</a>
        <a href="koirat.php">Koirat</a>
        <a href="pienelaimet.php">Pieneläimet</a>
    </nav>

    <section class="hero-koirat">
        <img src="kuvat/koirat.jpg" alt="Koiranruoka" class="hero-image">
        <h1>Koirat</h1>
        <div class="koirat-container">
            <div class="koirat-item">
                <div class="koirat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/dogFood.png" alt="Koiranruoka" class="overlay-image">
                </div>
                <a href="#koiranruoka">Koiranruoka</a>
            </div>
            <div class="koirat-item">
                <div class="koirat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/leash.png" alt="Koiran ulkoilu" class="overlay-image">
                </div>
                <a href="#ulkoilu">Koiran ulkoilu</a>
            </div>
            <div class="koirat-item">
                <div class="koirat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/dogToys2.png" alt="Koiran lelut" class="overlay-image">
                </div>
                <a href="#koiran-lelut">Koiran lelut</a>
            </div>
            <div class="koirat-item">
                <div class="koirat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/dogBed2.png" alt="Muut tarvikkeet" class="overlay-image">
                </div>
                <a href="#muut-tarvikkeet">Muut tarvikkeet</a>
            </div>
        </div>
    </section>

    <section class="koirat-products">
        <h1>Kaikki tuotteet</h1>

        <!-- Koiranruoka -->
        <div class="product-category">
            <section class="product-category" id="koiranruoka">
                <h3>Koiranruoka</h3>
                <div class="product-list">
                    <?php
                    if ($result_koiranruoka->num_rows > 0) {
                        while($row = $result_koiranruoka->fetch_assoc()) {
                            echo '<div class="product-item">';
                            echo '  <div class="product-box">';
                            echo '    <img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
                            echo '  </div>';
                            echo '  <div class="product-details">';
                            echo '    <div class="product-info">';
                            echo '      <p class="product-name"><strong>' . $row['name'] . '</strong></p>';
                            echo '      <p class="product-price">' . $row['price'] . ' €</p>';
                            echo '      <p class="product-availability">Saatavuus: ' . $row['stock'] . ' kpl</p>';
                            echo '    </div>';
                            echo '    <div class="product-buttons">';
                            echo '      <button class="cart-button"><img src="kuvat/cart.png" alt="Ostoskori"></button>';
                            echo '      <button class="like-button"><img src="kuvat/heart.png" alt="Toivelista"></button>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Ei tuotteita saatavilla.";
                    }
                    ?>
                </div>
            </section>
        </div>

        <!-- Koiran ulkoilu -->
        <div class="product-category">
            <section class="product-category" id="ulkoilu">
                <h3>Koiran ulkoilu</h3>
                <div class="product-list">
                    <?php
                    if ($result_ulkoilu->num_rows > 0) {
                        while($row = $result_ulkoilu->fetch_assoc()) {
                            echo '<div class="product-item">';
                            echo '  <div class="product-box">';
                            echo '    <img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
                            echo '  </div>';
                            echo '  <div class="product-details">';
                            echo '    <div class="product-info">';
                            echo '      <p class="product-name"><strong>' . $row['name'] . '</strong></p>';
                            echo '      <p class="product-price">' . $row['price'] . ' €</p>';
                            echo '      <p class="product-availability">Saatavuus: ' . $row['stock'] . ' kpl</p>';
                            echo '    </div>';
                            echo '    <div class="product-buttons">';
                            echo '      <button class="cart-button"><img src="kuvat/cart.png" alt="Ostoskori"></button>';
                            echo '      <button class="like-button"><img src="kuvat/heart.png" alt="Toivelista"></button>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Ei tuotteita saatavilla.";
                    }
                    ?>
                </div>
            </section>
        </div>

        <!-- Koiran lelut -->
        <div class="product-category">
            <section class="product-category" id="koiran-lelut">
                <h3>Koiran lelut</h3>
                <div class="product-list">
                    <?php
                    if ($result_koiranlelu->num_rows > 0) {
                        while($row = $result_koiranlelu->fetch_assoc()) {
                            echo '<div class="product-item">';
                            echo '  <div class="product-box">';
                            echo '    <img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
                            echo '  </div>';
                            echo '  <div class="product-details">';
                            echo '    <div class="product-info">';
                            echo '      <p class="product-name"><strong>' . $row['name'] . '</strong></p>';
                            echo '      <p class="product-price">' . $row['price'] . ' €</p>';
                            echo '      <p class="product-availability">Saatavuus: ' . $row['stock'] . ' kpl</p>';
                            echo '    </div>';
                            echo '    <div class="product-buttons">';
                            echo '      <button class="cart-button"><img src="kuvat/cart.png" alt="Ostoskori"></button>';
                            echo '      <button class="like-button"><img src="kuvat/heart.png" alt="Toivelista"></button>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Ei tuotteita saatavilla.";
                    }
                    ?>
                </div>
            </section>
        </div>

        <!-- Koiran muut tarvikkeet -->
        <div class="product-category">
            <section class="product-category" id="koira-muut-tarvikkeet">
                <h3>Koiran muut tarvikkeet</h3>
                <div class="product-list">
                    <?php
                    if ($result_koira_muut->num_rows > 0) {
                        while($row = $result_koira_muut->fetch_assoc()) {
                            echo '<div class="product-item">';
                            echo '  <div class="product-box">';
                            echo '    <img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
                            echo '  </div>';
                            echo '  <div class="product-details">';
                            echo '    <div class="product-info">';
                            echo '      <p class="product-name"><strong>' . $row['name'] . '</strong></p>';
                            echo '      <p class="product-price">' . $row['price'] . ' €</p>';
                            echo '      <p class="product-availability">Saatavuus: ' . $row['stock'] . ' kpl</p>';
                            echo '    </div>';
                            echo '    <div class="product-buttons">';
                            echo '      <button class="cart-button"><img src="kuvat/cart.png" alt="Ostoskori"></button>';
                            echo '      <button class="like-button"><img src="kuvat/heart.png" alt="Toivelista"></button>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Ei tuotteita saatavilla.";
                    }
                    ?>
                </div>
            </section>
        </div>

    </section>

    <div class="footer" id="footer">
        <img src="kuvat/logo.png" alt="logo">
        <div class="text">
            <div class="info">
                <h2>Asiakaspalvelu</h2>
                <p>info@pawfectshop.com</p>
                <p>+358 50 987 6543</p>
            </div>
            <div class="info">
                <h2>Myymälä</h2>
                <p>Karvakuja 12</p>
                <p>00500 Helsinki</p>
            </div>
            <div class="info">
                <h2>Avoinna</h2>
                <p>Ma-Pe 10-18</p>
                <p>La 10-16</p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Sulje tietokantayhteys
$connection->close();
?>
