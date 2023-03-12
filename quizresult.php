<?php 
$studentid = $_SESSION['StudentID'];
	if (isset($_GET['score'])) {
		# code...
		echo	$score = '<h2>Your Score is : ' . $_GET['score'].'</h2>';
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
	@$id = $_GET['id'];
	if($id==''){
	redirect("index.php");
	}
	
	$sql = "SELECT * FROM tblexercise WHERE LessonID = '{$id}'";
	$mydb->setQuery($sql);
	$cur = $mydb->loadResultList();

	foreach ($cur as $res) {
		# code...
		$sql = "SELECT * FROM tblscore s,tblexercise e WHERE s.ExerciseID=e.ExerciseID AND e.ExerciseID='{$res->ExerciseID}' and StudentID='{$studentid}'";
		$mydb->setQuery($sql);
		$ans = $mydb->loadSingleResult();
	?> 
	<form> 
	<div><?php echo $res->Question ; ?></div>
	<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceA) ? 'CHECKED' : ''; ?>> A. <?php echo $res->ChoiceA; ?></div>
	<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceB) ? 'CHECKED' : ''; ?>> B. <?php echo $res->ChoiceB; ?></div>
	<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceC) ? 'CHECKED' : ''; ?>> C. <?php echo $res->ChoiceC; ?></div>
	<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceD) ? 'CHECKED' : ''; ?>> D. <?php echo $res->ChoiceD; ?></div> 
	</form>
	<?php } ?>
</div> -->

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
                                <h1><?php echo $title;?> (Đáp án)</h1> 
                                <small>
                                Đáp án các câu kiểm tra
                                </small>
                                <div class="button">
                                    <!-- Cách 1: -->
                                    <a href="#" class="btn">Kéo xuống để xem đáp án</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="class-item">
                    <div class="login-right-top-text">
                        <p>
                          Đáp án
                        </p>
                    </div>
                    
                    <div class="question">
                        <h4>Trang này hiển thị đáp án các câu hỏi.</h4>
						<div style="height:720px; width: 1140px; overflow-y:auto;"> 
							<?php  
							@$id = $_GET['id'];
							if($id==''){
							redirect("index.php");
							}
							
							$sql = "SELECT * FROM tblexercise WHERE LessonID = '{$id}'";
							$mydb->setQuery($sql);
							$cur = $mydb->loadResultList();
							
							foreach ($cur as $res) {
								echo '<br>';
								$sql = "SELECT * FROM tblscore s,tblexercise e WHERE s.ExerciseID=e.ExerciseID AND e.ExerciseID='{$res->ExerciseID}' and StudentID='{$studentid}'";
								$mydb->setQuery($sql);
								$ans = $mydb->loadSingleResult();
							?> 
							<form> 
							<div><?php echo $res->Question ; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceA) ? 'CHECKED' : ''; ?>> A. <?php echo $res->ChoiceA; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceB) ? 'CHECKED' : ''; ?>> B. <?php echo $res->ChoiceB; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceC) ? 'CHECKED' : ''; ?>> C. <?php echo $res->ChoiceC; ?></div>
							<div class="col-md-3"><input class="radios" type="radio" disabled="true" <?php echo ($ans->Answer==$res->ChoiceD) ? 'CHECKED' : ''; ?>> D. <?php echo $res->ChoiceD; ?></div> 
							</form>
							<?php } ?>
						</div>
                    </div>

                </div>

            </div>
        </div>
    </section>
		