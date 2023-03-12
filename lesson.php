		<div class="top-course">
            <div class="top-course-infomation">
                <h1>
                    <h1 class="tittle">Tìm khoá học Tiếng Anh tốt nhất cho bạn</h1>
                </h1>
                <p class="text">Tìm khoá học dạy Tiếng Anh trực tuyến tốt nhất cho bạn: lựa chọn từ những giáo viên Tiếng Anh trực tuyến có kinh nghiệm của chúng tôi và có được trải nghiệm học tốt nhất.</p>
            </div>
        </div>

        <div class="top-course">
            <img class=" w-full" src="https://scdn.italki.com/ng/static/image/instantLessons/instant-lesson-mobile.png" alt="">
            <div class="absolute">
                <div class="tittle">
					<h1><?php echo $title;?></h1>
                </div>
                <div class="text">
                    <p> Want to take a lesson right away?</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row2">
                
                <div class="course-item">
                    <div class="login-right-top-text">
                        <p>Khoá học giao tiếp</p>
                    </div>

					
                    <div class="Course-list"> 
                        <div class="Communicate">
                            <!-- <li class="com1">  -->
								<?php 
									$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
									$mydb->setQuery($sql);
									$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
										// echo ''.$result->LessonChapter.'';
										// echo ''.$result->LessonTitle.'';
                                        echo '<li class="com1">';
										echo '<a href= "index.php?q=viewpdf&id='.$result->LessonID.'"> '.$result->LessonChapter.' <br> '.$result->LessonTitle.' </a>';
                                        echo '</li>';
                                    }
									?>		
							<!-- </li>	 -->
                            					
                        </div>
                    </div>
                </div>

				<div class="course-item">
                    <div class="login-right-top-text">
                        <p>Video</p>
                    </div>

                    <div class="Course-list"> 
                        <div class="Present">
                            <!-- <li class="pre1">  -->
								<?php 
									$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
									$mydb->setQuery($sql);
									$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
										// echo '<td>'.$result->LessonTitle.'</td>'; 
                                        echo '<li class="pre1">';
										echo '<a href="index.php?q=playvideo&id='.$result->LessonID.'"> '.$result->LessonChapter.' <br> '.$result->LessonTitle.' <br> </a>';
                                        echo '</li>';
                                    }
								?>
							<!-- </li> -->
                        </div>
                    </div>
                </div>

                <div class="course-item">
                    <div class="login-right-top-text">
                        <p>Khoá học kỹ năng</p>
                    </div>

                    <div class="Course-list"> 
                    <div class="Course-list"> 
                        <div class="Communicate">
                            <li class="com1"> <a href="a1-a2.html">Tiếng Anh trình độ A1</a> </li>
                            <!-- <li class="com2"> <a href="cartegory.html">TIẾNG ANH A2</a> </li> -->
                            <li class="com1"> <a href="a1-a2.html">Tiếng Anh trình độ A1</a> </li>
                        </div>
                        <div class="Present">
                            <li class="pre1"> <a href="b1-b2.html">Tiếng Anh trình độ B1</a> </li>
                            <!-- <li class="pre2"> <a href="cartegory.html">TIẾNG ANH B2</a> </li> -->
                            <li class="pre1"> <a href="b1-b2.html">Tiếng Anh trình độ B2</a> </li>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="free-resources">
            <div class="free-resources-top">
                <i class="fa-solid fa-book"></i>
                <h2>Tài nguyên miễn phí</h2>
            </div>

            <div class="free-resources-bottom">
                <p> Ở English Pro, chúng tôi cung cấp cho bạn các tài nguyên miễn phí. Đừng lo các tài liệu, tài nguyên đều đạt chuẩn quốc tế. Chúng tôi thật sự hạnh phúc khi thấy bạn đón nhận điều đó.</p>
                
                <ul>
                    <li>         
                        <h3><i class="fa-solid fa-check"></i> Kỹ năng</h3>
                        <p>Cải thiện trình độ tiến anh của các lĩnh vực: Nghe, nói, đọc, viết.</p>
                    </li>

                    <li>
                        <h3><i class="fa-solid fa-check"></i> Ngữ pháp</h3>
                        <p>Luyện tập các ngữ pháp thông dụng, phổ biến.</p>
                    </li>
  
                    <li>
                        <h3> <i class="fa-solid fa-check"></i> Từ vựng</h3>
                        <p>Nâng cao vốn từ vựng theo các chủ đề</p>
                    </li>
                </ul>

                <p> 
                    <span> 
                        <a href="/node/23?promo_id=fr&amp;promo_name=free-resources&amp;promo_creative=free-resources-cta&amp;promo_position=sitewide">Find out more</a>
                    </span>
                </p>

            </div>
        </div>