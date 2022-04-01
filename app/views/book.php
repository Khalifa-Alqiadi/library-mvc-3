<?php
include "include/head.php";
include "include/nav.php";

?>

    <!-- Staet Hreo Section -->
    <section id="hero">
        <div class="hero container-fluid">
            <div class="hero-items d-flex flex-column justify-content-evenly">
                <div class="hero-header d-flex flex-row-reverse justify-content-between align-items-center">
                    <a class="card position-relative" href="../include/card.html">
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

    <!-- Start Book Page -->

    <section id="book" class="mt-5">
        <div class="book container-fluid">
            <div class="all-items-book d-flex flex-column justify-content-between align-items-center">
                <div class="book-header d-flex flex-column justify-content-between align-items-center">
                    <div class="bg-transparent border-0 text-end col-sm-11">
                        <span class="me-1 text-muted"><a href="" class="text-primary">الرئيسية</a>/</span>
                        <span class="me-1 text-muted"><a href="" class="text-primary">الكتب العربية</a>/</span>
                        <span class="me-1 text-muted"><a href="" class="text-primary">الكتب العربية</a>/</span>
                        <span class="me-1 text-muted"><a href="" class="text-primary">كتب الكترونية</a></span>
                    </div>
                    <div class="row row-cols-md-1 row-cols-xl-3">
                        <div class="col">
                            <div class="card d-flex flex-column align-items-center">
                                <div class="card-body">
                                    <img src="assets/images/c1.jpg" class="img-fluid w-100" alt="">
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <div class="buttom">
                                        <img src="assets/images/c1.jpg" alt="" class="click-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-1 w-100">
                                <div class="card-header text-end mb-0 bg-transparent border-0">
                                    <h1 class="mb-0 text-end">قصة (كتاب الكتروني)</h1>
                                    <p class="text-primary mt-0 fw-bold">عرض المزيد</p>
                                    <h2 class="text-danger mb-0 fs-1">17.99<span class="fs-5 text-danger">ر.س</span></h2>
                                    <p class="text-muted mb-0 fw-bold">شامل الضريبة</p>
                                </div>
                                <div class="card-body mt-0 d-flex flex-column align-items-end">
                                    <p class="m-0 text-muted">وحدة البيع Each</p>
                                    <p class="icons m-0">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <span class="text-primary">(15 المراجعات)</span>
                                    </p>
                                    <p class="text-muted mb-0">رقم الصنف 11111111 <span class="me-1">رقم المنتج 4</span></p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <h2 class="text-end m-0 fs-4">الصيغ المتوفرة</h2>
                                    <div class="card redio-1 p-0 border-0 d-flex justify-content-between flex-row">
                                        <div class="card-header position-relative m-0 p-0 bg-transparent border-0 d-flex align-items-center">
                                            <div class="mt-0"><span class="span "></span></div>
                                            <p class="fs-4 text-muted m-1">كتاب الكتروني <span class="text-muted">؟</span></p>
                                        </div>
                                        <div class="card-body p-0">
                                            <h1 class="fs-4 text-danger text-start me-4">17.99<span class="fs-6">ر.س</span></h1>
                                        </div>
                                    </div>
                                    <div class="card redio-2 p-0 border-0 d-flex justify-content-between flex-row">
                                        <div class="card-header position-relative m-0 p-0 bg-transparent border-0 d-flex align-items-center">
                                            <div class="mt-0"></div>
                                            <p class="fs-4 text-muted m-1">كتاب مطبوع</p>
                                        </div>
                                        <div class="card-body p-0">
                                            <h1 class="fs-4 text-danger text-start me-4">17.99<span class="fs-6">ر.س</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card m-0 d-flex flex-column align-items-center">
                                <div class="card-header text-end m-2">
                                    <h1 class="fs-4">ملاحظة: <span class="fs-5 text-muted">سيتم اضافة هذا الكتاب سيتم اضافة هذا الكتاب</span></h1>
                                    <a href="#" class="text-primary">اقرأ المزيد</a>
                                </div>
                                <div class="card-body w-100">
                                    <div class="card-title text-senter text-dark d-flex justify-content-evenly align-items-center">
                                        <select name="" id="" class=" p-2 m-auto bg-light border-0">
                                            <option class="" value="">1</option>
                                        </select>
                                        <h1 class="fs-5 rounded text-white bg-danger py-2 px-5 mt-0"><i class="fa fa-cart-arrow-down"></i> اضافةالى السلة</h1>
                                    </div>
                                    <ul class="d-flex flex-wrap justify-content-between">
                                        <li class="d-flex align-items-center me-4 text-muted">
                                            <i class="fa fa-star"></i>
                                            <p>تسوق امن</p>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="d-flex align-items-center me-4 text-muted">
                                            <i class="fa fa-star"></i>
                                            <p>تسوق امن</p>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="d-flex align-items-center me-4 text-muted">
                                            <i class="fa fa-star"></i>
                                            <p>تسوق امن</p>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer w-100 box bg-transparent border-top">
                                    <div class="col-sm-12 d-flex justify-content-between">
                                        <p class="p-2"><i class="fa fa-star"></i> مشاركة</p>
                                        <p class="p-2"><i class="fa fa-star"></i> المفضلة</p>
                                        <p class="p-2"><i class="fa fa-star"></i> مقارنة</p>
                                    </div>
                                </div>
                                <div class="card-footer mt-1 box w-100 bg-transparent border-top-0">
                                    <div class="col-sm-12 d-flex justify-content-between">
                                        <p class="p-2"><i class="fa fa-star"></i> مشاركة</p>
                                        <p class="p-2"><i class="fa fa-star"></i> المفضلة</p>
                                        <p class="p-2"><i class="fa fa-star"></i> مقارنة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book-details w-100 my-3 mx-auto p-1 border-bottom">
                        <div class="book-prog p-3 border-bottom border-top border-muted text-muted bg-light">
                            <p class="text-end">كتاب يتحدث عن قصص وحكايات قديمة جدا كتاب ممتع ومشوق</p>
                        </div>
                        <div class="book-info p-3 w-100">
                            <h1 class="fs-4 text-end mb-2">المواصفات</h1>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">رقم الصنف</p>
                                    <span class="fw-bold text-end col-sm-6">JBB410156</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">رقم المنتج</p>
                                    <span class="fw-bold text-end col-sm-6">4</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">المؤلف</p>
                                    <span class="fw-bold text-end col-sm-6">علي جابر الفيفي</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">الناشر</p>
                                    <span class="fw-bold text-end col-sm-6">دار الحضارة للنشر والتوزيع</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">تاريخ النشر</p>
                                    <span class="fw-bold text-end col-sm-6">2016</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-1">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">صيغة الكتاب</p>
                                    <span class="fw-bold text-end col-sm-6">Ebook</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">عدد الصفحات</p>
                                    <span class="fw-bold text-end col-sm-6">182</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">وزن الشحن (كجم) </p>
                                    <span class="fw-bold text-end col-sm-6">0.0100</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">صيغة الملف</p>
                                    <span class="fw-bold text-end col-sm-6">ePub</span>
                                </div>
                            </div>
                            <div class="menu-list p-1 border-bottom border-dark mb-2">
                                <div class="info d-flex justify-content-between align-items-center col-sm-11">
                                    <p class="text-muted">اللغة</p>
                                    <span class="fw-bold text-end col-sm-6">عربي</span>
                                </div>
                            </div>
                            <div class="view-less w-100 position-relative text-start rounded-bottom border-bottom border-dark ">
                                <p class="ms-3 text-primary fw-bold">عرض اقل</p>
                            </div>
                        </div>
                    </div>
                    <div class="rating p-3 border-bottom border-dark col-sm-11">
                        <div class="rating-header d-flex align-items-center p-1 col-sm-12">
                            <h1>مراجعات العملاء </h1>
                            <a class="p-1 fs-4 rounded bg-primary text-white me-1" href="#"><i class="fa fa-plus"></i> اكتب مراجعتك</a>
                        </div>
                        <div class="rating-body d-flex flex-column p-1 justify-content-between text-end">
                            <div class="all-rating">
                                <div class="commint p-2 w-100 bg-light">
                                    <h1 class="fs-4">Good</h1>
                                    <p class=" d-flex w-100 justify-content-between m-0">
                                        <span>من قبل نايف سمير</span>
                                        <span>2022/20/1</span>
                                    </p>
                                </div>
                                <p class="text-muted mt-1 mx-1 mb-3">Good</p>
                                <div class="commint p-2 w-100 bg-light">
                                    <h1 class="fs-4">رهيب</h1>
                                    <p class="d-flex w-100 justify-content-between m-0">
                                        <span>من قبل سلمان الوجية</span>
                                        <span>2022/20/1</span>
                                    </p>
                                </div>
                                <p class="text-muted mt-1 mx-1 mb-3">جميل جدا</p>
                                <div class="commint p-2 w-100 bg-light">
                                    <h1 class="fs-4">كتاب رائع</h1>
                                    <p class="d-flex w-100 justify-content-between m-0">
                                        <span>من قبل خليفة القياضي</span>
                                        <span>2022/20/1</span>
                                    </p>
                                </div>
                                <p class="text-muted mt-1 mx-1 mb-3">جميل جدا ومفيد</p>
                            </div>
                            <div class="view-rating w-100 rounded text-start position-relative">
                                <p class="ms-3 text-primary fw-bold">اظهار جميع المراجعات (15) </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-home d-flex flex-column justify-content-center p-1 m-0 position-relative col-sm-12">
                        <div class="content-header m-0 col-sm-11 me-4">
                            <h1 class="text-end">منتجات مشابهة</h1>
                        </div>
                        <div class="row d-flex flex-wrap col-sm-12">
                            <div class="card col-sm-2 d-flex flex-column align-items-center">
                                <div class="card-header bg-transparent border-0 pt-0 d-flex flex-column align-items-center">
                                    <img src="assets/images/c1.jpg " class="img-fluid" alt="">
                                    <a href="book.html" class="fs-4 w-100 text-center"> كتاب الكتروني</a>
                                </div>
                                <div class="card-body">
                                    <h1 class="fs-4 text-danger">17.99<span class="fs-5">ر.س</span></h1>
                                    <p>شامل الضريبة</p>
                                </div>
                            </div>
                            <div class="card col-sm-2 d-flex flex-column align-items-center">
                                <div class="card-header bg-transparent border-0 pt-0 d-flex flex-column align-items-center">
                                    <img src="assets/images/c1.jpg " class="img-fluid" alt="">
                                    <a href="book.html" class="fs-4 w-100 text-center"> كتاب الكتروني</a>
                                </div>
                                <div class="card-body">
                                    <h1 class="fs-4 text-danger">17.99<span class="fs-5">ر.س</span></h1>
                                    <p>شامل الضريبة</p>
                                </div>
                            </div>
                            <div class="card col-sm-2 d-flex flex-column align-items-center">
                                <div class="card-header bg-transparent border-0 pt-0 d-flex flex-column align-items-center">
                                    <img src="assets/images/c1.jpg " class="img-fluid" alt="">
                                    <a href="book.html" class="fs-4 w-100 text-center"> كتاب الكتروني</a>
                                </div>
                                <div class="card-body">
                                    <h1 class="fs-4 text-danger">17.99<span class="fs-5">ر.س</span></h1>
                                    <p>شامل الضريبة</p>
                                </div>
                            </div>
                            <div class="card col-sm-2 d-flex flex-column align-items-center">
                                <div class="card-header bg-transparent border-0 pt-0 d-flex flex-column align-items-center">
                                    <img src="assets/images/c1.jpg " class="img-fluid" alt="">
                                    <a href="book.html" class="fs-4 w-100 text-center"> كتاب الكتروني</a>
                                </div>
                                <div class="card-body">
                                    <h1 class="fs-4 text-danger">17.99<span class="fs-5">ر.س</span></h1>
                                    <p>شامل الضريبة</p>
                                </div>
                            </div>
                            <div class="card col-sm-2 d-flex flex-column align-items-center">
                                <div class="card-header bg-transparent border-0 pt-0 d-flex flex-column align-items-center">
                                    <img src="assets/images/c1.jpg " class="img-fluid" alt="">
                                    <a href="book.html" class="fs-4 w-100 text-center"> كتاب الكتروني</a>
                                </div>
                                <div class="card-body">
                                    <h1 class="fs-4 text-danger">17.99<span class="fs-5">ر.س</span></h1>
                                    <p>شامل الضريبة</p>
                                </div>
                            </div>
                            <div class="card col-sm-2 d-flex flex-column align-items-center">
                                <div class="card-header bg-transparent border-0 pt-0 d-flex flex-column align-items-center">
                                    <img src="assets/images/c1.jpg " class="img-fluid" alt="">
                                    <a href="book.html" class="fs-4 w-100 text-center"> كتاب الكتروني</a>
                                </div>
                                <div class="card-body">
                                    <h1 class="fs-4 text-danger">17.99<span class="fs-5">ر.س</span></h1>
                                    <p>شامل الضريبة</p>
                                </div>
                            </div>
                        </div>
                        <div class="show-more">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="model-img">
        <div class="mod">
            <p class="popup-close-icon">&times;</p>
            <div class="img-loop  img-step img-active">
                <img class="" src="assets/images/c1.jpg" alt="">
                <div class="share-right"></div>
            </div>
            <div class="img-loop img-step">
                <img class="" src="assets/images/c1.jpg" alt="">
                <div class="share-left"></div>
                <div class="share-right"></div>
            </div>
            <div class="img-loop img-step">
                <img class="" src="assets/images/c1.jpg" alt="">
                <div class="share-left"></div>
            </div>
        </div>
    </div>

    <!-- End Book Page -->
    <script src="assets/js/book.js"></script>
</body>

</html>