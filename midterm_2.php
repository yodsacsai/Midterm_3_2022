<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online Services</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $id_card_number = $_POST["id_card_number"];
    $pre_name = $_POST["pre_name"];
    $m_name = $_POST["m_name"];
    $discount = $_POST["discount"];


    $water = isset($_POST["water"]) ? $water_price = $_POST["water_baht"] : $water_price = 0;
    $electric = isset($_POST["electric"]) ? $electric_price = $_POST["electric_baht"] : $electric_price = 0;
    $phone = isset($_POST["phone"]) ? $phone_price = $_POST["phone_baht"] : $phone_price = 0;
    $ais = isset($_POST["ais"]) ? $ais_price = $_POST["ais_baht"] : $ais_price = 0;
    $dtac = isset($_POST["dtac"]) ? $dtac_price = $_POST["dtac_baht"] : $dtac_price = 0;
    $true = isset($_POST["true"]) ? $true_price = $_POST["true_baht"] : $true_price = 0;
    $total = $water_price + $electric_price + $phone_price + $ais_price + $dtac_price + $true_price;
    $price_after_discount = ($water_price + $electric_price) * $discount;
    $phone_service = 0;
    $phone = isset($_POST["phone"]) ? $phone_service += 15 : $phone_service += 0;
    $ais = isset($_POST["ais"]) ? $phone_service += 15 : $phone_service += 0;
    $dtac = isset($_POST["dtac"]) ? $phone_service += 15 : $phone_service += 0;
    $true = isset($_POST["true"]) ? $phone_service += 15 : $phone_service += 0;

    $final_price = $total - $price_after_discount + $phone_service;

    ?>
    <img src="./images/onlineservices.jpg" alt="" style="display:block;margin-left:auto;margin-right:auto;">
    <hr>

    <table border="0">
        <tr>
            <th colspan="2">
                <h2>ใบเสร็จชำระค่าสาธารณูปโภค</h2>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <h3>ใบเสร็จชำระค่าบริการ</h3>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <?php echo $pre_name . " " . $m_name; ?>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                รหัสประจำตัวประชาชน <?php echo $id_card_number; ?>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                รายการชำระค่าบริการ
            </th>
        </tr>
        <tr>
            <th id="col2">
                ประปา
            </th>
            <th id="col1">
                <?php echo $water_price; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                ไฟฟ้า
            </th>
            <th id="col1">
                <?php echo $electric_price; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                โทรศัพท์บ้าน
            </th>
            <th id="col1">
                <?php echo $phone_price; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                AIS
            </th>
            <th id="col1">
                <?php echo $ais_price; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                DTAC
            </th>
            <th id="col1">
                <?php echo $dtac_price; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                TRUE
            </th>
            <th id="col1">
                <?php echo $true_price; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                รวมเป็นเงิน
            </th>
            <th id="col1">
                <?php echo $total; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                ส่วนลด
            </th>
            <th id="col1">
                <?php echo $price_after_discount; ?> บาท
            </th>
        </tr>
        <tr>
            <th id="col2">
                รวมเป็นเงินที่ต้องชำระ
            </th>
            <th id="col1">
                <?php echo $final_price; ?> บาท
            </th>
        </tr>
    </table>

</body>

</html>