@extends('Home.Master.master')
@section('noidung')
<section class="product-details spad"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="http://localhost/blog/public/img/product/details/{{$product->hinhanh}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <form action="{{route('cart.add')}}" method="post">
                    @csrf
                    <div class="product__details__text">
                        <h3>{{$product->tensp}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product__details__price">{{$product->gia}}</div>
                        <p>{{$product->mota}}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="qty">
                                </div>
                            </div>
                        </div>
                        
                        <input type="hidden" name="id_product" value="{{$product->masp}}">
                        <Button type="submit" class="primary-btn">Thêm vào giỏ hàng</Button>
                        
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Khả dụng </b> <span>trong kho</span></li>
                            <li><b>Vận chuyển </b> <span>01 ngày vận chuyển . <samp>Nhận miễn phí hôm nay </samp></span></li>
                        
                            <li><b>Chia sẻ</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Miêu tả </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                aria-selected="false">Thông tin </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                aria-selected="false">Nhận xét  <span>(1)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Thông Tin Sản Phẩm</h6>
                                <p>Cây cảnh là một viên minh châu trong lâm viên của Trung Quốc, có lịch sử lâu đời và rất được mọi người yêu thích.

                                    Nghệ thuật cây cảnh chính là sự kết hợp giữa kỹ thuật trồng và tạo dáng cây cảnh, đồng thời là sự hòa hợp giữa vẻ đẹp tự nhiên và vẻ đẹp nghệ thuật.
                                     Cây cảnh lấy thực vật, nước, đá.... làm vật liệu, được gia công nghệ thuật và chăm sóc tỉ mỉ
                                     thông qua bàn tay và khối óc của các nghệ nhân làm vườn. Nó bắt nguồn từ tự nhiên,
                                     từ cuộc sống nhưng cao hơn tự nhiên, cao hơn cuộc sống.
                                     chẳng hạn như hình ảnh con rồng qua bàn tay các nghệ nhân được thu nhỏ lại trong chiếc chậu bé xíu,
                                      tái hiện những thắng cảnh của tự nhiên bao la..</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Thông Tin Sản Phẩm </h6>
                                <p>>Cây cảnh là một viên minh châu trong lâm viên của Trung Quốc, có lịch sử lâu đời và rất được mọi người yêu thích.

                                    Nghệ thuật cây cảnh chính là sự kết hợp giữa kỹ thuật trồng và tạo dáng cây cảnh, đồng thời là sự hòa hợp giữa vẻ đẹp tự nhiên và vẻ đẹp nghệ thuật.
                                     Cây cảnh lấy thực vật, nước, đá.... làm vật liệu, được gia công nghệ thuật và chăm sóc tỉ mỉ
                                     thông qua bàn tay và khối óc của các nghệ nhân làm vườn. Nó bắt nguồn từ tự nhiên,
                                     từ cuộc sống nhưng cao hơn tự nhiên, cao hơn cuộc sống.
                                     chẳng hạn như hình ảnh con rồng qua bàn tay các nghệ nhân được thu nhỏ lại trong chiếc chậu bé xíu,
                                      tái hiện những thắng cảnh của tự nhiên bao la..</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!--<div class="blog__details__content">
    <div class="row">
        <div class="col-lg-6">
            <div class="blog__details__author">
                <div class="blog__details__author__pic">
                    src="http://localhost/blog/public/img/product/{{$product->hinhanh}}">
                </div>
                <div class="blog__details__author__text">
                    <h6>Michael Scofield</h6>
                    <span>Admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="blog__details__widget">
                <ul>
                    <li><span>Categories:</span> Food</li>
                    <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                </ul>
                <div class="blog__details__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- Blog Details Section Begin -->
<!--<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 order-md-1 order-2">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">All</a></li>
                            <li><a href="#">Beauty (20)</a></li>
                            <li><a href="#">Food (5)</a></li>
                            <li><a href="#">Life Style (9)</a></li>
                            <li><a href="#">Travel (10)</a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Recent News</h4>
                        <div class="blog__sidebar__recent">
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Search By</h4>
                        <div class="blog__sidebar__item__tags">
                            <a href="#">Apple</a>
                            <a href="#">Beauty</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Fruit</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Lifestyle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text">
                    <img src="img/blog/details/details-pic.jpg" alt="">
                    <p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                        dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit
                        aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur
                        sed, convallis at tellus. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.
                        Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada
                        feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                    <h3>The corner window forms a place within a place that is a resting point within the large
                        space.</h3>
                    <p>The study area is located at the back with a view of the vast nature. Together with the other
                        buildings, a congruent story has been managed in which the whole has a reinforcing effect on
                        the components. The use of materials seeks connection to the main house, the adjacent
                        stables</p>
                </div>
                <div class="blog__details__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog__details__author">
                                <div class="blog__details__author__pic">
                                    <img src="img/blog/details/details-author.jpg" alt="">
                                </div>
                                <div class="blog__details__author__text">
                                    <h6>Michael Scofield</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog__details__widget">
                                <ul>
                                    <li><span>Categories:</span> Food</li>
                                    <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                </ul>
                                <div class="blog__details__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            @endsection 