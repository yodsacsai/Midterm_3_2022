<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMR</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <table>
        <tr>
            <th>
                <h1>โปรแกรมคำนวณ BMR-TDEE</h1>
            </th>
        </tr>
    </table>
    <img src="./images/bt.PNG" alt="" style="display:block;margin-left:auto;margin-right:auto;">
    <hr>
    <form action="./bmi_2.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th id="col1">
                    ชื่อ-สกุล :
                </th>
                <th id="col2">
                    <input type="text" name="name" id="">
                </th>
            </tr>
            <tr>
                <th id="col1">
                    เพศ :
                </th>
                <th id="col2">
                    <input type="radio" name="sex" value="ชาย" id="">ชาย
                    <input type="radio" name="sex" value="หญิง" id="">หญิง
                </th>
            </tr>
            <tr>
                <th id="col1">
                    น้ำหนัก(กิโลกรัม) :
                </th>
                <th id="col2">
                    <input type="text" name="weight" id="">
                </th>
            </tr>
            <tr>
                <th id="col1">
                    ส่วนสูง(เซนติเมตร) :
                </th>
                <th id="col2">
                    <input type="text" name="height" id="">
                </th>
            </tr>
            <tr>
                <th id="col1">
                    อายุ(ปี) :
                </th>
                <th id="col2">
                    <input type="text" name="age" id="">
                </th>
            </tr>
            <tr>
                <th id="col1">
                    กิจกรรม :
                </th>
                <th id="col2">
                    <select name="activition" id="">
                        <option value="0">ไม่ออกกำลังกายเลย</option>
                        <option value="1">ออกกำลังกาย 1-3 วัน/สัปดาห์</option>
                        <option value="2">ออกกำลังกาย 3-5 วัน/สัปดาห์</option>
                        <option value="3">ออกกำลังกาย 6-7 วัน/สัปดาห์</option>
                        <option value="4">ออกกำลังกายอย่างหนัก</option>
                    </select>
                </th>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <th>
                    <input type="submit" value="ตกลง">
                    <input type="reset" value="ยกเลิก">
                </th>
            </tr>
        </table>
    </form>
</body>

</html>