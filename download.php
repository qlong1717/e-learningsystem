<!-- <div class="top-course">
    <img class=" w-full" src="https://scdn.italki.com/ng/static/image/instantLessons/instant-lesson-mobile.png" alt="">
        <div class="absolute">
            <div class="tittle">
				<h1><?php echo $title;?></h1>
            </div>
            <div class="text">
                <p>Tải về tài liệu miễn phí</p>
           </div>
    	</div>
</div> -->
<style> 
	.btn{
		width: 175px;
	}
</style>

<div class="free-resources">
            <div class="free-resources-top">
                <i class="fa-solid fa-book"></i>
                <h1><?php echo $title;?></h1>
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
                        <a href="/node/23?promo_id=fr&amp;promo_name=free-resources&amp;promo_creative=free-resources-cta&amp;promo_position=sitewide">Kéo xuống để xem thêm</a>
                    </span>
                </p>

            </div>
</div>
<br>
<div class="container">
    <div class="row2">
		<div class="col-lg-6">
			<h3>DOCS</h3>
			<div class="table-responsive">
				<table id="example" class="table table-bordered">
					<thead>
						<th width="2%">#</th>
						<th>Chapter</th>
						<th>Tittle</th> 
						<th width="10%">Action</th>
					</thead>
					<tbody>
						<?php 
						$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
						$mydb->setQuery($sql);
						$cur = $mydb->loadResultList();
						foreach ($cur as $result) {
							# code...
							echo '<tr>';
							echo '<td></td>';
							echo '<td>'.$result->LessonChapter.'</td>';
							echo '<td>'.$result->LessonTitle.'</td>';
							echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Download</a></td>';
							echo '</tr>';
						}
						?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-lg-6">
			<h3>VIDEO</h3>
			<div class="table-responsive">
				<table id="example2" class="table table-bordered">
					<thead>
						<th width="2%">#</th>
						<th>Decription</th>
						<th width="10%">Action</th>
					</thead>
					<tbody>
						<?php 
						$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
						$mydb->setQuery($sql);
						$cur = $mydb->loadResultList();
						foreach ($cur as $result) {
							# code...
							echo '<tr>';
							echo '<td></td>';
							echo '<td>'.$result->LessonTitle.'</td>'; 
							echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Download</a></td>';
							echo '</tr>';
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>