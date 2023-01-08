<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('orders/plugins/fontawesome/css/all.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="a.css">
    <title>Order</title>
</head>

<body>

    <div class="wrapper">
        <div class="menu-order">
            <ul type="none">
                <li><a href="order" class="active">Tất cả</a></li>
                <li><a href="cholayhang">Chờ lấy hàng</a></li>
                <li><a href="danggiao">Đang giao</a></li>
                <li><a href="dagiao">Đã giao</a></li>
                <li><a href="dahuy">Đã hủy</a></li>
                <li><a href="trahang">Trả hàng/Hoàn Tiền</a></li>
            </ul>
        </div>
        <div class="search-order">
            <div>
                <input class="input-search" type="text" placeholder="Tìm kiếm theo mã đơn hàng hoặc Tên Sản phẩm">
            </div>
            <div class="order-bottom-left">
                <div><a href="#" class="btn btn-success">Tìm Kiếm</a></div>
            </div>
        </div>

        <div class="order">
            <div class="list-order">
                <div class="list-order-count-donhang">10 Đơn Hàng</div>
                <div class="list-order-info">
                    <div class="order-list-top">
                        <div class="order-list-top-title title1 ">Sản Phẩm</div>
                        <div class="order-list-top-title title2">Tổng cộng</div>
                        <div class="order-list-top-title title2">Trạng Thái</div>
                        <div class="order-list-top-title title2">ĐVVC</div>
                        <div class="order-list-top-title title2">Thao tác</div>
                    </div>
                    <!-- start khi dùng api
                    <div id="list" class="list"></div>
                    end khi ko dùng -->
                    @foreach ($orders as $key=>$value)
                        <div class="order-content">
                        <div class="order-top">
                            <div class="shop">
                                <div class="avt-shop"><img src="{{asset('public/frontend/img/O1CN01CkHsHe1GczqFAjRmF_!!2206710620644-0-cib.jpg')}}" alt="" width="30px">
                                </div>
                                <div class="shopname">Tên Khách Hàng</div>
                            </div>
                            <div class="order-status">
                                <p><span><i class="fa-solid fa-truck"></i></span>Mã Đơn Hàng: 1</p>
                            </div>
                        </div>
                        <div class="order-center">
                            <div class="product-order">
                                <div class="order-center-left title1">
                                    <div class="img-product">
                                        <a href="#"><img src="{{asset('public/frontend/img/sp1.jpg')}}" alt="" width="60px" height="60px"></a>
                                    </div>
                                    <div class="info-product">
                                        <div class="info-product-item">
                                            <div class="name-product">
                                                <a href="#">
                                                    <p>Tên sản phẩm </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amount-product">
                                            <p>x1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-center-right title2">
                                    <p>200.000đ</p>
                                </div>
                                <div class="order-center-right  title2">
                                    <p>Chờ Lấy Hàng</p>
                                </div>
                                <div class="order-center-right title2">
                                    <p>Nhanh</p>
                                </div>
                                <div class="order-center-right title2">
                                    <a href="#">Chi tiết đơn hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                 
                </div>
            </div>

        </div>
        {{-- <link rel="stylesheet" href="{{asset('public/frontend/a.css')}}"> --}}

        <script src="{{asset('public/frontend/api.js')}}"></script>

</body>

</html>
