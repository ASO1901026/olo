<?php require '../header.php'; ?>

<!--　説明会管理＿カレンダー画面　-->

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
                <td colspan="2" class="colspan">カレンダー
                    <a href="List.php">□</a>
                    <a href="Calendar.php">◇</a>
                </td>
            </tr>
        </table>
    </nav>
</header>
<div id="CenterID">
<iframe src="https://calendar.google.com/calendar/embed?src=7lk992skpl91uuj7rpgjlpiuq0%40group.calendar.google.com&ctz=Asia%2FTokyo" style ="border:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
</html>

</html>



<?php require '../footer.php'; ?>