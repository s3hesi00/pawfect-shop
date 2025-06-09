<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieneläimet</title>
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
    
    <section class="hero-pienelaimet">
      <img src="kuvat/field.jpg" alt="Pieneläimetruoka" class="hero-image">
      <h1>Pieneläimet</h1>
      <div class="pienelaimet-container">
            <div class="pienelaimet-item">
                <div class="pienelaimet-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/marsu.png" alt="Marsut" class="overlay-image">
                </div>
                <a href="#marsut">Marsut</a>
            </div>
            <div class="pienelaimet-item">
                <div class="pienelaimet-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/hamsteri.png" alt="Hamsterit" class="overlay-image">
                </div>
                <a href="#hamsterit">Hamsterit</a>
            </div>
            <div class="pienelaimet-item">
                <div class="pienelaimet-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/kani.png" alt="Kanit" class="overlay-image">
                </div>
                <a href="#kanit">Kanit</a>
            </div>
            <div class="pienelaimet-item">
                <div class="pienelaimet-image">
                    <img src="kuvat/sininentassu.png" alt="Tassu">
                    <img src="kuvat/lintu.png" alt="Linnut" class="overlay-image">
                </div>
                <a href="#linnut">Linnut</a>
            </div>
        </div>
    </section>

    <section class="pienelaimet-products">
        <h1>Kaikki tuotteet</h1>
        
        <!-- Marsut -->
        <div class="product-category">
          <section class="product-category" id="marsut">
            <h3>Marsut</h3>
            <div class="product-list">
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/marsunRuoka.png" alt="Marsun Ruoka">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Marsun Ruoka</strong></p>
                            <p class="product-price">10.99 €</p>
                            <p class="product-availability">Saatavuus: 50 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/marsunHäkki.webp" alt="Marsun Häkki">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Marsun Häkki</strong></p>
                            <p class="product-price">40.99 €</p>
                            <p class="product-availability">Saatavuus: 30 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/marsunLelu.webp" alt="Marsun Lelu">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Marsun Lelu</strong></p>
                            <p class="product-price">5.99 €</p>
                            <p class="product-availability">Saatavuus: 80 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </section>
        </div>

        <!-- Hamsterit -->
        <div class="product-category">
          <section class="product-category" id="hamsterit">
            <h3>Hamsterit</h3>
            <div class="product-list">
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/hamsterinRuoka.png" alt="Hamsterin Ruoka">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Hamsterin Ruoka</strong></p>
                            <p class="product-price">3.99 €</p>
                            <p class="product-availability">Saatavuus: 100 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/hamsterinHäkki.webp" alt="Hamsterin Häkki">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Hamsterin Häkki</strong></p>
                            <p class="product-price">20.99 €</p>
                            <p class="product-availability">Saatavuus: 50 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/hamsterinLelu.png" alt="Hamsterin Lelu">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Hamsterin Lelu</strong></p>
                            <p class="product-price">3.49 €</p>
                            <p class="product-availability">Saatavuus: 70 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </section>
        </div>

        <!-- Kanit -->
        <div class="product-category">
          <section class="product-category" id="kanit">
            <h3>Kanit</h3>
            <div class="product-list">
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/kaninRuoka.avif" alt="Kanin Ruoka">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Kanin Ruoka</strong></p>
                            <p class="product-price">12.99 €</p>
                            <p class="product-availability">Saatavuus: 60 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/kaninLelu.webp" alt="Kanin Lelu">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Kanin Lelu</strong></p>
                            <p class="product-price">6.49 €</p>
                            <p class="product-availability">Saatavuus: 100 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/kaninHäkki.webp" alt="Kanin Häkki">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Kanin Häkki</strong></p>
                            <p class="product-price">49.99 €</p>
                            <p class="product-availability">Saatavuus: 40 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </section>
        </div>

        <!-- Linnut -->
        <div class="product-category">
          <section class="product-category" id="linnut">
            <h3>Linnut</h3>
            <div class="product-list">
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/linnunRuoka.webp" alt="Linnun Ruoka">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Linnun Ruoka</strong></p>
                            <p class="product-price">4.99 €</p>
                            <p class="product-availability">Saatavuus: 80 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/linnunHäkki.webp" alt="Linnun Häkki">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Linnun Häkki</strong></p>
                            <p class="product-price">30.99 €</p>
                            <p class="product-availability">Saatavuus: 60 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-box">
                        <img src="kuvat/birdToy.png" alt="Linnun Lelu">
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <p class="product-name"><strong>Linnun Lelu</strong></p>
                            <p class="product-price">5.99 €</p>
                            <p class="product-availability">Saatavuus: 100 kpl</p>
                        </div>
                        <div class="product-buttons">
                            <button class="cart-button">
                                <img src="kuvat/cart.png" alt="Ostoskori">
                            </button>
                            <button class="like-button">
                                <img src="kuvat/heart.png" alt="Toivelista">
                            </button>
                        </div>
                    </div>
                </div>
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

        <div id="productModal" class="modal">
          <div class="modal-content">
              <span class="close" onclick="closeModal()">&times;</span>
              <img id="modalImage" class="modal-image" src="" alt="Tuotekuva">
              <div class="modal-text">
                  <h2 id="modalTitle"></h2>
                  <p id="modalPrice"></p>
                  <div id="modalAvailability" class="availability-box">
                    <span class="availability-status">Varastossa</span>
                    <span class="availability-amount">33 kpl</span>
                </div>
               
              </div>
          </div>
      </div>
      
        <script>
        document.querySelectorAll('.product-item').forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('modalTitle').innerText = this.dataset.name;
                document.getElementById('modalImage').src = this.dataset.image;
                document.getElementById('modalPrice').innerText = 'Hinta: ' + this.dataset.price;
                document.getElementById('productModal').style.display = 'flex';
            });
        });
       
        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
        }
       
        function addToCart() {
    let quantity = document.getElementById('modalQuantity').value;
    let modalTitle = document.getElementById('modalTitle').innerText;
    let modalImage = document.getElementById('modalImage').src;
    let modalPrice = document.getElementById('modalPrice').innerText;
   
    document.getElementById('cartNotifTitle').innerText = modalTitle;
    document.getElementById('cartNotifImage').src = modalImage;
    document.getElementById('cartNotifPrice').innerText = modalPrice;
    document.getElementById('cartNotifQuantity').innerText = quantity;
   
    let cartNotification = document.getElementById('cartNotification');
    cartNotification.style.display = 'block';
    setTimeout(() => { cartNotification.style.opacity = '1'; }, 10);
}
function closeCartNotification() {
    let cartNotification = document.getElementById('cartNotification');
    cartNotification.style.opacity = '0';
    setTimeout(() => { cartNotification.style.display = 'none'; }, 300);
}
        </script>
</body>
</html>