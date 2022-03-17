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

    <?php
    $name = $_POST["name"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $activition = $_POST["activition"];
    $BMR = 0;
    $TDEE = 0;


    if ($sex == "ชาย") {
        $BMR = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
    } else {
        $BMR = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
    }

    if ($activition == 0) {
        $TDEE = $BMR * 1.2;
        $act_detail = "ไม่ออกกำลังกายเลย";
    } else if ($activition == 1) {
        $TDEE = $BMR * 1.375;
        $act_detail = "ออกกำลังกาย 1-3 วัน/สัปดาห์";
    } else if ($activition == 2) {
        $TDEE = $BMR * 1.55;
        $act_detail = "ออกกำลังกาย 3-5 วัน/สัปดาห์";
    } else if ($activition == 3) {
        $TDEE = $BMR * 1.725;
        $act_detail = "ออกกำลังกาย 6-7 วัน/สัปดาห์";
    } else if ($activition == 4) {
        $TDEE = $BMR * 1.9;
        $act_detail = "ออกกำลังกายอย่างหนัก";
    }

    ?>

    <table>
        <tr>
            <th>
                <h1>โปรแกรมคำนวณ BMR-TDEE</h1>
            </th>
        </tr>
    </table>
    <img src="./images/bt.PNG" alt="" style="display:block;margin-left:auto;margin-right:auto;">
    <table>
        <tr>
            <th>
                <h1>ผลการคำนวณ</h1>
            </th>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <th id="col1">
                ชื่อ-สกุล :
            </th>
            <th id="col2">
                <?php echo $name; ?>
            </th>
        </tr>
        <tr>
            <th id="col1">
                เพศ :
            </th>
            <th id="col2">
                <?php echo $sex; ?>
            </th>
        </tr>
        <tr>
            <th id="col1">
                น้ำหนัก(กิโลกรัม) :
            </th>
            <th id="col2">
                <?php echo $weight; ?>
            </th>
        </tr>
        <tr>
            <th id="col1">
                ส่วนสูง(เซนติเมตร) :
            </th>
            <th id="col2">
                <?php echo $height; ?>
            </th>
        </tr>
        <tr>
            <th id="col1">
                อายุ(ปี) :
            </th>
            <th id="col2">
                <?php echo $age; ?>
            </th>
        </tr>
        <tr>
            <th id="col1">
                กิจกรรม :
            </th>
            <th id="col2">
                <?php echo $act_detail; ?>
            </th>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <th id="col1">
                BMR :
            </th>
            <th id="col2">
                <?php echo " " . $BMR; ?>
            </th>
        </tr>
        <tr>
            <th id="col1">
                TDEE :
            </th>
            <th id="col2">
                <?php echo " " . $TDEE; ?>
            </th>
        </tr>
    </table>
</body>

</html>