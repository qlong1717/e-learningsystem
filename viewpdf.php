<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> 

<!-- -------------------------------------Classes------------------------------------------ -->
<section class="classes">
        <div class="container">
            <div class="row2">
                <div class="offer">
                    <div class="small-container">
                        <div class="row3">
                            <div class="col-2">
                                <img src="./IMAGES/pr.jpeg" alt="offer-img">
                            </div>
        
                            <div class="col-2">
                                <p></p>
                                <h1>Tài liệu PDF</h1> 
                                <small>
                                Trong phần này, chúng ta sẽ học qua các tài liệu PDF nhằm giúp các bạn tiếp thu dễ dàng hơn. Luyện các kỹ năng nghe, phát âm chính xách hơn
                                </small>
                                <div class="button">
                                    <!-- Cách 1: -->
                                    <a href="#" class="btn">Kéo xuống để học</a>
        
                                    <!-- Cách 2: -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="class-item">
                    <div class="login-right-top-text">
                        <p>
                          <label class="col-md-2" class="control-label">Chapter:</label>
                          <label class="col-md-10" class="control-label"><?php echo $res->LessonChapter;?></label>
                          | 
                          <label class="col-md-2" class="control-label">Title : </label>
                          <label class="col-md-10" class="control-label"> <?php echo $res->LessonTitle;?> </label>
                        </p>
                    </div>
                    
                    <div class="Grammar-lesson">
                        <p>Trong phần này, chúng ta sẽ học qua các tài liệu PDF nhằm giúp các bạn tiếp thu dễ dàng hơn. Luyện các kỹ năng nghe, phát âm chính xách hơn</p>
     
                        <embed src="<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>" type="application/pdf" width="1080px" height="540px" />
                    </div>

                </div>

            </div>
        </div>
    </section>