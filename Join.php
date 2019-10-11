<?php require '../header.php'; ?>

<!--説明会管理＿新規説明会追加-->
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
                </td>
            </tr>
        </table>
    </nav>
</header>
<br>
<!--枠線-->
<div style="border: 1px solid #cccccc; padding: 10px;">
    <table align="center">
        <tr>
            <td width="22"><input type="text" size="22" placeholder="求人No."></td> <!--求人No.-->
            <td width="15"><select id="Division" name="Division">                   <!--区分 -->
                                <option disabled selected value>区分</option>
                                <option value="福岡校">福岡校</option>
                                <option value="北九州校">北九州校</option>
                            </select></td>
            <td width="40"><input type="text" size="40" placeholder="企業名"></td>  <!-- 企業名-->
            <td width="15"><select id="Content" name="Content">                    <!--内容 -->
                                <option disabled selected value>内容</option>
                                <option value="説明会">説明会</option>
                                <option value="セミナー">セミナー</option>
                                <option value="OB会">OB会</option>
                            </select></td>
            <td width="20"><input type="date" size="20"></td>                       <!--開催日-->
            <td width="40"><input type="text" size="40" placeholder="職種"></td>    <!--職種 -->
            <td width="20"><input type="text" size="20" placeholder="対象"></td>    <!--対象 -->
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
</div>
<div style="border: 1px solid #cccccc; padding: 10px;">
    開催時間<select name="Starttime" id="Starttime" style="position: absolute; left: 200px">  <!-- 開催時間 --> <!-- 開始時間-->
                <option disabled selected value>----</option>
                <option value="8:00">8:00</option>
                <option value="9:00">9:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
                <option value="23:00">23:00</option>
                <option value="24:00">24:00</option>
                <option value="1:00">1:00</option>
                <option value="2:00">2:00</option>
                <option value="3:00">3:00</option>
                <option value="4:00">4:00</option>
                <option value="5:00">5:00</option>
                <option value="6:00">6:00</option>
                <option value="7:00">7:00</option>
            </select>
            <p style="position: absolute; left: 275px; top: 170px">〜</p>
            <select name="Lasttime" id="Lasttime" style="position: absolute; left: 300px">   <!--　終了時間-->
                <option disabled selected value>----</option>
                <option value="9:00">9:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
                <option value="23:00">23:00</option>
                <option value="24:00">24:00</option>
                <option value="1:00">1:00</option>
                <option value="2:00">2:00</option>
                <option value="3:00">3:00</option>
                <option value="4:00">4:00</option>
                <option value="5:00">5:00</option>
                <option value="6:00">6:00</option>
                <option value="7:00">7:00</option>
                <option value="8:00">8:00</option>
            </select><br>

    開催場所<input type="text" id="Briefing_place" size="40" style="position: absolute; left: 200px"><br> <!--開催場所-->

    持参物<input type="text" id="Briefing_Bring" size="40" style="position: absolute; left: 200px"><br> <!--持参物-->

    説明会入力〆切<input type="date" name="Deadline_year" id="Deadline_year" style="position: absolute; left: 200px">  <!-- 説明会入力〆切 --> <!--〆切年 -->
    <br>

    受験確認入力〆切<input type="date" name="Exam_year" id="Exam_year" style="position: absolute; left: 200px">  <!-- 受験確認入力〆切 --> <!--〆切年 -->
    <br>

    勤務地<input type="text" id="Work_Location" size="20" style="position: absolute; left: 200px"><br> <!--勤務地-->

    説明会参加数<input type="text" id="Briefing_Number" size="10" style="position: absolute; left: 200px"><br><!--説明会参加数--> <!-- DBから読み込む -->

    受験参加数<input type="text" id="Exam_Number" size="10" style="position: absolute; left: 200px"><br><!--受験参加数--> <!--DBから読み込む-->

    内定数<input type="text" id="Offer_Number" size="10" style="position: absolute; left: 200px"><br> <!--内定数--> <!--DBから読み込む-->

    備考<input type="text" id="Briefing_Remarks" size="150" style="position: absolute; left: 200px"><!--備考-->
</div><br>

    <input type="button" id="Briefing_Join" value="追加" style="position: absolute; right: 20px;">
</html>


<?php require '../footer.php'; ?>