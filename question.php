<?php
$studentid = $_SESSION['StudentID'];
$score = 0;
$id = $_GET['id'];
if($id==''){
redirect("index.php");
}
 	
	$sql = "SELECT SUM(Score) as 'SCORE' FROM tblscore  WHERE LessonID='{$id}' and StudentID='{$studentid}' AND Submitted=1";
	$mydb->setQuery($sql);
	$row = $mydb->executeQuery(); 
    $ans = $mydb->loadSingleResult();
    $score  = $ans->SCORE;

  	if ($score!=null) {
  		# code...   
  		redirect("index.php?q=quizresult&id={$id}&score={$score}");
  	}
?>
<style>
	.question{
		padding-left: 50px;
	}
	.question h4{
		color: red;
	}
</style>
<!-- <h1>Question</h1>
<h5>Choose the correct answer.</h5>

<div style="height:250px;overflow-y:auto;"> 
<?php   
  $sql = "SELECT * FROM tblexercise WHERE LessonID = '{$id}'";
  $mydb->setQuery($sql);
  $cur = $mydb->loadResultList();

  foreach ($cur as $res) {
?> 
<form> 
<div><?php echo $res->Question ; ?></div>
<div class="col-md-3"><input class="radios" type="radio" id="ChoiceA" data-id="<?php echo $res->ExerciseID;?>" name="choices" value=" <?php echo $res->ChoiceA; ?>"> A. <?php echo $res->ChoiceA; ?></div>
<div class="col-md-3"><input class="radios" type="radio" id="ChoiceB" data-id="<?php echo $res->ExerciseID;?>" name="choices" value="<?php echo $res->ChoiceB; ?>"> B. <?php echo $res->ChoiceB; ?></div>
<div class="col-md-3"><input class="radios" type="radio" id="ChoiceC" data-id="<?php echo $res->ExerciseID;?>" name="choices" value="<?php echo $res->ChoiceC; ?>"> C. <?php echo $res->ChoiceC; ?></div>
<div class="col-md-3"><input class="radios" type="radio" id="ChoiceD" data-id="<?php echo $res->ExerciseID;?>" name="choices" value="<?php echo $res->ChoiceD; ?>"> D. <?php echo $res->ChoiceD; ?></div> 
</form>
<?php } ?>
</div>
<form action="processscore.php" method="POST" style="margin-top: 100px;text-align: right;">
	<input type="hidden" name="LessonID" value="<?php echo $id ?>">
	<button class="btn btn-md btn-primary" type="submit" name="btnSubmit">Submit  <i class="fa fa-arrow-right"></i></button>
</form> -->

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
                                <h1	h1><?php echo $title;?></h1> 
                                <small>
                                Chúng ta sẽ cùng nhau thực hiện bài kiểm nhằm giúp bạn củng cố lại kiến thức đã được học qua các chương trước đó.
                                </small>
                                <div class="button">
                                    <!-- Cách 1: -->
                                    <a href="#" class="btn">Kéo xuống để kiểm tra</a>
        
                                    <!-- Cách 2: -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="class-item">
                    <div class="login-right-top-text">
                        <p>
                          Kiểm tra
                        </p>
                    </div>
                    
                    <div class="question">
                        <h4>Yêu cầu: chọn một trong các đáp đúng bên dưới:</h4>
						<div style="height:720px; width: 1140px;overflow-y:auto;"> 
						<?php   
							$sql = "SELECT * FROM tblexercise WHERE LessonID = '{$id}'";
							$mydb->setQuery($sql);
							$cur = $mydb->loadResultList();

							foreach ($cur as $res) {	
							echo '<br>';				
							?> 
							<form> 
							<div><?php echo $res->Question ; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" id="ChoiceA" data-id="<?php echo $res->ExerciseID;?>" name="choices" value=" <?php echo $res->ChoiceA; ?>"> A. <?php echo $res->ChoiceA; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" id="ChoiceB" data-id="<?php echo $res->ExerciseID;?>" name="choices" value="<?php echo $res->ChoiceB; ?>"> B. <?php echo $res->ChoiceB; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" id="ChoiceC" data-id="<?php echo $res->ExerciseID;?>" name="choices" value="<?php echo $res->ChoiceC; ?>"> C. <?php echo $res->ChoiceC; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" id="ChoiceD" data-id="<?php echo $res->ExerciseID;?>" name="choices" value="<?php echo $res->ChoiceD; ?>"> D. <?php echo $res->ChoiceD; ?></div> 
							</form>
						<?php } ?>

						<form action="processscore.php" method="POST" style="margin-top: 30px; text-align: right;">
							<input type="hidden" name="LessonID" value="<?php echo $id ?>">
							<button class="btn btn-md btn-primary" type="submit" name="btnSubmit">Hoàn tất <i class="fa fa-arrow-right"></i></button>
						</form>

						</div>
                    </div>

                </div>

            </div>
        </div>
    </section>