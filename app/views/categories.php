<?php
include "include/head.php";
include "include/nav.php";

?>
<!-- Staet Hreo Section -->
<section id="hero">
        <div class="hero container-fluid">
            <div class="hero-items d-flex flex-column justify-content-evenly">
                <div class="hero-header d-flex flex-row-reverse justify-content-between align-items-center">
                    <a class="card position-relative" href="/include/card.html">
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

    <!-- Start Categories Page -->

    <section id="category">
        <div class="category container-fluid">
            <div class="category-items">
                <div class="col-md-right">
                    <div class="card-header">
                        <span><a href="">الرئيسية</a>/</span>
                        <span><a href="">الكتب العربية</a>/</span>
                        <span><a href="">كتب الكترونية</a></span>
                    </div>
                    <div class="card-body">
                        <h1>كتب إلكترونية</h1>
                        <div class="info">
                            <h2>تصفية النتائج</h2>
                            <div class="list">
                                <div class="himber"><div class="bar"></div></div>
                                <p>علامة تجارية</p>
                            </div>
                            <div class="list">
                                <div class="himber"><div class="bar"></div></div>
                                <p>السعر</p>
                            </div>
                            <div class="price">
                                <div class="price-info1">
                                    <span class="span1"></span>
                                    <span class="span2"></span>
                                </div>
                                <div class="price-info2">
                                    <span>ر.س0</span>
                                    <span>ر.س.150</span>
                                </div>
                            </div>
                            <div class="list">
                                <div class="himber"><div class="bar"></div></div>
                                <p>صيغة الكتاب</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-left">
                    <div class="content-home">
                        <div class="content-header">
                            <p>الترتيب بحسب</p>
                            <select name="" id="choose">
                                <option value="">الرجاء الاختيار</option>
                                <option value="words">مطبوع</option>
                            </select>
                        </div>
                        <div class="all-items row cols-1 row-cols-md-4 row-cols-sm-2">
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                            <div class="col">
                                <div class="card mb-2 d-flex flex-column align-items-center justify-content-between">
                                    <div class="card-header bg-transparent border-0 py-0 px-4">
                                        <img class="img-fluid mx-auto d-block " src="assets/images/c1.jpg" alt="slide 1">
                                    </div>
                                    <div class="card-body text-end my-0 p-0 d-flex flex-column align-items-center">
                                        <a href="book" class="fs-5 fw-bold text-dark my-0"><i
                                                class="fa fa-book text-danger"></i> كتاب الكتروني</a>
                                        <p class="my-0 mb-1 fw-bold text-muted">كبريا وهوى (كتاب الكتروني) </p>
                                        <div class="d-flex flex-column align-items-center border border-0">
                                            <h1 class="fs-2  m-0  border-0">17.99<span class="text-danger fs-5">ر.س</span></h1>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Categories Page -->
    <script src="assets/js/app.js"></script>
</body>
</html>