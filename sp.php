<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
   <link rel="stylesheet" href="sp.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
    <div >header</div>
    <div class="wrapper">
        <div class="fusion-page" role="banner">
            <div class="fusion-page-title">
                <span><a href="">Home</a></span>
                <span>></span>
                <span><a href="">Kính Chính Hãng,Kính Râm</a></span>
                <span>></span>
                <span>KÍNH RÂM THỜI TRANG REEMAN 19919 C1 GỌNG GHI MẮT ĐEN</span>
            </div>
        </div>
        <div class="main">
            <div class="top-main">
                <div class="image">
                    <div class="top-image">
                        <img class="mySlides" src="./img/img1.png">
                        <img class="mySlides" src="./img/img2.jpg">
                        <img class="mySlides" src="./img/img3.png">
                        <button class="image-button button-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="image-button button-right" onclick="plusDivs(1)">&#10095;</button>       
                        <script class="script">
                            var slideIndex = 1;
                            showDivs(slideIndex);
                            
                            function plusDivs(n) {
                              showDivs(slideIndex += n);
                            }
                            
                            function showDivs(n) {
                              var i;
                              var x = document.getElementsByClassName("mySlides");
                              if (n > x.length) {slideIndex = 1}
                              if (n < 1) {slideIndex = x.length}
                              for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";  
                              }
                              x[slideIndex-1].style.display = "block";  
                            }
                            </script>      
                    </div>
                    <div class="bot-image">
                        <div >
                            <img src="./img/img1.png" width="100px" height="100px" alt="">
                        </div>
                        <div >
                            <img src="./img/img2.jpg" width="100px" height="100px" alt="">
                        </div>
                        <div >
                            <img src="./img/img3.png" width="100px" height="100px" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="content">
                    <h3>KÍNH RÂM THỜI TRANG CAO CẤP RM3203 C1 GỌNG ĐEN MẮT ĐEN</h3>
                    <p>Kính râm thời trang RM3203 C1 là mẫu sản phẩm được thiết kế độc quyền bởi Ree-man. RM3203 được thiết kế bởi chất liệu nhựa cao cấp bền bỉ với thời gian, mang đến những trải nghiệm độc đáo như: giá trị sử dụng lâu dài, mặt kính bóng đẹp, khó bị gỉ, chống chịu tốt bởi tác động của môi trường, …
    
                        Ngoài ra, các kích thước của kính được thiết kế tối ưu với gương mặt Việt. Phần cầu kính có chiều rộng đạt chuẩn, cân đối dáng kính, đồng thời giúp người sử dụng nhìn đúng trọng tâm.</p>
                        <span>Tình trạng: Còn hàng</span><br>
                        <div class="price">
                            <p>Giá:</p><br>
                            <span class="old-price gia">550.000 Đ</span>
                            <span class="new-price gia">385.000 Đ</span>
                        </div>   <br>
                   <form class="cart">
                    <div class="quantity">
                        <input type="button" value="-" class="minus box">
                        <input type="number" class="number box">
                        <input type="button" value="+" class="plus box">
                    </div>
                    <button type="submit" class="submit">Thêm vào giỏ hàng</button>
                   </form>      <br><br>
                   <div class="button">
                    <button class="mua">mua ngay</button>
                   </div>
                   <div class="textwidget">
                    <ul>
                        <li class="freeship icon">
                            <span class="icon-img"><i class="fa fa-car"></i></span>
                            <h3>
                                MIỄN PHÍ GIAO HÀNG TOÀN QUỐC 
                                <span class="text">  Với tất cả các đơn hàng có giá trị trên 400,000đ </span>
                            </h3>
                        </li>
                        <li class="chinhsach icon"> 
                            <span class="icon-img"><i class="fa fa-exchange"></i></span>
                            <h3>
                                CHÍNH SÁCH ĐỔI TRẢ DỄ DÀNG
                                <span class="text">Đổi trả 7 ngày với gọng kính, bảo hành 1 năm về thay ốc ve, nắn chỉnh gọng</span>
                            </h3>
                        </li>
                        <li class="tongdai icon">
                            <span class="icon-img"><i class="fa fa-phone-square"></i></span>
                            <h3>
                                TỔNG ĐÀI HỖ TRỢ 0904.915.377
                                <span class="text">Chúng tôi luôn sẵn lòng giải đáp mọi câu hỏi</span>
                            </h3>
                        </li>
                        <li class="hdmua">
                            <span><i class=" fa fa-file-text-o"></i></span>
                            <a href="">Hướng dẫn mua hàng</a>
                        </li>
                    </ul>
                   </div>
                </div>
            </div>
        
            <div class="bottom-main">
                <div class="table">
                    <table>
                        <tbody>
                            <tr class="item">
                                <td class="item-text">
                                    <span>Chất liệu</span><br>
                                    <p>nhựa cao cấp</p>
                                </td>
                                <td class="item-text"> 
                                    <span>Kiểu dáng</span><br>
                                    <p>Phi công</p>
                                </td>
                                <td class="item-text">
                                    <span>Giới tính</span><br>
                                    <p>Nam, Nữ</p>
                                </td>
                                <td class="item-text">
                                    <span>MÀU</span><br>
                                    <p>Gọng Ghi Mắt Đen</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="features">
                    <h3>ĐẶC ĐIỂM NỔI BẬT</h3><br>
                    <h4>Kính Râm Thời Trang RM3203 C1 Gọng Đen Mắt Đen</h4><br>
                    <div>
                        <ul type="circle">
                        <li>Đây là mẫu kính râm đẹp HOT năm 2022</li>
                        <li>Màu sắc: Gọng đen mắt đen</li>
                        <li>Full viền kính là nhựa, tròng kính là Polycacbonat dẻo mảnh.</li>
                        <li>Dáng kính vuông to, tròng kính 0 độ chống UV400.</li>
                        <li>Có thể cắt thêm kính râm cận.</li>
                        <li>Phụ kiện thời trang phù hợp với mọi lứa tuổi.</li>
                        <li>Chất liệu nhựa bền, tiếp xúc với mồ hôi không lo bị bám mùi.</li>
                        <li>Phù hợp với đa số kiểu khuôn mặt.</li>
                    </ul>
                    </div><br>
                    <div class="content-features">
                        <h3>Mua Kính Râm Thời Trang Reeman 19919 C1 Gọng Ghi Mắt Đen Tại Kính Mắt Eye Plus</h3>
                    <p>Kính râm Reeman 19919 sở hữu form dáng phi công cổ điển mang vẻ thời thượng. Tinh tế trong từng chi tiết được thiết kế khéo léo. Tròng kính với đủ các hữu năng chống nắng, chống loá, chống tia UV bảo vệ mắt. Gọng ghi mắt đen càng tôn lên vẻ thời thượng cho chiếc kính mang mã 19919này.</p>
                    </div>
                </div>
                <div class="bot-img">
                    <img src="./img/img10.png" alt="">
                </div>
                <div class="kich_thuoc">
                    <div class="item chieu_rong">
                        <span class="about">Mắt kính rộng</span><br>
                        <p>57mm</p>
                    </div>
                    <div class="item cau_kinh">
                        <span class="about">Cầu kính:</span><br>
                        <p>16mm</p>
                    </div>
                    <div class="item gong">
                        <span class="about">Chiều dài gọng:</span><br>
                        <p>149mm</p>
                    </div>
                </div>
            </div>
            <div class="about">
                <div class="similar">
                    <h3>CÁC TRÒNG KÍNH KHÁC</h3>
                    <div class="product">
                        <div class="product-item">
                            <div class="product-img">
                                <a href="">
                                    <img src="./img/img7.jpg" alt=""  width="236px" height="auto">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-detail">
                                    <h3>TRÒNG RÂM CẬN NGUYÊN BẢN MIHAN</h3><br>
                                    <div class="product-price">
                                        <span class="price">450.000 Đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="">
                                    <img src="./img/img8.jpg" alt="" width="236px" height="auto" >
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-detail">
                                    <h3>TRÒNG KÍNH 2 TRÒNG HOGA 1.56 UV400 SUPER HMC</h3><br>
                                    <div class="product-price">
                                        <span class="price">450.000 Đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="">
                                    <img src="./img/img9.jpg" alt=" "width="236px" height="auto" >
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-detail">
                                    <h3>TRÒNG KÍNH PHẢN QUANG UV EXCILITE</h3><br>
                                    <div class="product-price">
                                        <span class="price">450.000 Đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="similar">
                    <h3>SẢN PHẨM LIÊN QUAN</h3>
                    <div class="product">
                        <div class="product-item">
                            <div class="product-img">
                                <a href="">
                                    <img src="./img/img4.jpg" alt=""  width="236px" height="auto">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-detail">
                                    <h3>GỌNG KÍNH CẬN EP450 H00121 C3</h3><br>
                                    <div class="product-price">
                                        <span class="price">450.000 Đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="">
                                    <img src="./img/img5.jpg" alt="" width="236px" height="auto" >
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-detail">
                                    <h3>GỌNG KÍNH CẬN NHỰA UNISEX E450 28040 – C1 ĐEN BÓNG</h3><br>
                                    <div class="product-price">
                                        <span class="price">450.000 Đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="">
                                    <img src="./img/img6.jpg" alt=" "width="236px" height="auto" >
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-detail">
                                    <h3>GỌNG KÍNH NHỰA UNISEX E450 7108 – C3 NÂU</h3><br>
                                    <div class="product-price">
                                        <span class="price">450.000 Đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>footer</div>
    <footer>
        
    </footer>
</body>
</html> 