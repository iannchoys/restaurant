<section class="contact" id="contact">
    <div class="container">
        <!-- Заголовок -->
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="contact__title">CONTACT</h2>
                <img src="img/team/4_rectangle_2.png" alt="" class="contact__divider">
                <p class="contact__subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis at velit maximus, molestie est a, tempor magna.
                </p>
            </div>
        </div>

        <!-- Форма -->
        <div class="row">
            <div class="col-12">
                <form class="contact__form" action="#" method="post">
                    <!-- Поля Name, Email, Phone с отступами -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 mb-2 mb-md-0">
                            <input type="text" class="contact__input" placeholder="Name" required>
                        </div>
                        <div class="col-lg-4 col-md-4 mb-2 mb-md-0">
                            <input type="email" class="contact__input" placeholder="Email" required>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="tel" class="contact__input" placeholder="Phone" required>
                        </div>
                    </div>

                    <!-- Поле Message -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <textarea class="contact__textarea" placeholder="Message" rows="3" required></textarea>
                        </div>
                    </div>

                     <!-- Нижний ряд: контакты + кнопка на одной линии -->
<div class="row mt-3 align-items-stretch">
    <!-- Левая часть: контакты + серая полоска -->
    <div class="col-xl-6 col-md-6 d-flex flex-column mb-3 mb-xl-0">
        <div class="contact__info">
            <i class="fas fa-map-marker-alt"></i> <span>5th London Boulevard, U.K.</span>
            <i class="fas fa-phone-alt"></i> <span>+40 729 131 637 / +40 726 458 782</span>
            <i class="fas fa-envelope"></i> <span>office@mindblister.com</span>
        </div>
        <div class="contact__gray-bar"></div>
    </div>

    <!-- Правая часть: кнопка -->
    <div class="col-xl-6 col-md-6">
        <button type="submit" class="contact__btn">SEND MESSAGE</button>
    </div>
</div>
                </form>
            </div>
        </div>
    </div>
</section>