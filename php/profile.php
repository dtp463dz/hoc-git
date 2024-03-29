<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div>
         <!--Navbar-->
        <div class="navbar">
            <div class="navbar-content">
                <div class="navbar-item">
                    <div class="logo">
                        <a href="../index.php" class="logo-title"> 
                            <h2 title="Sport Management">SportManagement</h2>
                        </a>
                    </div>

                    <!--khi da dang nhap, hien thi profile-->
                    <div></div>


                </div>
            </div>
        </div>
        <!--main-->
        <div class="main-content">
            <div class="profile-icon">
                <div class="img_items">
                    <div class="img">
                        <img src="../img/profile.jpg" alt="">
                    </div>
                    <div class="icon-content">
                        <p class="username">levannguyen</p>
                        <p class="email">nguyenle@gmail.com</p>
                    </div>
                </div>
                
            </div>
            <div class="profile-content">
                <h3>Your Profile</h3>
                <form action="" id="form-profile" method="post">
                    <div class="input-profile">
                        <label for="fullname">Full Name</label>
                        <input class="inp_profile" type="text" id="fullname" required="required" placeholder="Enter your Fullname" name="fullName">
                    </div>

                    <div class="input-profile">
                        <label for="email">Email</label>
                        <input class="inp_profile" type="text" id="Email" required="required" placeholder="Enter your Email" name="email">
                    </div>

                    <div class="input-profile">
                        <label for="email">BirthDay</label>
                        <input class="inp_profile" type="date" id="birthday" required="required" placeholder="Enter your BirthDay" name="birthday">
                    </div>

                    <div class="input-profile pr_gender">
                        <label for="gender">Gender</label>
                        <select id="choose_gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
    
                    <div class="input-profile">
                        <label for="phone">Phone</label>
                        <input class="inp_profile" type="text" id="phone" required="required" placeholder="Enter your Phone" name="phone">
                    </div>
    
                    <!--Submit-->
                    <div class="input-profile submit">
                        <input type="submit" name="" id="submit-btn" value="Save">
                    </div>
    
                </form>
            </div>
        </div>
    </div>
</body>
</html>