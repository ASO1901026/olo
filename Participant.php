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
                <td colspan="2" class="colspan">参加者一覧
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
<body>
    <table>
        <tr>
            <td>1901001</td>
            <td>麻生情報ビジネス専門学校</td>
            <td>説明会</td> <!--前の画面から読み込む-->
        </tr>
    </table>

    <table align="center">
        <tr>
            <td width="100">参加者</td>
            <td width="100"><!--DB--></td>
            <td width="150"></td>
            <td width="450"></td>
            <td width="500">学生一覧</td>

        </tr>
    </table>

    <table align="left" width="45%" frame="box">
        <tr>
            <td width="80">1701021</td>
            <td width="80">是末真志</td>
            <td width="40">男</td>
            <td width="40">20</td>
            <td width="280">麻生情報ビジネス専門学校</td>
            <td width="40">3</td>
            <td width="40">➖</td>
        </tr>
    </table>

    <table align="right" width="45%" frame="box">
        <tr>
            <td width="80">1701022</td>
            <td width="80">小嶋大地</td>
            <td width="40">男</td>
            <td width="40">20</td>
            <td width="280">麻生情報ビジネス専門学校</td>
            <td width="40">3</td>
            <td width="40">➕</td>
        </tr>
    </table>

<!--  追加・削除　矢印  --><!--ボタンにしてるけど別に矢印自体にはモーションがないから画像でもいい-->
    <input type="image" src=".idea/Arrowsout.png" style="position: absolute; top: 250px; left: 700px">
    <input type="image" src=".idea/Arrowsin.png" style="position: absolute; top: 400px; left: 700px">
</body>
</html>




<?php require '../footer.php'; ?>