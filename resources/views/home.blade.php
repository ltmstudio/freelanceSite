<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/main.scss', 'resources/css/swiper.css'])
</head>

<body>
    <div class="header flex content-between align-center">
        <div class="navbar flex align-center">
            <div class="logo">
                <img src="{{ asset('/assets/images/ltm-black.svg') }}" />
            </div>
            <div class="nav-links flex mobile-none">
                <div class="nav-item"><a href="#portfolioBlock">Portfolio</a></div>
                <div class="nav-item"><a href="#servicesBlock">Services</a></div>
                <div class="nav-item"><a href="#whyChooseUs">Why Choose us</a></div>
                <div class="nav-item open-modal-btn"><a>Contacts</a></div>
            </div>
        </div>
        <div class="mobile-menu-wrapper desktop-none">
            <button class="menu-button" id="menuButton">Menu</button>
            <nav class="mobile-menu" id="mobileMenu">
                <ul class="menu-links hidden"> <!-- Добавляем класс hidden для скрытия -->
                    <li><a href="#link1">Link 1</a></li>
                    <li><a href="#link2">Link 2</a></li>
                    <li><a href="#link3">Link 3</a></li>
                    <li><a href="#link4">Link 4</a></li>
                </ul>
            </nav>
        </div>


        <div class="get-in-touch open-modal-btn" id="openModalBtn">
            Get in touch
        </div>
    </div>
    <scrollbar>
        <div class="main-content mrd-smooth" data-scroll-duration="0" data-scroll-deceleration="0"
            data-scroll-sensitivity="0" data-scroll-isScrolling="false" data-scroll-velocity="0">
            <div class="bg-wrapper flex column align-center content-center">
                <div class="text">
                    <p class="big-title">LTM Studio</p>
                    <div class="white-bg-text">Building the design teams of tomorrow</div>
                </div>
            </div>
            <div class="white-bg" id="portfolioBlock">
                <div class="container mobile-column flex content-between align-center">
                    <p class="normal-title">Created 20+ projects</p>
                    <div class="slider portfolio">
                        <div class="swiper-container swiper-container-free-mode">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 9; $i++)
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/container.png')">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/duomouseion.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/music.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/hermitage.png');">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wrapper second-wrapper flex align-center" id="servicesBlock">
                <div class="container">
                    <p class="normal-title typing-text hidden">We’re experts in design recruitment, with a focus on
                        senior
                        hires.</p>
                    <div class="slider specs mx-auto">
                        <div class="swiper-container card-swiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 9; $i++)
                                    <div class="swiper-slide">
                                        <div class="spec-card">UI/UX-Design</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="spec-card">Web Development</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="spec-card">Mobile Development</div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div class="slider specs mx-auto">
                        <div class="swiper-container card-swiper" dir="rtl">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 9; $i++)
                                    <div class="swiper-slide">
                                        <div class="spec-card">UI/UX-Design</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="spec-card">Web Development</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="spec-card">Mobile Development</div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white-bg">
                <div class="container mobile-column flex content-between align-center">
                    <p class="normal-title typing-text hidden w-40">Trusted by product & design leaders</p>
                    <div class="slider reviews">
                        <div class="reviews-swiper swiper-container">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 2; $i++)
                                    <div class="swiper-slide">
                                        <div class="review-card flex column content-between">
                                            <div class="flex content-between">
                                                <p>Logo</p>
                                                <img src="{{ asset('/assets/images/quote.svg') }}" alt=""
                                                    class="quote-icon">
                                            </div>
                                            <div class="desc">
                                                <p>LTM Studio has been one my closest recruiting partners at Meta, and
                                                    has
                                                    been
                                                    instrumental in building Workrooms's Art team.</p>
                                            </div>
                                            <div class="author flex align-center">
                                                <div class="photo"></div>
                                                <div class="flex column">
                                                    <p class="author-name">Flavia Ceccarelli</p>
                                                    <p class="author-spec">Head of Art - Meta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-card flex column content-between">
                                            <div class="flex content-between">
                                                <p>Logo</p>
                                                <img src="{{ asset('/assets/images/quote.svg') }}" alt=""
                                                    class="quote-icon">
                                            </div>
                                            <div class="desc">
                                                <p>LTM Studio has been one my closest recruiting partners at Meta, and
                                                    has
                                                    been
                                                    instrumental in building Workrooms's Art team.</p>
                                            </div>
                                            <div class="author flex align-center">
                                                <div class="photo"></div>
                                                <div class="flex column">
                                                    <p class="author-name">Flavia Ceccarelli</p>
                                                    <p class="author-spec">Head of Art - Meta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-card flex column content-between">
                                            <div class="flex content-between">
                                                <p>Logo</p>
                                                <img src="{{ asset('/assets/images/quote.svg') }}" alt=""
                                                    class="quote-icon">
                                            </div>
                                            <div class="desc">
                                                <p>LTM Studio has been one my closest recruiting partners at Meta, and
                                                    has
                                                    been
                                                    instrumental in building Workrooms's Art team.</p>
                                            </div>
                                            <div class="author flex align-center">
                                                <div class="photo"></div>
                                                <div class="flex column">
                                                    <p class="author-name">Flavia Ceccarelli</p>
                                                    <p class="author-spec">Head of Art - Meta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wrapper third-wrapper" id="whyChooseUs">
                <div class="container flex column content-center">
                    <p class="normal-title typing-text hidden">Why work with us?</p>
                    <div class="card-row">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="card">
                                <div class="h-30"></div>
                                <p class="card-title">Design Specialists</p>
                                <p class="for-ben">10+ years of experience in design talent—we know what great looks
                                    like!
                                </p>
                                <div class></div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="container">
                    <div class="footer">
                        <div class="flex align-center content-between">
                            <div class="first-col">
                                <p class="normal-title">LTM Studio</p>
                                <p class="white-bg-text">Building the design teams of tomorrow</p>
                                <div class="flex content-between mobile-column">
                                    <div class="contact-item">
                                        <div class="title">CONTACT</div>
                                        <div class="desc"><a>Email Us</a></div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="title">SOCIAL</div>
                                        <div class="desc"><a>Linkedin</a></div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="title">LEGAL</div>
                                        <div class="desc"><a>Policy request</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="second-col">
                                <div class="office-photo">
                                    <img src="{{ asset('/assets/images/office1.jpg') }}" alt="">
                                    <button type="button" class="contact-us open-modal-btn">Speak to Us
                                        <div class="c-button__blobs">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            style="display: block; height: 0; width: 0;">
                                            <defs>
                                                <filter id="goo">
                                                    <feGaussianBlur in="SourceGraphic" stdDeviation="10"
                                                        result="blur">
                                                    </feGaussianBlur>
                                                    <feColorMatrix in="blur" mode="matrix"
                                                        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                                                        result="goo">
                                                    </feColorMatrix>
                                                    <feBlend in="SourceGraphic" in2="goo"></feBlend>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-overlay" id="modalOverlay"></div>
            <div id="modal" class="modal">
                <div class="modal-content">
                    <div class="container">
                        <div class="modal-name flex align-center content-between">
                            <p>CONTACT US</p>
                            <div class="close-btn" id="closeModalBtn">
                                <span>&times;</span>
                            </div>
                        </div>
                        <p class="modal-title">Good recruitment is based on good <br /> relationships.</p>
                        <p class="modal-subtitle">Get in touch and we’ll kick start ours on the right foot.</p>
                        <div class="form-wrapper flex content-between">
                            <div class="form-row flex column">
                                <div class="flex content-between">
                                    <div class="input-row flex column content-between">
                                        <label for="name">Name</label>
                                        <input type="text" name="name">
                                    </div>
                                    <div class="input-row flex column content-between">
                                        <label for="email">Email</label>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                                <label for="phone">Phone number</label>
                                <input type="text" name="phone">
                                <label for="subject">Subject</label>
                                <textarea name="subject" id="" rows="10"></textarea>
                            </div>
                            <div class="photo"><img src="{{ asset('/assets/images/office1.jpg') }}" alt="">
                            </div>
                        </div>
                        <button type="button" class="submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </scrollbar>
    {{-- <script src="{{ asset('/assets/js/smooth-scrollbar.js') }}"></script> --}}
    <script src="{{ asset('/assets/js/swiper.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
    <script>
        var swiperOptions = {
            loop: true,
            freeMode: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            loopAddBlankSlides: true,
            slidesPerView: 1,
            speed: 6000,
            grabCursor: true,
            loopAdditionalSlides: 2,
            breakpoints: {
                991: {
                    slidesPerView: 2,
                },
            },

        };

        // Инициализация первого слайдера
        var swiper1 = new Swiper(".swiper-container-free-mode", swiperOptions);

        var reviewsSwiperOptions = {
            slidesPerView: 1,
            speed: 500,
            spaceBetween: 0,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination', // селектор для элемента пагинации
                clickable: true, // чтобы можно было кликать по дотсам
            },
            breakpoints: {
                1025: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },
        }

        var swiper2 = new Swiper(".reviews-swiper", reviewsSwiperOptions);

        var cardSwiperOptions = {
            loop: true,
            freeMode: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            loopAddBlankSlides: true,
            slidesPerView: 3,
            speed: 6000,
            grabCursor: true,
            loopAdditionalSlides: 2,
            spaceBetween: 10,
            breakpoints: {
                991: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
        }

        var swiper2 = new Swiper(".card-swiper", cardSwiperOptions);
    </script>
</body>

</html>
