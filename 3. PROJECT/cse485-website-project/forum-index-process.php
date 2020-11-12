<?php
    include 'Config/config.php';
    error_reporting(0);
    $titleSearch = $_GET['searchString'];
    $optionIndex = $_GET['optionIndex'];
    if (isset($titleSearch) && !empty($titleSearch))
    {
        $sql = "select * from questions where Title like '%$titleSearch%'";
    }
    else
    {
        $sql = "select * from questions";
    }
    if($optionIndex == 'oldest')
    {
        $sql = "select * from questions order by Created DESC";
    }
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {?>
        <div class="noidung-index forum-questions-list shadow p-3 mb-3 bg-white rounded ">
            <div class="forum-question-item">
                <div class="forum-question-title">
                    <a href="forum-detail.php?id=<?php echo $row['ID']; ?>" name="title" class="tieude" id="title"><?php echo $row['Title'] ?></a>
                </div>
                <div class="forum-question-meta">
                    <span title="Open" class="forum-status forum-status-open">Open</span>
                    <span>
                        <a href="#">
                        <?php
                            $sqlgetImage = "select users.Image from users,questions where users.Username = 'Admin'";
                            $resultImage = mysqli_query($conn,$sqlgetImage); 
                            $rowImage = mysqli_fetch_assoc($resultresultImage)
                        ?>
                            <img alt="" src="Admin/Assets/images/<?php echo $rowImage['Image'] ?>" style="width:30px;border-radius:30px;"
                                class="avatar avatar-48 photo avatar-default"> <?php echo $row['UserName'] ?></a> Câu hỏi từ <?php echo $row['Created'] ?>
                    </span>
                </div>
                <div class="forum-question-meta mt-3">
                    <a class="forum-keyword">Sinh viên</a>
                </div>
                <div class="forum-question-stats">
                    <span class="forum-views-count">
                        <strong><?php echo $row['Views'] ?></strong>Views</span>
                    <span class="forum-votes-count">
                    <?php 
                        $sqlgetcountComment = "SELECT COUNT(Question_ID) as count_comment 
                        FROM comments,questions WHERE comments.Question_ID = questions.ID and Question_ID = ".$row['ID'];
                        
                        $resultcountComment = mysqli_query($conn,$sqlgetcountComment);
                        $row = mysqli_fetch_assoc($resultcountComment)
                    ?>
                        <strong><?php echo $row['count_comment']; ?></strong>Trả lời </span>
                </div>
            </div>
        </div>
    <?php }
?>
