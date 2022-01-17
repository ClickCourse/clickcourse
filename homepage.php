<?php
session_start();
include('server.php');
include('header.php');
?>

<!-- header --------------------------------------------------------------------------------->
<head>
    <link rel="stylesheet" href="css/homepage.css">
    <title>Home Page</title>
</head>

<body>

    <!-- section 1 ------------------------------------------------------------------------------>
    <section class="section-1">
        <div class="banner-1">
            <a>คอร์สกิจกรรมออนไลน์</a>
        </div>

        <!-- <div class="banner-2">
        </div>

        <div class="show-course">
            <a>วันและเวลากิจกรรม online meeting </a>
        </div> -->
    </section>

    <!-- section 2 ------------------------------------------------------------------------------>
    <section class="section-2">
        <table class="about-us">
            <td colspan="2">
                <tr>
                    <th id="th-left">
                        <a class="th-title">สังคมความสุขของผู้สูงอายุสนุกมีคุณค่าพึ่งพาตัวเองได้</a>
                        <br><br>
                        <a>กิจการเพื่อสังคมที่มุ่งสร้างคอมมูนิตี้ของผู้สูงอายุในประเทศไทยและทั่วโลก
                            แก้ไขปัญหาการเข้าสู่สังคมผู้สูงอายุอย่างสมบูรณ์ลดปัญหาทางด้านร่างกายและจิตใจ
                            ที่เสื่อมถอยตามกาลเวลา ป้องกันโอกาสเสี่ยงในการเป็นผู้สูงวัยติดบ้านและติดเตียง</a>
                    </th>
                    <th id="th-right">
                        <img id='img' src="images/home-1.png">
                    </th>
                </tr>

                <tr>
                    <th id="th-right">
                        <img id='img' src="images/home-2.png">
                    </th>
                    <th id="th-left">
                        <a class="th-title">กิจกรรมสำหรับผู้สูงอายุ</a>
                        <br><br>
                        <a>กิจกรรมที่ออกแบบมาสำหรับผู้สูงอายุโดยเฉพาะ มีกิจกรรมให้เข้าร่วมหลากหลาย
                            ทั้งด้านสุขภาพ เทคโนโลยี พัฒนาบุคลิกภาพ และงานอดิเรก พร้อมด้วยสังคมเพื่อน
                            ผู้สูงอายุช่วยให้ผู้สูงอายุยังคงแอคทีฟและมีความสุข ด้วยคอนเซปต์ สนุก มีคุณค่า พึ่งพาตัวเองได้</a>
                    </th>

                </tr>
            </td>
        </table>
    </section>


    <!-- section 3 ------------------------------------------------------------------------------>
    <section class='section-3'>
        <div class="title">
            <p>กิจกรรมยอดนิยม</p>
        </div>

        <form method="post">
            <div class="container">
                <?php
                $query = "SELECT * FROM `course_video` WHERE `course_id` LIMIT 0,4";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="product-box">
                        <div class="product-img">
                            <img src="<?php echo $row['img']; ?>" onclick="document.location = 'course_video_details.php'">
                        </div>
                        <div class="product-text">
                            <p id="name"><?php echo $row['course_name']; ?></p>
                            <p id="hours"><?php echo $row['hours']; ?>&nbsp;</p>
                            <p id="price"><?php echo $row['price']; ?>&nbsp;บาท</p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="productall">
                <button type="button" class="btn" onclick="parent.location.href='all_activities.php'">ดูทั้งหมด</button>
            </div>
        </form>
    </section>

    <!-- section 4 ------------------------------------------------------------------------------>
    <section class='section-4'>
        <div class="blog-btn">
            <div class="imgblog">
                <img src="images/Group 3423.png">
            </div>
            <div class='blog-details'>
                <h1>บทความสำหรับผู้สูงอายุ</h1>
                <h2>_______________</h2><br>
                <p>เนื้อหาดีๆ เพื่อเป็นสื่อกลางในการนำเสนอแสิ่งที่ผู้สูงอายุต้องการ<br>
                    ครอบคลุมเนื้อหาครบทุกด้านที่ออกแบบมาสำหรับผู้สูงอายุโดยเฉพาะ<br>
                    ทั้งอัพเดตข่าวสาร สุขภาพ ไลฟ์สไตล์ในการใช้ชีวิต</p>
                <button type="button" class="read-more" onclick="location='blog.php'">อ่านเพิ่มเติม</button>
            </div>
        </div>
    </section>

    <!-- section 4  ------------------------------------------------------------------------------>
    <section class='section-5'>
        <form method="post">
            <div class="header-blog">
                <p>บทความ</p>
            </div>

            <div class='blog-left'>
                <?php
                $query = "SELECT * FROM blog WHERE blog_id = '1'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <img class="blog-img" src="<?php echo $row['img_2']; ?>" onclick="location='blog_details.php'">
                    <div class="blog-text">
                        <h1><?php echo $row['blog_name']; ?></h1>
                        <h4>เผยแพร่เมื่อ <?php echo $row['date']; ?></h4>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class='blog-right'>
                <?php
                $query = "SELECT * FROM blog WHERE blog_id = '2'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="blog-text">
                        <h1><?php echo $row['blog_name']; ?></h1>
                        <h4>เผยแพร่เมื่อ <?php echo $row['date']; ?></h4>
                        <hr>
                    </div>
                <?php
                }
                ?>

                <?php
                $query = "SELECT * FROM blog WHERE blog_id = '3'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="blog-text">
                        <h1><?php echo $row['blog_name']; ?></h1>
                        <h4>เผยแพร่เมื่อ <?php echo $row['date']; ?></h4>
                        <hr>
                    </div>
                <?php
                }
                ?>

                <?php
                $query = "SELECT * FROM blog WHERE blog_id = '4'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="blog-text">
                        <h1><?php echo $row['blog_name']; ?></h1>
                        <h4>เผยแพร่เมื่อ <?php echo $row['date']; ?></h4>
                        <hr>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="blogall">
                <button type="button" class="blog-all" onclick="parent.location.href='blog.php'">ดูทั้งหมด</button>
            </div>



            </div>

            <!-- <div class="blog"> -->
            <!-- <div class="blog-text"> -->
            <!-- <h1><?php echo $row['title']; ?></h1> -->
            <!-- <h4><?php echo $row['date_time']; ?></h4> -->
            <!-- </div> -->
            <!-- </div> -->
            </div>

        </form>
    </section>

    <!-- footer ------------------------------------------------------------------------------>
    <?php
    include('footer.php');
    ?>

</body>

</html>