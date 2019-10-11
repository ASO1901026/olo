<?php require '../header.php'; ?>


<!--学生ユーザー一覧画面-->

<html>
<link rel="stylesheet" href=".idea/style.css">
<link rel="script" href=".idea/header.js">

<!--　ヘッダー　-->
<header>
    <nav>
        <table border="1" width="100%" style="border-collapse: collapse">
            <tr>
                <th>
                    <a href="Studentuser.php" class="user">ユーザー管理</a>
                </th>
                <th>
                    <a href="List.php" class="briefing">説明会管理　</a>
                </th>
            </tr>
            <tr>
                <!--  更新ボタン -->
                <td colspan="2" class="colspan">学生ユーザー一覧
                    <input type="button" value="スプレットシート更新"
                           id="updateBt" style="position: absolute; right: 10px; top: 70px;"></td>
            </tr>
        </table>
    </nav>
</header>

<!--本文-->
<hr>
<table align="center">
    <tr>
        <td width="10"><input type="image" src=".idea/search.png"></td>
        <td width="25"><input type="text" size="25" placeholder="学籍番号検索"></td> <!-- 学籍番号　-->
        <td width="22"><input type="text" size="22" placeholder="名前検索"></td> <!-- 名前　-->
        <td width="15"><select id="Sex" name="Sex">                             <!--性別-->
                            <option disabled selected value>性別</option>
                            <option value="男">男</option>
                            <option value="女">女</option>
                       </select></td>
        <td width="15"><input type="text" size="15" placeholder="年齢検索"></td> <!-- 年齢　-->
        <td width="40"><input type="text" size="40" placeholder="所属検索"></td> <!-- 所属　-->
        <td width="15"><input type="text" size="15" placeholder="学年検索"></td> <!-- 学年　-->
        <td width="30"><input type="text" size="30" placeholder="状況検索"></td> <!-- 状況　-->
        <td><select id="Emotion" name="Emotion">                                <!--感情-->
                <option disabled selected value>感情</option>
                <option value="良️">⭕️</option>
                <option value="悪">✖︎</option>
            </select></td>
        <td></td> <!-- プルダウン　-->
    </tr>
</table>

<hr><!-- 1本線 -->
<table align="center">
    <tr>
        <td width="170">学籍番号</td>
        <td width="140">名前</td>
        <td width="100">性別</td>
        <td width="100">年齢</td>
        <td width="250">所属</td>
        <td width="100">学年</td>
        <td width="210">状況</td>
        <td>感情</td>
        <td></td>
    </tr>
<table align="center" border="1" style="border-collapse: collapse; border-color:gray">
<!-- idは設定してない　-->
    <tr>
        <td width="25" id="td_css1"><input type="text" size="25"></td> <!-- 学籍番号　-->
        <td width="22" id="td_css"><input type="text" size="22"></td> <!-- 名前　-->
        <td width="15" id="td_css"><input type="text" size="15"></td> <!-- 性別　-->
        <td width="15" id="td_css"><input type="text" size="15"></td> <!-- 年齢　-->
        <td width="40" id="td_css"><input type="text" size="40"></td> <!-- 所属　-->
        <td width="15" id="td_css"><input type="text" size="15"></td> <!-- 学年　-->
        <td width="35" id="td_css"><input type="text" size="35"></td> <!-- 状況　-->
        <td id="td_css2">⭕</td> <!-- 感情　-->
    </tr>
    <tr>
        <td colspan="4" id="td_css3">参加説明会一覧</td>
        <td colspan="4" id="td_css4">詳細状況一覧</td>
    </tr>
    <tr>
        <td id="td_css5">190000001<!--DB--></td>
        <td colspan="2" id="td_css6">麻生情報ビジネス株式会社<!----></td>
        <td id="td_css6">説明会<!--DB--></td>
        <td colspan="4" id="td_css7"><input type="text"><!--DB--></td>
    </tr>
</table>


<!--ボタンを押したら下に出るやつ　未完成-->
<table align="center">
        <div class="hidden_box" style="position: absolute;right: 100px;top: 185px">
                <label for="label1"><img src=".idea/down.png"></label>
                <input type="checkbox" id="label1"/>
                <div class="hidden_show">
                    <!--非表示ここから-->
                    <p>うんち</p>
                    <!--ここまで-->
                </div>
        </div><!-- プルダウン　-->
<!--    <tr>-->
<!--        <td width="25"><input type="text" size="25"></td> <!-- 学籍番号　-->
<!--        <td width="22"><input type="text" size="22"></td> <!-- 名前　-->
<!--        <td width="15"><input type="text" size="15"></td> <!-- 性別　-->
<!--        <td width="15"><input type="text" size="15"></td> <!-- 年齢　-->
<!--        <td width="40"><input type="text" size="40"></td> <!-- 所属　-->
<!--        <td width="15"><input type="text" size="15"></td> <!-- 学年　-->
<!--        <td width="35"><input type="text" size="35"></td> <!-- 状況　-->
<!--        <td>⭕</td> <!-- 感情　-->
<!--        <td></td> <!-- プルダウン　-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td width="25"><input type="text" size="25"></td> <!-- 学籍番号　-->
<!--        <td width="22"><input type="text" size="22"></td> <!-- 名前-->
<!--        <td width="15"><input type="text" size="15"></td> <!-- 性別　-->
<!--        <td width="15"><input type="text" size="15"></td> <!-- 年齢-->
<!--        <td width="40"><input type="text" size="40"></td> <!-- 所属　-->
<!--        <td width="15"><input type="text" size="15"></td> <!-- 学年　-->
<!--        <td width="35"><input type="text" size="35"></td> <!-- 状況　-->
<!--        <td>⭕</td> <!-- 感情　-->
<!--        <td></td> <!-- プルダウン　-->
<!--    </tr>-->
</table>





</html>


<?php require '../footer.php'; ?>