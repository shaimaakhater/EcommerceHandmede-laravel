@extends('layouts.master')

@section('content')
<div id="all">
      <div id="content">
        <div class="container"style="height: 600px;width:1500px">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"style="height: 600px;width: 1500px;"><img src="{{asset('panal/img/img1/getinspired1.jpg')}}" alt="" class="img-fluid" style="height: 800px;width:1500px"></div>
                <div class="item"style="height: 600px;width:1500px"><img src="{{asset('panal/img/img1/nn.jpg')}}" alt="" class="img-fluid"style="height: 800px;width:1500px"></div>
                <div class="item"style="height: 600px;width:1500px"><img src="{{asset('panal/img/img1/hi.jpg')}}" alt="" class="img-fluid"style="height: 800px;width:1500px"></div>
                <div class="item"style="height: 600px;width:1500px"><img src="{{asset('panal/img/img1/images%20(4).jpg')}}" alt="" class="img-fluid"style="height: 800px;width:1500px"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
<
        *** ADVANTAGES HOMEPAGE ***
<
        _________________________________________________________
        -->
          <br>
          <br>
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Hot this week</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="{{asset('panal/img/img1/hh2.jpg')}}" alt="" class="img-fluid"style=" height:  215px; width: 250px"></a></div>
                      <div class="back"><a href="detail.html"><img src="img1/hh2.jpg" alt="" class="img-fluid" style="height:215px;width: 250px"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img1/hh2.jpg" alt="" class="img-fluid"style="height: 215px;width: 250px"></a>
                  <div class="text">
                    <h3><a href="detail.html">Baby Blue Bag </a></h3>
                    <p class="price"> 
                      <del></del>$15.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="{{asset('panal/img/img1/g.jpg')}}" alt="" class="img-fluid" ></a></div>
                      <div class="back"><a href="detail.html"><img src="img1/g.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img1/g.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Short Crochet Dress</a></h3>
                    <p class="price"> 
                      <del>$40</del>$30.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="{{asset('panal/img/img1/hm55.jpg')}}" alt="" class="img-fluid" style="height: 215px;width: 250px"></a></div>
                      <div class="back"><a href="detail.html"><img src="img1/hm55.jpg" alt="" class="img-fluid"style="height:215px;width: 250px"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img1/hm55.jpg" alt="" class="img-fluid"style="height:215px;width: 250px"></a>
                  <div class="text">
                    <h3><a href="detail.html">Mobile Cover</a></h3>
                    <p class="price"> 
                      <del></del>$5.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                     <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html" style="width:250px;height:215px"><img src="{{asset('panal/img/img1/hm7.jpeg')}}" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="{{asset('panal/img/img1/hm7.jpeg')}}" alt="" class="img-fluid"style="width:250px;height:215px"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img1/hm7.jpeg" alt="" class="img-fluid"style="width:250px;height:215px"></a>
                  <div class="text">
                    <h3><a href="detail.html">Love Letter</a></h3>
                    <p class="price"> 
                      <del></del>$3.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                     <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="{{asset('panal/img/img1/h3.jpg')}}" alt="" class="img-fluid"style="width:250px;height:215px"></a></div>
                      <div class="back"><a href="detail.html"><img src="{{asset('panal/img/img1/h3.jpg')}}" alt="" class="img-fluid"style="width:250px;height:215px"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img1/h3.jpg" alt="" class="img-fluid"style="width:250px;height:215px"></a>
                  <div class="text">
                    <h3><a href="detail.html">Princess Earring</a></h3>
                    <p class="price"> 
                      <del></del>$5.00
                    </p>
                  </div>
                  <!-- /.text-->
                  
                  <!-- /.ribbon-->
                </div>
                    <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                                    

             
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
               
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container"style="width:1500px;height:500px">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Be Different</h3>
              <p class="lead"> Find Elegance And Beauty</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="{{asset('panal/img/img1/oo.jpeg')}}" alt="Get inspired" class="img-fluid" style="width:1500px;height:500px"></a></div>
                <div class="item"><a href="#"><img src="{{asset('panal/img/img1/l.jpg')}}" alt="Get inspired" class="img-fluid" style="width:1500px;height:500px"></a></div>
                <div class="item"><a href="#"><img src="{{asset('panal/img/img1/j.jpg')}}" alt="Get inspired" class="img-fluid"style="width:1500px;height:500px"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">From our blog</h3>
              <p class="lead mb-0">What's new in the world of fashion? <a href="blog.html">Check our blog!</a></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Fashion now</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Who is who - example blog post</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>

@endsection