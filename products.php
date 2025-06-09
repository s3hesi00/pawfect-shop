<?php
// Yhdistä tietokantaan
$connection = new mysqli('localhost', 'root', '', 'pawfectshop');

// Tarkista yhteys
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Hae tuotteet tietokannasta
$sql = "SELECT id, name, price, stock, image_url FROM products";
$result = $connection->query($sql);

// Näytä tuotteet
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="product-item">';
        echo '  <div class="product-box">';
        echo '    <img src="' . $row['image_url'] . '" alt="Tuote">';
        echo '  </div>';
        echo '  <div class="product-details">';
        echo '    <div class="product-info">';
        echo '      <p class="product-name"><strong>' . $row['name'] . '</strong></p>';
        echo '      <p class="product-price">' . $row['price'] . ' €</p>';
        echo '      <p class="product-availability">Saatavuus: ' . $row['stock'] . ' kpl</p>';
        echo '    </div>';
        echo '    <div class="product-buttons">';
        echo '      <button class="cart-button">';
        echo '        <img src="kuvat/cart.png" alt="Ostoskori">';
        echo '      </button>';
        echo '      <button class="like-button">';
        echo '        <img src="kuvat/heart.png" alt="Toivelista">';
        echo '      </button>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo "Ei tuotteita saatavilla.";
}

$connection->close();
?>
