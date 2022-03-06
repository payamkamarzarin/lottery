<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت کاربران</title>
    <!-- chart -->
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-base.min.js"></script>
    <link href="http://cdn.kendostatic.com/2013.2.918/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2013.2.918/styles/kendo.default.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <main>
        <article>
            <!-- section main for index -->
            <section class="section-main">
                <div class="main-box">
                    <!-- parent box -->
                    <div class="parent-box">
                        <!-- aside setting person  -->
                        <div class="main-profile-sidebar">
                            <div class="p-sticky">
                                <!-- Profile -->
                                <div class="setting-person">
                                    <!-- profile vector -->
                                    <div class="profile-vector">
                                        <div class="image">
                                            <img src="/img/bg-person.svg" />
                                        </div>
                                        <!-- logo -->
                                        <div class="logo">
                                            <!-- <img src="img/CompanyLogo.svg" /> -->
                                        </div>
                                    </div>
                                    <!-- profile -->
                                    <div class="profile">
                                        <!-- image -->
                                        <div class="image">
                                            <img src="/img/person.svg" />
                                            <div class="status"></div>
                                        </div>
                                        <!-- user admin -->
                                        <div class="user-admin">
                                            <h5 class="user-name
                                                        mb-2">
                                                علی میرزایی
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- setting -->
                                    <div class="setting">
                                        <!-- icon 1 -->
                                        <div class="image p-3">
                                            <a href="{{route('logout')}}"><img src="/img/icon-logout.svg" /></a>
                                        </div>
                                        <!-- icon 2 -->
                                        <div class="image p-3">
                                            <img src="/img/icon-userProfile.svg" />
                                        </div>
                                        <!-- icon 3 -->
                                        <div class="image p-3">
                                            <img src="/img/lock.svg" />
                                        </div>
                                    </div>
                                </div>
                                <!-- SideBar -->
                                <div class="sidebar-scrollbar" id="scrollbar-sidebar">
                                    <div class="force-overflow"></div>
                                    <div class="div-sideBar">
                                        <div class="menu">
                                            <ul>
                                                <li class="main-menu active">
                                                    <div class="image">
                                                        <img src="/img/sidebar-icon/bg-icon.svg">
                                                    </div>
                                                    <div class="icon">
                                                        <img src="/img/sidebar-icon/icon.svg" />
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">مدیریت کاربران</a>
                                                    </div>
                                                    <div class="o_s_menu">
                                                        <img src="/img/sidebar-icon/arrow-down.svg">
                                                    </div>
                                                </li>
                                                <div class="sub-item sub-item-2 open-list">
                                                    <!-- ul sub item -->
                                                    <ul class="ul-item">
                                                        <!-- li sub item 1 -->
                                                        <li class="li-item">
                                                            <!-- circle linear gradient -->
                                                            <div class="circle"></div>
                                                            <!-- sub line -->
                                                            <div class="sub-line"></div>
                                                            <!-- text -->
                                                            <div class="text">
                                                                <a href="{{route('users.index')}}">همه کاربران</a>
                                                            </div>
                                                        </li>
                                                        <!-- li sub item 2 -->
                                                        <li class="li-item">
                                                            <!-- circle linear gradient -->
                                                            <div class="circle"></div>
                                                            <!-- sub line -->
                                                            <div class="sub-line"></div>
                                                            <!-- text -->
                                                            <div class="text">
                                                                <a href="{{route('users.create')}}">افزودن کاربران</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="line">
                                                </div>
                                            </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  main controll panel site  -->
                        <div class="main-article">
                            <!-- NavBar -->
                            <div class="nav">
                                <div class="icon-menu" id="show-menu" style="display: none;">
                                    <img src="/img/icon-menu.svg" alt="">
                                </div>
                                <div class="icon-close-menu" id="show-close-menu" style="display: none;">
                                    <img src="/img/icon-close-menu.svg" alt="" srcset="">
                                </div>
                                <!-- sub-item mobile -->
                                <div class="sub-item-mobile" style="display: none;">
                                    <div class="main-box" style="display: none;">
                                        <div class="sidebar-scrollbar" id="scrollbar-sidebar">
                                            <div class="force-overflow"></div>
                                            <div class="image person">
                                                <img src="/img/person.svg" alt="" />
                                            </div>
                                            <!-- setting person -->
                                            <div class="setting-person">
                                                <!-- ul list for menu -->
                                                <ul class="ul-list">
                                                    <!-- li -->
                                                    <li class="li-item">
                                                        <img src="/img/icon-logout.svg" alt="">
                                                    </li>
                                                    <!-- li -->
                                                    <li class="li-item">
                                                        <img src="/img/icon-userProfile.svg" alt="">
                                                    </li>
                                                    <!-- li -->
                                                    <li class="li-item">
                                                        <img src="/img/lock.svg" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- line horizontal -->
                                            <div class="line-horizontal"></div>
                                            <!-- ul list for menu -->
                                            <ul class="ul-list">
                                                <!-- list menu (1) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">داشبورد</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (2) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">مدیریت دسته بندی ها</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (3) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">مدیریت کاربران</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (4) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">مدیریت سفارشات</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (5) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <a href="">محصولات</a>
                                                        </div>
                                                        <div class="o_s_menu">
                                                            <img src="/img/sidebar-icon/arrow-down.svg">
                                                        </div>
                                                    </div>
                                                    <div class="sub-list">
                                                        <!-- ul sub item -->
                                                        <ul class="ul-item">
                                                            <!-- li sub item 1 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت محصولات</a>
                                                                </div>
                                                            </li>
                                                            <!-- li sub item 2 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت گارانتی</a>
                                                                </div>
                                                            </li>
                                                            <!-- li sub item 3 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت قیمت</a>
                                                                </div>
                                                            </li>
                                                            <!-- li sub item 4 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت تخفیفات</a>
                                                                </div>
                                                            </li>
                                                            <!-- li sub item 5 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت نظرات کاربران</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (6) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">مدیریت حسابداری</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (7) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">سوالات متداول</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (8) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <a href="">تنظیمات ادمین</a>
                                                        </div>
                                                        <div class="o_s_menu">
                                                            <img src="/img/sidebar-icon/arrow-down.svg">
                                                        </div>
                                                    </div>
                                                    <div class="sub-list">
                                                        <!-- ul sub item -->
                                                        <ul class="ul-item">
                                                            <!-- li sub item 1 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت اسلایدر</a>
                                                                </div>
                                                            </li>
                                                            <!-- li sub item 2 -->
                                                            <li class="li-item d-flex">
                                                                <!-- circle linear gradient -->
                                                                <div class="circle"></div>
                                                                <!-- sub line -->
                                                                <div class="sub-line"></div>
                                                                <!-- text -->
                                                                <div class="text">
                                                                    <a href="">مدیریت بنر</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <div class="line-horizontal"></div>
                                                <!-- list menu (9) -->
                                                <li class="li-list d-flex">
                                                    <div class="up-list d-flex">
                                                        <div class="image w-h-mobile">
                                                            <img src="/img/sidebar-icon/bg-icon.svg" alt="">
                                                        </div>
                                                        <div class="icon d-flex">
                                                            <img src="/img/sidebar-icon/icon.svg" alt="" />
                                                        </div>
                                                        <div class="text">
                                                            <a href="">درباره ما</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- routing page -->
                                <div class="router-page" id="hide-routing">
                                    <ul class="ul-router">
                                        <li>
                                            <a href="dashboard.blade.php" style="color: #90273a;">
                                                داشبورد
                                            </a>
                                        </li>
                                        <span class="slash">/</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Icons -->
                            </div>
                            <!-- routing page -->
                            <div class="router-page" id="show-routing" style="display: none;">
                                <ul class="ul-router">
                                    <li>
                                        <a href="dashboard.blade.php" style="color: #90273a;">
                                            داشبورد
                                        </a>
                                    </li>
                                    <span class="slash">/</span>
                                </ul>
                            </div>
                            <!-- status admin  -->
                            <!-- main card -->
                            <!-- main card -->
                            <div class="main-card mt-4">
                                <div class="control-box-main  position-relative">
                                    <!-- box info -->
                                    <div class="card-info w-100 text-center">
                                        <!-- title -->
                                        <div class="card-title">
                                            <h5>افزودن کاربر</h5>
                                        </div>
                                        <hr class="mt-0">
                                        <!-- filter -->
                                        <div class="box-filter d-flex justify-content-start mr-4 ml-4">
                                            <div class="border">
                                                <p>حذف فیلتر</p>
                                            </div>
                                        </div>
                                        <div class="box-filter table-detail mr-4 ml-4">
                                            <label>فرم افزودن کاربر</label>
                                        </div>
                                        <!-- table -->
                                        <div class="card-search">
                                            <form action="{{route('users.store')}}" method="post">
                                                @csrf
                                                <div style="display:flex;" >
                                                    <div class="search">
                                                        <input class="textbox control-text input-search" name="firstname" type="text">
                                                        <label class="textlabel" for="">نام:</label>
                                                    </div>
                                                    <div class="search">
                                                        <input class="textbox control-text input-search" name="lastname" type="text">
                                                        <label class="textlabel" for="">نام خانوادگی:</label>
                                                    </div>
                                                    <div class="search">
                                                        <input class="textbox control-text input-search" name="email" type="text">
                                                        <label class="textlabel" for="">:ایمیل</label>
                                                    </div>
                                                </div>
                                                <div style="display:flex;" >
                                                    <div class="search">
                                                        <input class="textbox control-text input-search" name="nationalcode" type="text">
                                                        <label class="textlabel" for="">کد ملی:</label>

                                                    </div>
                                                    <div class="search">
                                                        <input class="textbox control-text input-search" name="mobile" type="text">
                                                        <label class="textlabel" for="">تلفن همراه:</label>
                                                    </div>
                                                    <div class="search">
                                                        <input class="textbox control-text input-search" name="homephone" type="text">
                                                        <label class="textlabel" for="">تلفن ثابت:</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn-success p-2" type="submit">ثبت اطلاعات</button>
                                                </div>
                                                <br/>
                                            </form>
                                        </div>
                                        <!-- pagination -->
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <p>
                                    طراحی شده توسط تیم بک اند
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>


    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- fontawsome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- anychart -->
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-cartesian.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-base.min.js"></script>
    <script src="/js/chart.js"></script>
    <!-- datepicker -->
    <script src="/js/datepicker.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
