<link rel="stylesheet" href="./css/style_index.css">

<header>
    <div class="container_title">
        <h1 class="header_title">Flower Shop Management System</h1>
    </div>


    <?php
        if(isset($_SESSION['ID']))
        {
            // $avatar = get_avatar('./users/' . $_SESSION['ID']);
            // $img_src = './users/' . $_SESSION['ID'] ."/".$avatar;

            // if($avatar == '')
            // {
            //     $img_src ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPuksIeXJ7lssfJxg3shTub7fzB06fkvhr0rFsn_s&s';
            // }

            ?>
                <div class="avatar_container">
                    <a href="logout.php">
                        <img class="avatar" src="./component/avatar.jpg" alt="">
                    </a>
                </div>
            <?php
        }
        else
        {
            ?>
                <div class="login-btn user">
                    <a href="login.php">Đăng nhập</a>
                </div>
            <?php
        }
    ?>
</header>