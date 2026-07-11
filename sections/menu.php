<section class="menu" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="menu__title">DELICIOUS MENU</h2>
                <img src="img/menu/4_rectangle_2.png" alt="" class="menu__divider">
                <p class="menu__subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis at velit maximus, molestie est a, tempor magna.
                </p>
            </div>
        </div>

        <!-- Категории -->
        <div class="row">
            <div class="col-12 text-center">
                <ul class="menu__categories">
                    <li><a href="#" class="menu__category-link active" data-filter="soup">Soupe</a></li>
                    <li><a href="#" class="menu__category-link" data-filter="pizza">Pizza</a></li>
                    <li><a href="#" class="menu__category-link" data-filter="pasta">Pasta</a></li>
                    <li><a href="#" class="menu__category-link" data-filter="desert">Desert</a></li>
                    <li><a href="#" class="menu__category-link" data-filter="wine">Wine</a></li>
                    <li><a href="#" class="menu__category-link" data-filter="beer">Beer</a></li>
                    <li><a href="#" class="menu__category-link" data-filter="drinks">Drinks</a></li>
                </ul>
            </div>
        </div>

        <!-- Сетка блюд (3 колонки, 21 позиция) -->
			<div class="row menu__grid">
    <!-- ===== SOUP (3 карточки) ===== -->
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="soup">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">TOMATO SOUP</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">7,50 USD</span>
            </div>
            <p class="menu__item-desc">Classic creamy tomato soup with basil</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="soup">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">MUSHROOM CREAM</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">9,20 USD</span>
            </div>
            <p class="menu__item-desc">Wild mushrooms in a velvety cream base</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="soup">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">CHICKEN NOODLE</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">8,00 USD</span>
            </div>
            <p class="menu__item-desc">Hearty chicken soup with homemade noodles</p>
        </div>
    </div>

    <!-- ===== PIZZA (3 карточки) ===== -->
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="pizza">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">MARGHERITA</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">12,00 USD</span>
            </div>
            <p class="menu__item-desc">Fresh tomatoes, mozzarella, basil</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="pizza">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">QUATRO STAGIONI</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">15,50 USD</span>
            </div>
            <p class="menu__item-desc">Ham, mushrooms, artichokes, olives</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="pizza">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">DIAVOLA</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">14,00 USD</span>
            </div>
            <p class="menu__item-desc">Spicy salami, chili peppers, mozzarella</p>
        </div>
    </div>

    <!-- ===== PASTA (3 карточки) ===== -->
	  <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="pasta">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">CARBONARA</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">16,00 USD</span>
            </div>
            <p class="menu__item-desc">Spaghetti with pancetta, egg, parmesan</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="pasta">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">BOLOGNESE</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">14,50 USD</span>
            </div>
            <p class="menu__item-desc">Traditional meat sauce with tagliatelle</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="pasta">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">PESTO GENOVESE</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">13,00 USD</span>
            </div>
            <p class="menu__item-desc">Basil pesto, pine nuts, parmesan, linguine</p>
        </div>
    </div>

    <!-- ===== DESERT (3 карточки) ===== -->
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="desert">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">TIRAMISU</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">9,00 USD</span>
            </div>
            <p class="menu__item-desc">Classic Italian coffee dessert</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="desert">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">PANNA COTTA</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">8,50 USD</span>
            </div>
            <p class="menu__item-desc">Vanilla cream with berry coulis</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="desert">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">CHOCOLATE FONDANT</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">10,00 USD</span>
            </div>
            <p class="menu__item-desc">Warm chocolate cake with molten center</p>
        </div>
    </div>

    <!-- ===== WINE (3 карточки) ===== -->
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="wine">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">CHARDONNAY</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">8,00 USD</span>
            </div>
            <p class="menu__item-desc">Dry white wine, 150ml</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="wine">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">MERLOT</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">9,00 USD</span>
            </div>
            <p class="menu__item-desc">Red wine, 150ml</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="wine">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">PROSECCO</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">7,00 USD</span>
            </div>
            <p class="menu__item-desc">Sparkling white, 120ml</p>
        </div>
    </div>

    <!-- ===== BEER (3 карточки) ===== -->
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="beer">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">PILSNER</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">5,00 USD</span>
            </div>
            <p class="menu__item-desc">Czech lager, 0.5L</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="beer">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">WEISSBIER</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">5,50 USD</span>
            </div>
            <p class="menu__item-desc">German wheat beer, 0.5L</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="beer">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">STOUT</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">6,00 USD</span>
            </div>
            <p class="menu__item-desc">Dark ale, 0.5L</p>
        </div>
    </div>

    <!-- ===== DRINKS (3 карточки) ===== -->
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="drinks">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">COCA-COLA</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">3,00 USD</span>
            </div>
            <p class="menu__item-desc">330ml can</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="drinks">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">ORANGE JUICE</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">4,00 USD</span>
            </div>
            <p class="menu__item-desc">Freshly squeezed, 250ml</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 menu__item" data-category="drinks">
        <div class="menu__card">
            <div class="menu__card-header">
                <h3 class="menu__item-title">ESPRESSO</h3>
                <span class="menu__dots"></span>
                <span class="menu__item-price">2,50 USD</span>
            </div>
            <p class="menu__item-desc">Double shot</p>
        </div>
    </div>
</div>


        </div>
    </div>
</section>