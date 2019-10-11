<?php require '../header.php'; ?>

<!--説明会管理＿参加者一覧画面-->

<html>
<link rel="stylesheet" href=".idea/style.css">
<link rel="script" href=".idea/header.js">

<!-- ヘッダー　-->
<header>
    <nav>
        <table border="1" width="100%" style="border-collapse: collapse">
            <tr>
                <th>
                    <a href="Studentuser.php" class="user1">ユーザー管理</a>
                </th>
                <th>
                    <a href="List.php" class="briefing1">説明会管理　</a>
                </th>
            </tr>
            <tr>
                <td colspan="2" class="colspan">説明会管理
                    <a href="List.php">□</a>
                    <a href="Calendar.php">◇</a>
                    <a href="Join.php" style="position: absolute; right: 130px; top: 65px;">新規説明会追加</a>
                    <input type="button" value="スプレットシート更新"
                           id="updateBt" style="position: absolute; right: 10px; top: 70px;">
                </td>
            </tr>
        </table>
    </nav>
</header>
</html>




<?php require '../footer.php'; ?>