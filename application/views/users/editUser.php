<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->

<form method="POST" action="/Team-2/users/updateUser/">               
 <!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/head.php'; ?>
</head>
<body>
    <?php include 'assets/header2.php'; ?>
<!-- profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            
            <a class="active" href="/Team-2/users/edituser">Edit Profile</a> <br>
            <a href="/Team-2/users/changepass">Change<br>Password</a><br>
            <a href="delprofile.php">Delete Profile</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="profilebox">
            <h3>My Profile <a href="settings.php"><i class="fas fa-edit"></a></i></h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Username: <input type="text" name="user_username" value ="<?php echo $user['user_username']?>"required > </h4>
            
            <h4>Full Name:  <input type="text" name="user_name" value ="<?php echo $user['user_name']?>"required ></h4>
            
            <h4>Address:  <input type="text" name="user_address" value ="<?php echo $user['user_address']?>" required ></h4>
    
            <h4>Birthdate:  <input type="date" name="user_birthday" value ="<?php echo $user['user_birthday']?>" required ></h4>
            
            <h4>Gender:<input type="text" name="user_gender" value ="<?php echo $user['user_gender']?>" required></h4>
            <h4>Contact No.: <input type="text" name="user_contact_no" value ="<?php echo $user['user_contact_no']?>" required></h4>

<<<<<<< HEAD
            <!-- <h4>Password: <input type="text" name="user_password" value ="" required></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="" required></h4> -->         
            <!-- tinanggal ko na to sa edit user bali nasa change pass na sya -->
=======

>>>>>>> develop

            <!-- <img class="avatar" src="./images/profilepic.png"> -->

            <p> <input type="submit" value="Update User" onclick="alert('Are you sure you want to update your profile?')"> </p>
            <!-- <a class="active "href="profile.php">Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br> -->

            <?php
                    if($user['user_acc_status'] == "Active") {
            ?>            <a href ="/Team-2/index.php/users/updateStatus/<?php echo $user['user_id'];?>/Inactive" onclick="alert('Are you sure you want to Deactivate your profile?')">Deactivate</a>
            <?php   } 
                    else {
            ?>            <a href ="/Team-2/index.php/users/updateStatus/<?php echo $user['user_id'];?>/Active" onclick="alert('Are you sure you want to Activate your profile?')">Activate</a>
            <?php } ?>

            
        </div>

    </div>

<!-- profile section ends  -->

<!-- <?php include 'assets/footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- custom js file link  -->
<script src="assets/script.js"></script>

</body>
</html>

</form>     
    <a href="/Team-2/users/viewuser">Back to the View Profile</a> </br>  </br> 
    <a href="/Team-2/Homepage">Back to the Homepage</a>
