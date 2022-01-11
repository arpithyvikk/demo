<?php
   
 require_once '../dbconfig.php';
 if (isset($_REQUEST['id'])) {
   
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = '$id'";
    $res = mysqli_query($con,$sql);
    
    while($data = mysqli_fetch_array($res)){
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $city = $data['city'];
        $dob = $data['dob'];
        $date = date("d-m-Y", strtotime($dob));
        $gender = $data['gender'];

        $skills = $data['skills'];
        $skill = (explode(',',$skills));
        $count = count($skill);
    }

    // For Prfile Details

    if($_REQUEST['type'] == 'profile')
    {  ?>
        <h2><?php echo $name; ?></h2>
        <p><strong>User ID: </strong> 012022/<?php echo $id; ?> </p>
        <p><strong>E-mail: </strong> <?php echo $email; ?> </p>
        <p><strong>Mobile No: </strong>  <?php echo $mobile; ?></p>
        <p><strong>Birth Date: </strong> <?php echo $date; ?> </p>
        <p><strong>Gender: </strong> <?php echo $gender; ?> </p>
        <p><strong>City: </strong> <?php echo $city; ?> </p>

        <p><strong>Skills: </strong>
        <?php
        for ($i = 0; $i < $count; $i++){
        ?>
            <span class="badge rounded-pill" style="background-color:#307468;"><?php echo $skill[$i]; ?></span>
            <?php } ?>
        </p>
        <br>


<?php }

    // For Update User Details 

    if($_REQUEST['type'] == 'update')
    {
?>
        
    <form class="row g-3 needs-validation" id="form" action="" method="POST">
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
        <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Full name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Mark" >
        </div>
        <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">E-amil</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" aria-describedby="inputGroupPrepend" >
        </div>
        <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile; ?>" aria-describedby="inputGroupPrepend" >
        </div>
        
        
        <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Birth Date</label>
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $dob; ?>">
        </div>
        <div class="col-md-6">
        <label for="validationCustom03" class="form-label">City</label>
        <select class="form-select" name="city" id="city" aria-label="Default select example">
            <option value="Ahmedabad" <?php echo (($city == "Ahmedabad")?'selected':'')?>>Ahmedabad</option>
            <option value="Bhavnagar" <?php echo (($city == "Bhavnagar")?'selected':'')?>>Bhavnagar</option>
            <option value="Rajkot" <?php echo (($city == "Rajkot")?'selected':'')?>>Rajkot</option>
            <option value="Surat" <?php echo (($city == "Surat")?'selected':'')?>>Surat</option>
            <option value="Vadodara" <?php echo (($city == "Vadodara")?'selected':'')?>>Vadodara</option>
        </select>
        </div>

        <div class="col-md-2">
            <br>
            <label for="validationCustom03" class="form-label">Gender : </label>
        </div>
        
        
        <div class="col-md-2"><br>
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" <?php echo (($gender == "Male")?'checked':'')?>>
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="col-md-2"><br>
            <input class="form-check-input" type="radio"  name="gender" id="gender" value="Female" <?php echo (($gender == "Female")?'checked':'')?>>
            <label class="form-check-label" for="flexRadioDefault1">
                Female
            </label>
        </div>
        

        <div class="col-md-2"><br>
            <label for="validationCustom03" class="form-label">Skills : </label>
        </div>
        <div class="col-md-2"><br>
            <input class="form-check-input" type="checkbox" id="skills" name="skills[]" <?php echo ((in_array("HTML", $skill))?'checked':'')?> value="HTML" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                HTML
            </label><br><br>
            <input class="form-check-input" type="checkbox" value="CSS" name="skills[]" <?php echo ((in_array("CSS", $skill))?'checked':'')?> id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                CSS
            </label><br><br>
            <input class="form-check-input" type="checkbox" value="PHP" name="skills[]" <?php echo ((in_array("PHP", $skill))?'checked':'')?> id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                PHP
            </label>
        </div>
        <div class="col-md-2"><br>
            <input class="form-check-input" type="checkbox" value="JavaScript" name="skills[]" <?php echo ((in_array("JavaScript", $skill))?'checked':'')?> id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                JavaScript
            </label><br><br>
            <input class="form-check-input" type="checkbox" value="jQuery" name="skills[]" <?php echo ((in_array("jQuery", $skill))?'checked':'')?> id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                jQuery
            </label>
        </div>
        
        <div class="col-2">
        <button class="btn btn-danger" id="submit" name="submit" type="submit">Done!</button>
        </div>
    </form>
  
<?php }  

} ?>