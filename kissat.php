<?php
// Yhdistä tietokantaan
$connection = new mysqli('localhost', 'root', '', 'pawfectshop');

// Tarkista yhteys
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Kissanruokatuotteet
$sql_kissanruoka = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Kissanruoka'";
$result_kissanruoka = $connection->query($sql_kissanruoka);

// Kissanhiekka-tuotteet
$sql_kissanhiekka = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Kissanhiekka'";
$result_kissanhiekka = $connection->query($sql_kissanhiekka);

// Kissanlelu-tuotteet
$sql_kissanlelu = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Kissan lelut'";
$result_kissanlelu = $connection->query($sql_kissanlelu);

// Muut tarvikkeet -tuotteet (vain kissoille)
$sql_muut_kissat = "SELECT id, name, price, stock, image_url FROM products WHERE category = 'Muut tarvikkeet' AND animal_group = 'Kissat'";
$result_muut_kissat = $connection->query($sql_muut_kissat);
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

    <section class="hero-kissat">
        <img src="kuvat/kissanruoka.jpg" alt="Kissanruoka" class="hero-image">
        <h1>Kissat</h1>
        <div class="kissat-container">
            <div class="kissat-item">
                <div class="kissat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/primacat.png" alt="Kissanruoka" class="overlay-image">
                </div>
                <a href="#kissanruoka">Kissanruoka</a>
            </div>
            <div class="kissat-item">
                <div class="kissat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/cattia.png" alt="Kissanhiekka" class="overlay-image">
                </div>
                <a href="#kissanhiekka">Kissanhiekka</a>
            </div>
            <div class="kissat-item">
                <div class="kissat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/mouse.png" alt="Kissan lelut" class="overlay-image">
                </div>
                <a href="#lelut">Kissan lelut</a>
            </div>
            <div class="kissat-item">
                <div class="kissat-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/bowl.png" alt="Muut tarvikkeet" class="overlay-image">
                </div>
                <a href="#muut">Muut tarvikkeet</a>
            </div>
        </div>
    </section>

    <section class="cats-products">
        <h1>Kaikki tuotteet</h1>
        
        <!-- Kissanruoka -->
        <div class="product-category">
            <section class="product-category" id="kissanruoka">
                <h3>Kissanruoka</h3>
                <div class="product-list">
                    <?php
                    if ($result_kissanruoka->num_rows > 0) {
                        while($row = $result_kissanruoka->fetch_assoc()) {
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

        <!-- Kissanhiekka -->
        <div class="product-category">
            <section class="product-category" id="kissanhiekka">
                <h3>Kissanhiekka</h3>
                <div class="product-list">
                    <?php
                    if ($result_kissanhiekka->num_rows > 0) {
                        while($row = $result_kissanhiekka->fetch_assoc()) {
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

        <!-- Kissalle suunnatut muut tarvikkeet -->
        <div class="product-category">
            <section class="product-category" id="muut">
                <h3>Kissojen muut tarvikkeet</h3>
                <div class="product-list">
                    <?php
                    if ($result_muut_kissat->num_rows > 0) {
                        while($row = $result_muut_kissat->fetch_assoc()) {
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
