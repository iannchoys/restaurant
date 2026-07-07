<section class="booking" id="booking">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <h2 class="booking__title">Book a Table</h2>
                <img src="img/booking/rectangle_2.png" alt="" class="booking__divider">
                <form class="booking__form" action="#" method="post">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="booking__input" placeholder="Name" required>
                        </div>
                        <div class="col-6">
                            <input type="email" class="booking__input" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="tel" class="booking__input" placeholder="Phone" required>
                        </div>
                        <div class="col-6">
                            <select class="booking__input" required>
                                <option disabled selected>People</option>
                                <option>1 человек</option>
                                <option>2 человека</option>
                                <option>3 человека</option>
                                <option>4 человека</option>
                                <option>5+ человек</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="booking__input" placeholder="Date (mm/dd)" required>
                        </div>
                        <div class="col-6">
                            <select class="booking__input" required>
                                <option disabled selected>Time</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="booking__btn">BOOK NOW</button>
                </form>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="booking__images">
                    <img src="img/booking/6_group_img.png" alt="Бронирование столика" class="booking__photo">
                </div>
            </div>
        </div>
    </div>

    <div class="booking__info">
        <p class="booking__info-text">
            Mon - Fri: <strong>8PM - 10PM</strong>, Sat - Sun: <strong>8PM - 3AM</strong>, Phone: <strong>+40 729 131 637</strong> / <strong>+40 726 458 782</strong>
        </p>
    </div>
</section>