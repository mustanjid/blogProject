@extends('front.master')

@section('title', 'Blog')

@section('content')

    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Blog</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->

    <!-- Blog Main Area Start Here -->
    <div class="blog-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!-- Blog Wrapper Start -->
                    <div class="row">
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/1.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                            Available</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/2.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">The Standard Chunk Of Lorem Ipsum Used Since</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/3.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">The Standard Chunk Of Lorem Ipsum Used Since</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/4.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                            Available</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/5.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">The Standard Chunk Of Lorem Ipsum Used Since</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/6.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                            Available</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/7.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">The Standard Chunk Of Lorem Ipsum Used Since</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/8.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">The Standard Chunk Of Lorem Ipsum Used Since</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/9.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                            Available</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-custom mb-4">
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="blog.html">
                                        <img src="{{ asset('/') }}front/assets/images/blog/medium-size/10.jpg"
                                            alt="Blog Image">
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>14</span>
                                        <span>01</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Author: Obrien Demo Admin</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                            Available</a>
                                    </h2>
                                    <p class="desc-content">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <nav class="pagination pagination-wrap mb-10 mb-sm-0">
                                    <ul class="pagination">
                                        <li class="disabled prev">
                                            <i class="ion-ios-arrow-thin-left"></i>
                                        </li>
                                        <li class="active"><a>1</a></li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li class="next">
                                            <a href="#" title="Next >>"><i
                                                    class="ion-ios-arrow-thin-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-no-text">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Search</h3>
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search in blog"
                                            aria-label="Search Our Store">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-3">
                                <h3 class="widget-title">Blog Categories</h3>
                                <!-- Widget Menu Start -->
                                <nav>
                                    <ul class="mobile-menu p-0 m-0">
                                        <li class="menu-item-has-children"><a href="#">Breads</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Skateboard (02)</a></li>
                                                <li><a href="#">Surfboard (4)</a></li>
                                                <li><a href="#">Accessories (3)</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Fruits</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Samsome</a></li>
                                                <li><a href="#">GL Stylus (4)</a></li>
                                                <li><a href="#">Uawei (3)</a></li>
                                                <li><a href="#">Avocado (3)</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Vagetables</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Power Bank</a></li>
                                                <li><a href="#">Data Cable (4)</a></li>
                                                <li><a href="#">Avocado (3)</a></li>
                                                <li><a href="#">Brocoly (3)</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Organic Food</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Vagetables</a></li>
                                                <li><a href="#">Green Food (4)</a></li>
                                                <li><a href="#">Coconut (3)</a></li>
                                                <li><a href="#">Cabage (3)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list widget-mb-3">
                                <h3 class="widget-title">Tags</h3>
                                <div class="sidebar-body">
                                    <ul class="tags">
                                        <li><a href="#">Car</a></li>
                                        <li><a href="#">Parts</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Tayer</a></li>
                                        <li><a href="#">Seat</a></li>
                                        <li><a href="#">Engine</a></li>
                                        <li><a href="#">Parts</a></li>
                                        <li><a href="#">Fuel</a></li>
                                        <li><a href="#">Modern</a></li>
                                        <li><a href="#">Brake</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-4">
                                <h3 class="widget-title">Top Reads</h3>
                                <div class="sidebar-body">
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="{{ asset('/') }}front/assets/images/product/small-product/1.jpg"
                                                alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Product dummy name</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$80.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="{{ asset('/') }}front/assets/images/product/small-product/2.jpg"
                                                alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Product dummy
                                                        title</a></h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$50.00</span>
                                                <span class="old-price"><del>$60.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="{{ asset('/') }}front/assets/images/product/small-product/3.jpg"
                                                alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Product title here</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$40.00</span>
                                                <span class="old-price"><del>$50.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Main Area End Here -->
@endsection
