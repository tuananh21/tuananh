<div class="content-1">
    <div class="grid wide">
        <div class="row">
            <div class="col l-8 m-12 c-12">
                <a href="">
                    <img src="https://bizweb.dktcdn.net/100/363/455/articles/trang-web-9c2872f3-c1e8-4f4d-8706-07845b72e362.png?v=1710132804897" alt="">
                </a>
                <div class="content-blog-1 main-content">
                    <h3 class="one">
                        <a href="" class="a-title">Cơ hội gặp gỡ một trong những nhà văn Pháp đương đại nổi tiếng nhất</a>
                    </h3>
                    <span style="font-size: 14px; color: #7B7B7D;">Thứ 3, 12/03/2024</s>
                </div>
            </div>
            <div class="col l-4 m-12 c-12">
                    <div class="blog-list">
                        <div class="item" style="padding-top: 0;">
                            <div class="item-blog">
                                <a href="" class="thumb">
                                    <img src="https://bizweb.dktcdn.net/100/363/455/articles/seo-2.png?v=1700487959943" alt="" class="img-blog">
                                </a>
                                <div class="content-blog-2">
                                    <h3 style="margin-bottom: 10px;">
                                        <a href="" title="5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay trong mùa">5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay trong mùa đông</a>
                                    </h3>
                                    <span style="font-size: 14px; color: #7B7B7D;">Thứ Hai, 20/11/2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-blog">
                                <a href="" class="thumb">
                                    <img src="https://bizweb.dktcdn.net/100/363/455/articles/seo-1.png?v=1700281321867" alt="" class="img-blog">
                                </a>
                                <div class="content-blog-2">
                                    <h3 style="margin-bottom: 10px;">
                                        <a href="" title="Khám phá bí mật làm thịt lợn quay bì giòn tại gia">Khám phá bí mật làm thịt lợn quay bì giòn tại gia</a>
                                    </h3>
                                    <span style="font-size: 14px; color: #7B7B7D;">Thứ Bảy, 18/11/2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-blog">
                                <a href="" class="thumb">
                                    <img src="https://bizweb.dktcdn.net/100/363/455/articles/nha-nam-website-3154da6f-42a3-4ff9-b4c5-f7b217989147.png?v=1699532816857" alt="" class="img-blog">
                                </a>
                                <div class="content-blog-2">
                                    <h3 style="margin-bottom: 10px;">
                                        <a href="" title="Những cuốn sách dành cho người hướng nội">Những cuốn sách dành cho người hướng nội</a>
                                    </h3>
                                    <span style="font-size: 14px; color: #7B7B7D;">Thứ Năm, 09/11/2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="border: none;">
                            <div class="item-blog">
                                <a href="" class="thumb">
                                    <img src="https://bizweb.dktcdn.net/100/363/455/articles/ban-do-cf.png?v=1698399264317" alt="" class="img-blog">
                                </a>
                                <div class="content-blog-2">
                                    <h3 style="margin-bottom: 10px;">
                                        <a href="" title="Sự thật ám ảnh về loại cafe đắt nhất thế giới">Sự thật ám ảnh về loại cafe đắt nhất thế giới</a>
                                    </h3>
                                    <span style="font-size: 14px; color: #7B7B7D;">Thứ Sáu, 27/10/2023</span>
                                </div>
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
          


