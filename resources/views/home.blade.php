@extends('layouts.layout')

@section('content')
    <!-- Hero-->
    <section class="module-cover parallax text-center fullscreen" data-background="assets/images/module-2.jpg"
             data-overlay="0.6" style="background-image: none; z-index: 0;"
             data-jarallax-original-styles="background-image: url(&quot;assets/images/module-2.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="m-b-20"><strong>Створіть своє ідеальне резюме за кілька хвилин</strong></h1>
                    <p class="m-b-40">Дізнайтеся, як ШІ може допомогти вам створити професійне резюме, яке відповідає
                        вашим навичкам та досвіду, <br> збільшуючи шанси на отримання бажаної роботи.</p>
                    <p><a class="btn btn-lg btn-circle btn-brand" href="#start">Розпочати</a>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#about">Дізнатися більше</a></p>
                </div>
            </div>
        </div>
        <div class="overlay-background" style="opacity: 0.6;"></div>
        <div
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"
            id="jarallax-container-0">
            <div
                style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://offsetcode.com/themes/boomerang/1.3.1/assets/images/module-2.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1680px; height: 905px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 0px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
    </section>
    <!-- Hero end-->

    <!-- About-->
    <section id="about" class="module divider-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <h3 style="font-weight: bold">Ваше Резюме, Ваш Шлях</h3>
                    <p class="lead">Створіть професійне резюме за допомогою штучного інтелекту. Відчуйте, як швидко і
                        легко можна досягти успіху в кар'єрі, <br> завдяки резюме, яке максимально підходить до ваших
                        навичок і досвіду.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-my="60px" style="margin-top: 60px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><img src="a_data/mega-mockup.png" alt=""></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-my="30px" style="margin-top: 30px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-layout"></span></div>
                        <div class="icon-box-title">
                            <h6>Легкість створення</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Наша система допоможе створити професійне резюме всього за кілька кроків, використовуючи
                                найсучасніші алгоритми штучного інтелекту.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Дізнатися більше</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-cup"></span></div>
                        <div class="icon-box-title">
                            <h6>Інтерфейс користувача</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Інтуїтивно зрозумілий інтерфейс, що дозволяє легко створювати резюме навіть без досвіду у
                                використанні подібних інструментів.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Дізнатися більше</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-harddrives"></span></div>
                        <div class="icon-box-title">
                            <h6>Швидкість та ефективність</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Наш штучний інтелект працює швидко, надаючи вам ідеальне резюме за лічені хвилини,
                                гарантуючи високий рівень якості.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Дізнатися більше</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-desktop"></span></div>
                        <div class="icon-box-title">
                            <h6>Повна адаптивність</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Наші шаблони резюме автоматично адаптуються під будь-які пристрої та екранні розміри, що
                                забезпечує їх зручне використання.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Дізнатися більше</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end-->

    <section class="module bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6"><img src="{{asset('image/ipad.png')}}" alt="Resume Builder"></div>
                <div class="col-lg-5 offset-lg-1">
                    <h2>Гнучкість та Легкість у Створенні Резюме.</h2>
                    <p class="lead">Наш штучний інтелект допоможе вам створити професійне резюме за кілька кроків.
                        Просто введіть дані, і система автоматично згенерує оптимізоване резюме для вас.</p>
                    <div class="space" data-my="50px" style="margin-top: 50px;"></div>
                    <div class="icon-box icon-box-left">
                        <div class="icon-box-icon"><span class="ti-layout"></span></div>
                        <div class="icon-box-title">
                            <h6>Інтуїтивний Конструктор</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Створення резюме ніколи не було таким простим! Наш інтуїтивно зрозумілий інтерфейс
                                допоможе вам створити ідеальне резюме без зайвих зусиль.</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-left">
                        <div class="icon-box-icon"><span class="ti-cup"></span></div>
                        <div class="icon-box-title">
                            <h6>Штучний Інтелект для Професійного Резюме</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Використовуємо алгоритми штучного інтелекту, які допомагають створити персоналізоване
                                резюме, оптимізоване для сучасного ринку праці.</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-left">
                        <div class="icon-box-icon"><span class="ti-harddrives"></span></div>
                        <div class="icon-box-title">
                            <h6>Швидкість та Ефективність</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Отримуйте результат за лічені хвилини! Наші технології дозволяють швидко генерувати
                                резюме без втрати якості.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team-->
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <h1>Приклади роботи</h1>
                    <p class="lead">See how your users experience your website in realtime or view trends to see any
                        changes in performance over time.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-my="60px" style="margin-top: 60px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-image"><img src="a_data/1_004.jpg" alt="">
                            <div class="team-wrap">
                                <div class="team-content">
                                    <h6 class="team-name">Emma Connor</h6>
                                    <div class="team-role">Designer</div>
                                </div>
                                <div class="team-content-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-image"><img src="a_data/2_003.jpg" alt="">
                            <div class="team-wrap">
                                <div class="team-content">
                                    <h6 class="team-name">Richard Bauer</h6>
                                    <div class="team-role">Developer</div>
                                </div>
                                <div class="team-content-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-image"><img src="a_data/3.jpg" alt="">
                            <div class="team-wrap">
                                <div class="team-content">
                                    <h6 class="team-name">John Pope</h6>
                                    <div class="team-role">Founder</div>
                                </div>
                                <div class="team-content-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-image"><img src="a_data/4_003.jpg" alt="">
                            <div class="team-wrap">
                                <div class="team-content">
                                    <h6 class="team-name">Sara Smith</h6>
                                    <div class="team-role">Designer</div>
                                </div>
                                <div class="team-content-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-image"><img src="a_data/5.jpg" alt="">
                            <div class="team-wrap">
                                <div class="team-content">
                                    <h6 class="team-name">Emma Connor</h6>
                                    <div class="team-role">Developer</div>
                                </div>
                                <div class="team-content-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-image"><img src="a_data/6_002.jpg" alt="">
                            <div class="team-wrap">
                                <div class="team-content">
                                    <h6 class="team-name">Peter Chapman</h6>
                                    <div class="team-role">Founder</div>
                                </div>
                                <div class="team-content-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-my="30px" style="margin-top: 30px;"></div>
                </div>
            </div>
            <div class="row" id="start">
                <div class="col-md-12">
                    <p class="text-center"><a class="btn btn-circle btn-outline-brand" href="#">About Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team end-->


    <!-- Clients-->
    <section class="module bg-gray p-t-0 p-b-40">
        <div class="container">
            <div class="space" data-my="-60px" style="margin-top: -60px;"></div>
            <div class="row">
                <div class="col-md-4 pricing-wrapper">
                    <div class="pricing-header">
                        <div class="pricing-icon"><i class="ti-slice"></i></div>
                        <div class="pricing-title">Basic</div>
                    </div>
                    <div class="pricing-price">Free</div>
                    <div class="pricing-body">
                        <p>Створіть резюме за допомогою шаблонів. Підходить для базових потреб та особистих
                            проектів.</p>
                    </div>
                    <div class="pricing-footer"><a class="btn btn-circle btn-brand" href="#">Безкоштовно</a></div>
                </div>
                <div class="col-md-4 pricing-wrapper pricing-popular">
                    <div class="pricing-header">
                        <div class="pricing-icon"><i class="ti-pin-alt"></i></div>
                        <div class="pricing-title">Standard</div>
                    </div>
                    <div class="pricing-price"><span>$</span>19.99</div>
                    <div class="pricing-body">
                        <p>Створіть професійне резюме з допомогою штучного інтелекту, що підбирає найкращі варіанти для
                            вашої спеціалізації.</p>
                    </div>
                    <div class="pricing-footer"><a class="btn btn-circle btn-brand" href="#">Підписатися</a></div>
                </div>
                <div class="col-md-4 pricing-wrapper">
                    <div class="pricing-header">
                        <div class="pricing-icon"><i class="ti-marker-alt"></i></div>
                        <div class="pricing-title">Professional</div>
                    </div>
                    <div class="pricing-price"><span>$</span>49.99</div>
                    <div class="pricing-body">
                        <p>Преміум функції: персонифікація резюме, аналіз ринку та адаптація під вакансії. Ідеально для
                            кар'єрного росту!</p>
                    </div>
                    <div class="pricing-footer"><a class="btn btn-circle btn-brand" href="#">Підписатися</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients end-->

    <!-- Counters-->
    <section class="module bg-gray p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="counter">
                        <div class="counter-icon"><img src="{{asset('image/customer-service.png')}}" alt="download"
                                                       width="50" height="50"></div>
                        <div class="counter-number">
                            <h6><strong class="counter-timer" data-from="0" data-to="1538">1,538</strong></h6>
                        </div>
                        <div class="counter-title">Задоволених клієнтів</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <div class="counter-icon"><img src="{{asset('image/diamond.png')}}" alt="diamond" width="55"
                                                       height="55"></div>
                        <div class="counter-number">
                            <h6><strong class="counter-timer" data-from="0" data-to="9534">9,534</strong></h6>
                        </div>
                        <div class="counter-title">Користувачів</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <div class="counter-icon"><img src="{{asset('image/checklist.png')}}" alt="checklist" width="50"
                                                       height="50"></div>
                        <div class="counter-number">
                            <h6><strong class="counter-timer" data-from="0" data-to="3128">3,128</strong></h6>
                        </div>
                        <div class="counter-title">Завершених проектів</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <div class="counter-icon"><img src="{{asset('image/download.png')}}" alt="download" width="50"
                                                       height="50"></div>
                        <div class="counter-number">
                            <h6><strong class="counter-timer" data-from="0" data-to="2124">2,124</strong></h6>
                        </div>
                        <div class="counter-title">Завантажень</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counters end-->

    <!-- Image-->
    <section class="module no-gutters p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><img src="{{asset('image/module-18.jpg')}}" alt=""></div>
            </div>
        </div>
    </section>
    <!-- Image end-->
@endsection
