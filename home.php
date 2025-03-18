<?php
$servername = "localhost"; // hoặc tên máy chủ của bạn
$username = "root"; // tên người dùng của cơ sở dữ liệu
$password = ""; // mật khẩu của cơ sở dữ liệu
$dbname = "edu"; // tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kết nối đến cơ sở dữ liệu như trên

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Lấy ID từ URL và chuyển đổi thành số nguyên

    // Truy vấn cơ sở dữ liệu
    $sql = "SELECT * FROM cate WHERE id = $id"; // Thay đổi tên bảng và cột phù hợp
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Lấy dữ liệu của sản phẩm
        $row = $result->fetch_assoc();
        echo "Tên sản phẩm: " . $row["name"] . "<br>";
        echo "Mô tả: " . $row["description"] . "<br>";
        echo "trạng thái: " . $row["status"] . "<br>";
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
}

// Kết nối đến cơ sở dữ liệu như trên

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Lấy ID từ URL và chuyển đổi thành số nguyên

    // Truy vấn cơ sở dữ liệu
    $sql = "SELECT * FROM courses WHERE id = $id"; // Thay đổi tên bảng và cột phù hợp
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Lấy dữ liệu của sản phẩm
        $row = $result->fetch_assoc();
        echo "Tên bài viết: " . $row["title"] . "<br>";
        echo "Mô tả: " . $row["description"] . "<br>";
    } else {
        echo "Không tìm thấy bài viết.";
    }
}
?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="frame27">
            <div style="left: 50px;">

            </div>
            <div class="hmenu">
                <img src="img/home_logo.svg" alt="logo" width=166.3px height=30px gap=4px style="top: 10px;left: 100px;">
            </div>
            <div class="vmenu">
                <div class="hmenu">
                    <a href="" class="menu">Home</a>
                </div>
                <div class="hmenu">
                    <a href="" class="menu">Courses</a>
                </div>
                <div class="hmenu">
                    <a href="" class="menu">Blog</a>
                </div>
                <div class="hmenu">
                    <a href="" class="menu">LearnPress Add on</a>
                </div>
                <div class="hmenu">
                    <a href="" class="menu">Premium Theme</a>
                </div>
            </div>
            <div style="display: flex;">
                <div class="hmenu">
                    <a href="" class="menu">Login / Register</a>
                </div>
                <div style="align-content: center;padding-left: 10px;padding-right: 10px;">
                    <img src="img/icon_search.svg" width="48px" height="48px">
                </div>
            </div>
        </div>
    </div>
    <div class="background-image">
        <div style="padding-left: 200px;">
            <p style="font-size: 30px;font-weight: 600;">
                Build Skills with<br>
                Online Course
            </p>
            <p style="font-size: 18px;color: darkgray;">
                We denounce with righteous indignation and dislike men who are<br>
                so beguiled and demoralized that cannot trouble.
            </p>
            <br>
            <div style="width: 170px;height: 35px;border-radius: 28px;background-color: #ff782d;color: white;text-align: center;padding-top: 10px;">
                Posts comment
            </div>
        </div>
    </div>
    <div class="top-categories">
        <h2>Top Categories</h2>
        <div class="categories-container">
            <div class="category">
                <img src="img/art.png" class="category-icon" alt="Design Icon">
                <div class="category-title">Art & Design</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/dev.png" class="category-icon" alt="Development Icon">
                <div class="category-title">Development</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/communi.png" class="category-icon" alt="Communication Icon">
                <div class="category-title">Communication</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/video.png" class="category-icon" alt="Videography Icon">
                <div class="category-title">Videography</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/photo.png" class="category-icon" alt="Photography Icon">
                <div class="category-title">Photography</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/market.png" class="category-icon" alt="Marketing Icon">
                <div class="category-title">Marketing</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/content.png" class="category-icon" alt="Writing Icon">
                <div class="category-title">Content Writing</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/finance.png" class="category-icon" alt="Finance Icon">
                <div class="category-title">Finance</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/science.png" class="category-icon" alt="Science Icon">
                <div class="category-title">Science</div>
                <div>38 Courses</div>
            </div>
            <div class="category">
                <img src="img/network.png" class="category-icon" alt="Network Icon">
                <div class="category-title">Network</div>
                <div>38 Courses</div>
            </div>
        </div>
    </div>
    <div class="featured-courses">
        <h2>Featured Courses</h2>
        <div class="courses-container">
            <div class="course-card">
                <img src="img/cr1.png" alt="Photography Course" class="course-image">
                <div class="course-info">
                    <h3>Photography</h3>
                    <p>Create An LMS Website with LearnPress</p>
                    <p>2 Weeks | 150 Students</p>
                    <p>Price: $220 | Free</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>
            <div class="course-card">
                <img src="img/design.png" alt="Web Design Course" class="course-image">
                <div class="course-info">
                    <h3>Web Design</h3>
                    <p>Design A Website with ThimPress</p>
                    <p>2 Weeks | 200 Students</p>
                    <p>Price: $250 | Free</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>
            <div class="course-card">
                <img src="img/cr2.png" alt="Video Editing Course" class="course-image">
                <div class="course-info">
                    <h3>Video Editing</h3>
                    <p>Create Stunning Videos with LearnPress</p>
                    <p>3 Weeks | 180 Students</p>
                    <p>Price: $230 | Free</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>
            <div class="course-card">
                <img src="img/cr3.png" alt="Content Writing Course" class="course-image">
                <div class="course-info">
                    <h3>Content Writing</h3>
                    <p>Master the Art of Writing</p>
                    <p>4 Weeks | 120 Students</p>
                    <p>Price: $210 | Free</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>
            <div class="course-card">
                <img src="img/cr4.png" alt="Content Writing Course" class="course-image">
                <div class="course-info">
                    <h3>Content Writing</h3>
                    <p>Master the Art of Writing</p>
                    <p>4 Weeks | 120 Students</p>
                    <p>Price: $210 | Free</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>
            <div class="course-card">
                <img src="img/cr5.png" alt="Content Writing Course" class="course-image">
                <div class="course-info">
                    <h3>Content Writing</h3>
                    <p>Master the Art of Writing</p>
                    <p>4 Weeks | 120 Students</p>
                    <p>Price: $210 | Free</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="img/home_logo.svg" alt="EduPress Logo">
            </div>
            <div class="footer-links">
                <h4>GET HELP</h4>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">Latest Articles</a></p>
                <p><a href="#">FAQ</a></p>
            </div>
            <div class="footer-programs">
                <h4>PROGRAMS</h4>
                <p><a href="#">Art & Design</a></p>
                <p><a href="#">Business</a></p>
                <p><a href="#">IT & Software</a></p>
            </div>
            <div class="footer-contact">
                <h4>CONTACT US</h4>
                <p>Address: 2024 New Design St, Lorem [10] <br> Town, USA</p>
                <p>Tel: +1 (234) 567-890</p>
                <p>Email: <a href="mailto:support@example.com">support@example.com</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2024 LearnPress LMS | Powered by ThimPress</p>
        </div>
    </footer>
</body>
</html>