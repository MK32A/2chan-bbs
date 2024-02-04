<?php
include("./app/database/connect.php");
include("app/functions/comment_add.php");
include("app/functions/comment_get.php");
?>


<!-- スレッドエリア -->
<div class="threadWrapper">
    <div class="childWrapper">
        <div class="threadTitle">
            <span>【タイトル】</span>
            <h1>監獄ちゃんねる掲示板</h1>
        </div>
    </div>
    <?php include("commentSection.php"); ?>
    <?php include("commentForm.php"); ?>
</div>