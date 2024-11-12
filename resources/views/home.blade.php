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
    @php
        $partners = [
            [
                'name' => 'BrightEdge Solutions',
                'logo' => '/assets/images/bright-edge.png',
                'author' => 'Aanya Blake',
                'avatar' => '/assets/images/partner-av-f.jpg',
                'specialization' => 'Project Manager',
                'review' =>
                    'Working with LTM Studio was easy and efficient. The team quickly understood our tasks and created a website that fully meets our requirements. Special thanks for their attention to detail and ability to offer solutions we hadn’t considered.',
            ],
            [
                'name' => 'MoveUp Logistics',
                'logo' => '/assets/images/move-up.png',
                'author' => 'Ajani Kimathi',
                'avatar' => '/assets/images/partner-av-t.jpg',
                'specialization' => 'Logistics Director',
                'review' =>
                    'The design of our mobile app with LTM Studio went smoothly and without delays. They did an excellent job integrating our ideas into a functional and beautiful interface. The app has become a key tool for our business.',
            ],
            [
                'name' => 'Aspire Marketing Group',
                'logo' => '/assets/images/aspire.png',
                'author' => 'Akalan Demir',
                'avatar' => '/assets/images/partner-av-fr.jpg',
                'specialization' => 'Head of Marketing',
                'review' =>
                    "Impressed by LTM Studio’s approach to designing our website. The work was done promptly, and the result exceeded expectations. LTM's team were quick to respond to our feedback and created a project that is both user-friendly and modern.",
            ],
            [
                'name' => 'NextGen Health',
                'logo' => '/assets/images/nextgen.png',
                'author' => 'Cameron Hale',
                'avatar' => '/assets/images/partner-av-s.jpg',
                'specialization' => 'Chief Medical Officer',
                'review' =>
                    'Working with LTM Studio turned out to be exactly what we needed. The project for developing a new interface went smoothly, and I am grateful to the entire team for its professionalism and dedication to achieving the best results.',
            ],
        ];

        $reasons = [
            [
                'heading' => 'Proven Expertise',
                'subheading' => '7+ years of successful projects highlight our expertise',
            ],
            [
                'heading' => 'Innovative Solutions',
                'subheading' => 'We create unique, forward-thinking digital products',
            ],
            [
                'heading' => 'Strong Collaboration',
                'subheading' => 'Our process ensures clear communication and efficiency',
            ],
            [
                'heading' => 'Client Satisfaction',
                'subheading' => 'We focus on delivering results that exceed expectations.',
            ],
        ];
    @endphp


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
            <button class="menu-button" id="menuButton"> <input type="checkbox" id="menuToggle" class="menu-toggle">
                <label for="menuToggle" class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </button>
            <nav class="mobile-menu" id="mobileMenu">
                <ul class="menu-links"> <!-- Добавляем класс hidden для скрытия -->
                    <div class="nav-item"><a href="#portfolioBlock">Portfolio</a></div>
                    <div class="nav-item"><a href="#servicesBlock">Services</a></div>
                    <div class="nav-item"><a href="#whyChooseUs">Why Choose us</a></div>
                    <div class="nav-item open-modal-btn"><a>Contacts</a></div>
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
                                        style="background-image: url('/assets/images/toscoro.png')">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/smalls.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/snackpass.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/hermitage.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/container.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/music.png');">
                                    </div>
                                    <div class="swiper-slide"
                                        style="background-image: url('/assets/images/duomouseion.png');">
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
                                @foreach ($partners as $partner)
                                    <div class="swiper-slide">
                                        <div class="review-card flex column content-between">
                                            <div class="flex align-center content-between">
                                                <div class="photo">
                                                    <img src="{{ asset($partner['logo']) }}" alt=""
                                                        class="logo-image">
                                                </div>
                                                <img src="{{ asset('/assets/images/quote.svg') }}" alt=""
                                                    class="quote-icon">
                                            </div>
                                            <div class="desc">
                                                <p>{{ $partner['review'] }}</p>
                                            </div>
                                            <div class="author flex align-center">
                                                <div class="photo"><img src="{{ asset($partner['avatar']) }}"
                                                        alt=""></div>
                                                <div class="flex column">
                                                    <p class="author-name">{{ $partner['author'] }}</p>
                                                    <p class="author-spec">{{ $partner['specialization'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                        @foreach ($reasons as $reason)
                            <div class="card">
                                <div class="h-30"></div>
                                <p class="card-title">{{ $reason['heading'] }}</p>
                                <p class="for-ben">{{ $reason['subheading'] }}
                                </p>
                                <div class></div>
                            </div>
                        @endforeach

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
                                        <div class="desc open-modal-btn"><a>Email Us</a></div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="title">SOCIAL</div>
                                        <div class="desc"><a href="https://linkedin.com/company/lebizli-tehnologiya-merkezi" target="_blank">Linkedin</a></div>
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
                        <form id="contactForm" method="POST" action="{{ route('send-mail') }}">
                            @csrf
                            <div class="form-wrapper flex content-between">
                                <div class="form-row flex column">
                                    <div class="flex content-between">
                                        <div class="input-row flex column content-between">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" required>
                                        </div>
                                        <div class="input-row flex column content-between">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" required>
                                        </div>
                                    </div>
                                    <label for="phone">Phone number</label>
                                    <input type="text" name="phone" required>
                                    <label for="subject">Subject</label>
                                    <textarea name="subject" id="subject" rows="10" required></textarea>
                                </div>
                                <div class="photo"><img src="{{ asset('/assets/images/office1.jpg') }}"
                                        alt=""></div>
                            </div>
                            <button type="submit" class="submit-btn">Submit</button>
                        </form>
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
