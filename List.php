<?php require '../header.php'; ?>



<!--説明会管理＿リスト画面-->
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

<!--本文-->

<hr>
<table align="center">
    <tr>
        <td width="10"><input type="image" src=".idea/search.png"></td>
        <td width="22"><input type="text" size="22" placeholder="求人No.検索"></td> <!--求人No.-->
        <td width="15"><select id="Division" name="Division">                   <!--区分 -->
                <option disabled selected value>区分検索</option>
                <option value="福岡校">福岡校</option>
                <option value="北九州校">北九州校</option>
            </select></td>
        <td width="40"><input type="text" size="40" placeholder="企業名検索"></td>  <!-- 企業名-->
        <td width="15"><select id="Content" name="Content">                    <!--内容 -->
                <option disabled selected value>内容検索</option>
                <option value="説明会">説明会</option>
                <option value="セミナー">セミナー</option>
                <option value="OB会">OB会</option>
            </select></td>
        <td width="20"><input type="date" size="20"></td>                       <!--日付-->
        <td width="40"><input type="text" size="40" placeholder="職種検索"></td>    <!--職種 -->
        <td width="20"><input type="text" size="20" placeholder="対象検索"></td>    <!--対象 -->
        <td width="10"><select name="International" id="International">        <!--留学生 -->
                <option disabled selected value>留学生</option>
                <option value="◯">◯</option>
                <option value="×">×</option>
            </select></td>
        <td width="10"><select name="Disability" id="Disability">        <!--障がい者 -->
                <option disabled selected value>障がい者</option>
                <option value="◯">◯</option>
                <option value="×">×</option>
            </select></td>
        <td></td>
    </tr>
</table>



<hr>

<table align="center">
    <tr>
        <td width="150">求人No.</td>
        <td width="100">区分</td>
        <td width="255">企業名</td>
        <td width="95">内容</td>
        <td width="125">日付</td>
        <td width="255">職種</td>
        <td width="125">対象</td>
        <td width="75">留学生</td>
        <td width="70">障がい者</td>
        <td></td>
    </tr>
</table>
<!--   border="1" style="border-collapse: collapse; border-color:gray"  -->
<table align="center" frame="box">
    <tr>
        <td width="22"><input type="text" size="22"></td> <!--求人No.-->
        <td width="15"><input type="text" size="15"></td> <!--区分 -->
        <td width="40"><input type="text" size="40"></td> <!-- 企業名-->
        <td width="15"><input type="text" size="15"></td> <!--内容 -->
        <td width="20"><input type="text" size="20"></td> <!--日時 -->
        <td width="40"><input type="text" size="40"></td> <!--職種 -->
        <td width="20"><input type="text" size="20"></td> <!--対象 -->
        <td width="10"><input type="text" size="10"></td> <!--留学生 -->
        <td width="10"><input type="text" size="10"></td> <!--障がい者 -->
        <td></td><!--プルダウン用に残してる列-->
    </tr>
    <tr>
        <td>開催時間</td>
        <td colspan="2"><!--DB--></td>
        <td style="font-size: 14px">説明会入力〆切</td>
        <td><input type="date"><!---DB--></td>
        <td>説明会参加数<!--DB--></td>
        <td></td><td></td><td></td><td></td>
    </tr>
    <tr>
        <td>開催場所</td>
        <td colspan="2"><!--DB--></td>
        <td style="font-size: 12px">受験確認入力〆切</td>
        <td><input type="date"><!--DB--></td>
        <td>受験参加数<!--DB--></td>
        <td></td>
        <td colspan="2"></td>
        <td></td>
    </tr>
    <tr>
        <td>持参物</td>
        <td colspan="2"><!--DB--></td>
        <td>勤務地</td>
        <td><!--DB--></td>
        <td>内定数</td>
        <td><!--DB--></td>
        <td colspan="2"><a href="Participant.php">参加者一覧</a></td>
        <td></td>
    </tr>
    <tr>
        <td>備考</td>
        <td colspan="6"><!--DB--></td>
        <td colspan="2"><input type="button" id="ListupdateBt" value="更新"></td>
        <td></td>
    </tr>
</table>
<!--<table align="center">-->
<!--    <tr>-->
<!--        <td width="22"><input type="text" size="22"></td> <!--求人No.-->
<!--        <td width="15"><input type="text" size="15"></td> <!--区分 -->
<!--        <td width="40"><input type="text" size="40"></td> <!-- 企業名-->
<!--        <td width="15"><input type="text" size="15"></td> <!--内容 -->
<!--        <td width="20"><input type="text" size="20"></td> <!--日時 -->
<!--        <td width="40"><input type="text" size="40"></td> <!--職種 -->
<!--        <td width="20"><input type="text" size="20"></td> <!--対象 -->
<!--        <td width="10"><input type="text" size="10"></td> <!--留学生 -->
<!--        <td width="10"><input type="text" size="10"></td> <!--障がい者 -->
<!--        <td></td>-->
<!--    </tr>-->
<!--</table>-->
<!--<table align="center">-->
<!--    <tr>-->
<!--        <td width="22"><input type="text" size="22"></td> <!--求人No.-->
<!--        <td width="15"><input type="text" size="15"></td> <!--区分 -->
<!--        <td width="40"><input type="text" size="40"></td> <!-- 企業名-->
<!--        <td width="15"><input type="text" size="15"></td> <!--内容 -->
<!--        <td width="20"><input type="text" size="20"></td> <!--日時 -->
<!--        <td width="40"><input type="text" size="40"></td> <!--職種 -->
<!--        <td width="20"><input type="text" size="20"></td> <!--対象 -->
<!--        <td width="10"><input type="text" size="10"></td> <!--留学生 -->
<!--        <td width="10"><input type="text" size="10"></td> <!--障がい者-->
<!--        <td></td>-->
<!--    </tr>-->
<!--</table>-->



</html>


<?php require '../footer.php'; ?>