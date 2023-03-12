<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> 

<style type="text/css">
  .Grammar-lesson video{
    margin-left: 60px;
  }
</style>
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
                                <h1><?php echo $title;?></h1> 
                                <small>
                                Trong phần này, chúng ta sẽ học qua các Videos nhằm giúp các bạn tiếp thu dễ dàng hơn. Luyện các kỹ năng nghe, phát âm chính xách hơn
                                </small>
                                <div class="button">
                                    <!-- Cách 1: -->
                                    <a href="#" class="btn">Kéo xuống để học qua Videos</a>
        
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
                          <label class="col-md-10" class="control-label"><?php echo $res->LessonChapter; ?></label>
                          | 
                          <label class="col-md-2" class="control-label">Title : </label>
                          <label class="col-md-10" class="control-label"><?php echo $res->LessonTitle; ?></label>
                        </p>
                    </div>
                    
                    <div class="Grammar-lesson">
                        <p>Trong phần này, chúng ta sẽ học qua các Videos nhằm giúp các bạn tiếp thu dễ dàng hơn. Luyện các kỹ năng nghe, phát âm chính xách hơn</p>
     
                        <video width="1080px" height="540px" controls>
                          <source src="<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>" type="video/mp4">
                          <source src="<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>" type="video/ogg"> 
                        </video>
                    </div>

                </div>

            </div>
        </div>
    </section>
		