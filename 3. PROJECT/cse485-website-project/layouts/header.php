<?php   
    session_start();
?>
<nav class="menu-area"> 
    <div class="top-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-fullwidth">
                        <div class="logo-wrapper">
                            <div class="logo logo-top">
                                <a href="index.php"><img src="Assets/images/CSE-logo.jpg" style="height:50px;width:100px;" alt="logo image"
                                        class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="menu-container">
                            <div class="d_menu">
                                <nav class="navbar navbar-expand-lg mainmenu__menu">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1"
                                        aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon icon-menu"></span>
                                    </button>
                                    <div class="nav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.php">Trang chủ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="forum-index.php">Diễn dàn</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Liên hệ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Giới thiệu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <div class="login-menu">
                            <?php if(isset($_SESSION['username'])) { ?>
                            <a href=""><?php echo '<strong>'.$_SESSION['username'].'</strong>'; ?></a>
                            <a href="">|</a>
                            <a style="font-size:16px;" href="logout.php"> Đăng xuất</a>
                            <?php } ?>
                            <?php if(!isset($_SESSION['username'])) { ?>
                            <a style="font-size:16px;" href="login.php"> Đăng nhập</a>
                            <a href="">|</a>
                            <a style="font-size:16px;" href="register.php"> Đăng kí</a>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>