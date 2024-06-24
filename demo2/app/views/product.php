<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/demo2/app/asset/js/counter.js" defer></script>
    <title>Document</title>
</head>
<body>
<div class="container">
       <div class="child-container-1" style="height: 50px;">
            <div class="grid wide" style="margin-top: 5px;">
                    <a style="margin-left: 10px;" href="http://localhost/demo2/home/index">Trang chủ</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a style="margin-left: 10px;" href="https://nhanam.vn/">Sách mới xuất bản</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span style="color: #228b22;"><?= ($book['title']) ?></span>      
            </div> 
       </div>
       <div class="child-container-2">
            <div class="grid wide">
                <div class="row">
                    <div class="product col l-5 m-12 c-12">
                        <div class="product-image">
                            <a href="">
                            <img src="<?= ($book['image']) ?>" alt="Book Image" class="item-image">
                            </a>
                        </div>
                    </div>
                    <div class="product-detail col l-5 m-12 c-12">
                        <h1 class="title-head"><?= ($book['title']) ?></h1>
                        <div class="author">
                            Tác giả: &nbsp;
                            <a href="" class="text-transform"><?= ($book['author']) ?></a>
                        </div>
                        <div class="group-button">
                            <div class="price">
                                <div class="price-box-product">
                                    <span class="special-price">
                                        <span class="product-price"><?= ($book['price']) ?>₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span class="product-price-old"><?= ($book['oldprice']) ?>₫</span>
                                        <span class="discount">-15%</span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-product">
                                <div class="add-cart">
                                    <div class="custom-number">
                                        <div class="btn-number">
                                            <button type="button" class="btn-1" id="decreaseBtn">-</button>
                                            <div id="counter">1</div>
                                            <button type="button" class="btn-1" id="increaseBtn">+</button>
                                        </div>
                                        <span style="padding-left: 5px; font-size: 16px; color: #777777;">Còn lại 199 trong kho</span>
                                    </div>
                                    <div class="btn-mua">
                                        <form id="addToCartForm" method="POST" action="/demo2/product/addToCart/<?= $book['id'] ?>">
                                        <input type="hidden" name="quantity" id="quantity" value="1">
                                        <input type="submit" class="btn-2 btn-add" style="border: 1px solid;" value="Thêm vào giỏ hàng">
                                        <button type="button" class="btn-2 btn-buy" style="border: 1px solid;">Mua ngay</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="shop">
                                    <p style="padding: 0 15px 0 0;">Mua sách trên sàn TMĐT</p>
                                    <div class="social">
                                        <a href="https://www.lazada.vn/shop/nha-nam-tphcm1632821525/" class="social-btn" target="_blank">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/lazada-icon.png?1704690471681" alt="" class="social-icon">
                                        </a>
                                        <a href="https://shopee.vn/nhanam59" class="social-btn" target="_blank">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/shopee-icon.png?1704690471681" alt="" class="social-icon">
                                        </a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="child-content row">
                    <div class="col l-8 m-12 c-12">
                        <h4 class="title-tab">Giới thiệu sách</h4>
                        <div class="context">
                            <div class="data">
                                <div class="text">
                                    <?= ($book['description']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-12 c-12">
                        <div class="book-info">
                            <h2 class="title-tab">Thông tin chi tiết</h2>
                            <ul class="book-info-detail">
                                <li>
                                    <span class="span-1">Tác giả</span>
                                    <span class="span-2"><?= ($book['author']) ?></span>
                                </li>
                                <li>
                                    <span class="span-1">Dịch giả</span>
                                    <span class="span-2">Đang cập nhật</span>
                                </li>
                                <li>
                                    <span class="span-1">Nhà xuất bản</span>
                                    <span class="span-2">Đang cập nhật</span>
                                </li>
                                <li>
                                    <span class="span-1">Kích thước</span>
                                    <span class="span-2">Đang cập nhật</span>
                                </li>
                                <li>
                                    <span class="span-1">Số trang</span>
                                    <span class="span-2">Đang cập nhật</span>
                                </li>
                                <li>
                                    <span class="span-1">Ngày phát hành</span>
                                    <span class="span-2"><?= ($book['year']) ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="related-blog">
                            <h2 class="title-tab">
                                <a href="#" style="color: #228b22;">Giới thiệu sách Nhã Nam</a>
                            </h2>
                            <div class="blog-list">
                                <div class="item-2">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/seo-2.png?v=1700487959943" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay trong mùa đông</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Hai, 20/11/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-2">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/seo-1.png?v=1700281321867" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">Khám phá bí mật làm thịt lợn quay bì giòn tại gia</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Bảy, 18/11/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-2">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/nha-nam-website-3154da6f-42a3-4ff9-b4c5-f7b217989147.png?v=1699532816857" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">Những cuốn sách dành cho người hướng nội</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Năm, 09/11/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-2">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/ban-do-cf.png?v=1698399264317" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">Sự thật ám ảnh về loại cafe đắt nhất thế giới</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Sáu, 27/10/2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-2">
      <div class="grid wide container-2">
            <div class="title">
                <a href="" class="sub-title">Có thể bạn cũng thích</a>
                <a href="" class="sub">Xem thêm</a>
            </div>
            <div class="row">
            <?php foreach ($books as $book): ?>
            <div class="col l-2-4 m-4 c-6 blog">
            <div class="image-container">
              <a href="http://localhost/demo2/product/index/<?= ($book['id']) ?>" class="img-content-hover">
              <img src="<?= $book['image'] ?>" alt="Book Image">
              </a>
              <div class="action-cart">
                <a class="btn-add">
                  <i class="fa fa-shopping-bag"></i>
                </a>
                <a class="btn-buy">Mua ngay</a>
              </div>
            </div>
                <div class="image-info">
                <h3 class="product-name">
                    <a href=""><?= $book['title'] ?></a>
                </h3>
                <div class="price-box" style="border: none;">
                    <span class="price"><?= $book['price'] ?>₫</span>
                    <span class="compare-price"><?= $book['oldprice'] ?>₫</span>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
            </div>
            </div>
            </div>
    </div>    
</div>
</body>
</html>



    