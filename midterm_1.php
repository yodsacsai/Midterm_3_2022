<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Services</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <img src="./images/onlineservices.jpg" alt="" style="display:block;margin-left:auto;margin-right:auto;">
    <hr>
    <form action="./midterm_2.php" method="POST" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <th colspan="2">
                    <h1>Online Services V.1.0</h1>
                </th>
            </tr>
            <tr>
                <th colspan="2">
                    <h2>"ชำระค่าสาธารณูปโภคหลากหลายเพื่อความของสะดวกของคุณ"</h2>
                </th>
            </tr>
            <tr>
                <th id="col1">
                    รหัสประจำตัวประชาชน
                </th>
                <th id="col2">
                    <input type="text" name="id_card_number" id="">
                </th>
            </tr>
            <tr>
                <th id="col1">
                    คำนำหน้า
                </th>
                <th id="col2">
                    <input type="radio" name="pre_name" value="Mr.">นาย
                    <input type="radio" name="pre_name" value="Mrs.">นาง
                    <input type="radio" name="pre_name" value="Miss.">นางสาว
                </th>
            </tr>
            <tr>
                <th id="col1">
                    ชื่อ-สกุล
                </th>
                <th id="col2">
                    <input type="text" name="m_name" id="">
                </th>
            </tr>
            <tr>
                <th rowspan="2" id="col1">
                    ชำระค่าสาธารณูปโภค
                </th>
                <th id="col2">
                    <input type="checkbox" name="water" id="">ประปา <input type="text" name="water_baht" id=""> บาท
                </th>
            </tr>
            <tr>
                <th id="col2">
                    <input type="checkbox" name="electric" id="">ไฟฟ้า <input type="text" name="electric_baht" id=""> บาท
                </th>
            </tr>
            <tr>
                <th rowspan="4" id="col1">
                    ขำระค่าโทรศัพท์
                </th>
                <th id="col2">
                    <input type="checkbox" name="phone" id="">โทรศัพท์บ้าน <input type="text" name="phone_baht" id=""> บาท
                </th>
            </tr>
            <tr>
                <th id="col2">
                    <input type="checkbox" name="ais" id="">AIS <input type="text" name="ais_baht" id=""> บาท
                </th>
            </tr>
            <tr>
                <th id="col2">
                    <input type="checkbox" name="dtac" id="">DTAC <input type="text" name="dtac_baht" id=""> บาท
                </th>
            </tr>
            <tr>
                <th id="col2">
                    <input type="checkbox" name="true" id="">Ture <input type="text" name="true_baht" id=""> บาท
                </th>
            </tr>
            <tr>
                <th id="col1">
                    ส่วนลดเฉพาะค่าสาธารณูปโภค
                </th>
                <th id="col2">
                    <select name="discount">
                        <option value="0">ไม่มีส่วนลด</option>
                        <option value="0.05">5%</option>
                        <option value="0.1">10%</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="ชำระค่าบริการ">
                    <input type="reset" value="ยกเลิก">
                </th>
            </tr>
        </table>
        <hr>
    </form>
    <table>
        <tr>
            <th colspan="2">
                <h3> <ins>หมายเหตุ</ins> <span style="font-weight: normal;">ค่าบริการคิด 15 บาทต่อรายการ โดยคิดเฉพาะการชำระค่าโทรศัพท์เท่านั้น</span> </h3>
            </th>
        </tr>
    </table>



</body>

</html>