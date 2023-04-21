<?php include('../connect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page my web</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <!-- header -->
    <header>
        <hw class="logo-icon"><a href="">My-Web</a></hw>
        <nav class="navigation">
            <a class="nav-tab" href="#A1" id="">INTRO</a>
            <a class="nav-tab" href="#g1" id="">MEMBER</a>
            <a class="nav-tab" href="#g2" id="">IMAGE</a>
            <a href="../index.html"><button class="login-menu-btn">Logout</button></a>
        </nav>
    </header>
    <!-- header end -->



    <div class="parallax_warpper" id="intro">
        <div class="intro-screen" id="A1">

    <!-- text test -->
        <p class="intro">
            We hope to get good grades.
            <span class="text-intro">
                Welcome to my web.
            </span>
            - group 5 -
        </p>

        </div>

        <div class="none"></div>

        <div class="parallax-g" id="g1">
            <div class="parallax-l no1">
                <div class="member-name">
                    
                    <h2>- Veerapod Chuchat -</h2>
                    <h2>- Wirphat Prasomphong -</h2>
                    <h2>- Thiraphat Suksamosorn -</h2>
                    <h2>- Pitcahyut Muangwonk -</h2>
                    <h2>- Chanakan Sittisangumpai -</h2>
                    <h2>- Thongtae Sirimak -</h2>
                    

                </div>

            </div>
        </div>

        <div class="none"></div>

        <div class="parallax-g" id="g2">
            <div class="parallax-l no2">

                <!-- Nook img-->
                 <div class="gallery">
                    <img src="img/headache.jpg"  height="150">
                    <div class="desc">Nook</div>
                    <div class="desc">65015144</div>
                </div>

                <!-- Save img-->
                <div class="gallery">
                    <img src="img/sff.jpg"  height="150">
                    <div class="desc">Save</div>
                    <div class="desc">65015143</div>
                </div>

                <!-- Pai img-->
                <div class="gallery">
                    <img src="img/dog_sea.jpg"  height="150">
                    <div class="desc">Pai</div>
                    <div class="desc">65015077</div>
                </div>
            </div>

            <div class="parallax-l no3">
                
                <!-- Tiger img-->
                <div class="gallery">
                    <img src="img/tuling.jpg"  height="150">
                    <div class="desc">Tiger</div>
                    <div class="desc">65015106</div>
                </div>

                <!-- IT img-->
                <div class="gallery">
                    <img src="img/it.jpg"  height="150">
                    <div class="desc">IT</div>
                    <div class="desc">65015028</div>
                </div>

                <!-- Jeak img-->
                <div class="gallery">
                    <img src="img/jeak.jpg"  height="150">
                    <div class="desc">Jeak</div>
                    <div class="desc">65015057</div>
                </div>

            </div>
        </div>
        
        <div class="none"></div>
        <div class="outro-screen" id="outtro">
        <?php
            
            $sql = "SELECT id , uname FROM member";
            $resault = mysqli_query($conn,$sql);

            if($res = mysqli_query($conn,$sql)){
                if(mysqli_num_rows($res) > 0){
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Name</th>";
                        echo "</tr>";
                    while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['uname'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "No records matching your query were found.";
                }
            }
            else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        mysqli_close($conn);
        ?>
        </div>
    </div>

    <script src="js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>