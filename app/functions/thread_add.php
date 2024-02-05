<?php
$error_message = array();

if (isset($_POST["threadSubmitButton"])) {

    // スレッド名入力チェック
    if(empty($_POST["title"])) {
        $error_message["title"] = "タイトルを入力してください。";
    } else {
        // エスケープ処理
        $escaped["title"] = htmlspecialchars($_POST["title"], ENT_QUOTES, "UTF-8");
    }

    if(empty($error_message)) {
        $post_date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `thread` (`title`) VALUES (:title);";
        $statement = $pdo->prepare($sql);

        // 値をセット
        $statement->bindParam(":title", $escaped["title"], PDO::PARAM_STR);

        $statement->execute();
    }
}