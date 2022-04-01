
<?php
include "include/head.php";
include "include/nav.php";

?>
<!-- Staet Hreo Section -->
    <section id="hero">
        <div class="hero container-fluid">
            <div class="hero-items d-flex flex-column justify-content-evenly">
                <div class="hero-header d-flex flex-row-reverse justify-content-between align-items-center">
                    <a class="card position-relative" href="cart">
                        <div class="num position-absolute bg-danger rounded-circle d-flex justify-content-center align-items-center fw-bold text-white" id="num"></div>
                        <i class="fa fa-cart-arrow-down fs-1"></i>
                    </a>
                    <div class="form col-sm-9 d-flex justify-content-center">
                        <div class="form-control position-relative border-0">
                            <input type="search" class="p-3 border-0">
                            <button type="submit"><i class="fa fa-search fs-2 text-muted"></i></button>
                        </div>
                    </div>
                    <img src="assets/images/icon1.png" alt="">
                </div>
                <div class="hero-slider">
                    <input type="radio" name="slider">
                    <div class="slider">
                        <img src="assets/images/na1.jpg" alt="">
                    </div>
                    <input type="radio" name="slider">
                    <div class="slider">
                        <img src="assets/images/na2.jfif" alt="">
                    </div>
                    <input type="radio" name="slider">
                    <div class="slider">
                        <img src="assets/images/na3.jfif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Categories Section -->
    <section id="categories">
        <div class="categories container-fluid flex-column justify-content-between p-3 ">
            <h1 class="text-end w-90 text-dark mb-1">تصفح حسب القسم</h1>
            <div class="all-categories position-relative d-flex flex-wrap justify-content-around w-90">
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-tv text-white fs-2 me-2"></i>
                    </div>
                    <p class="fs-4 fw-bold">دين</p>
                </a>
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons bg-warning rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-clock text-white fs-2 me-2"></i>
                    </div>
                    <p class="text-warning fs-4 fw-bold">تاريخ</p>
                </a>
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-keyboard text-white fs-2 me-2"></i>
                    </div>
                    <p class="fs-4 fw-bold">روايات</p>
                </a>
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons bg-info rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-tv text-white fs-2 me-2"></i>
                    </div>
                    <p class="text-info fs-4 fw-bold">سياسة</p>
                </a>
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-tv text-white fs-2 me-2"></i>
                    </div>
                    <p class="fs-4 fw-bold">اقتصاد</p>
                </a>
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons bg-success rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-tv text-white fs-2 me-2"></i>
                    </div>
                    <p class="text-success fs-4 fw-bold">طبخ</p>
                </a>
                <a href="categories"
                    class="item m-2 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="icons rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa fa-tv text-white fs-2 me-2"></i>
                    </div>
                    <p class="fs-4 fw-bold">تربية</p>
                </a>
            </div>
        </div>
    </section>
    <!-- End Categories Section -->

    <!-- Start Ads Section -->

    <section id="ads">
        <div class="ads container-fluid p-5">
            <div class="all-ads d-flex flex-column justify-content-around align-items-center w-100 vh-50">
                <div class="ads-header d-flex flex-wrap justify-content-around align-items-center w-100 h-60">
                    <img src="assets/images/ad3.webp" alt="">
                    <img src="assets/images/ad4.webp" alt="">
                    <img src="assets/images/ad5.webp" alt="">
                    <img src="assets/images/ad6.webp" alt="">
                </div>
                <div class="ads-footer w-100 mt-5">
                    <img src="assets/images/na1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- End Ads Section -->

    <!-- Start Countdown Section -->
    <section id="content-body">
        <div class="content-body container-fluid d-flex flex-column p-4 mt-3">
            <div class="content-home conutdown d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>العروض الحالية</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="/book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="content-home d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>الكتب الدينية</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="content-home d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>الكتب التأريخية</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="content-home d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>السياسة</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="content-home d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>الاقتصاد</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="content-home d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>الطبخ</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="content-home d-flex flex-column align-items-center position-relative mb-5 w-100">
                <div class="content-header w-100 d-flex justify-content-between align-items-center mb-3">
                    <h1>افضل الروايات الرومانسية</h1>
                    <a href="#" class="text-primary">عرض الكل</a>
                </div>
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
                    <div class="carousel-inner row w-100 mx-auto flex-nowrap justify-content-evenly align-items-center"
                        role="listbox">
                        <div class="carousel-item col-md-2 active ">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-2">
                            <div class="card d-flex flex-column align-items-center justify-content-between">
                                <div class="card-header bg-transparent border-0 py-0 px-4">
                                    <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                </div>
                                <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                    <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                            class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                    <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                    <div class="price d-flex flex-column align-items-center">
                                        <h1 class="fs-2  m-0">17.99<span class="text-danger">ر.س</span></h1>
                                        <p class="mb-1 text-muted">شامل الضريبة</p>
                                        <p class="text-muted fw-bold my-0">صيغ اخرى <span class="text-primary">كتاب
                                                مطبوع</span></p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer my-0 d-flex align-items-center justify-content-between bg-transparent border-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-cart-arrow-down fa-cart bg-danger p-3 text-white fs-4 rounded-circle"
                                        id="fa-cart"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z" />
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Countdown Section -->

<?php include "include/footer.php"; ?>