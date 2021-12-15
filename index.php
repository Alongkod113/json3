<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>63112379_Alongkod</title>
</head>
<style>
    #myForm {
        max-width: 370px;
        border-radius: 1em;
        border: 2px solid orange;
        background-color: whitesmoke;
        padding: 20px;
        margin: 10px;
        text-align: left
    }

    .my-label {
        width: 38%
    }

    .my-input {
        width: 60%
    }

    .bg {
        background-color: mediumpurple;
    }

    .bg1 {}
</style>

<body class="bg">

    <form action="#" method="post" name="add" class="form-horizontal" id="add">
        <h1 style="text-align: center;">แบบฟอร์มกรอกประวัติส่วนตัว</h1>
        <p></p>
        <form action="home_login.asp?e=1" method="post" autocomplete="off">
            <div id="myForm">
                <div class="row">
                    <div class="col-label my-label"><label>เลขบัตรประชาชน*</label></div>
                    <div class="col-input my-input"><input type="number" name="fUser" class="center" required=""
                            value="">
                    </div>
                </div>
            </div>
        </form>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">คำนำหน้านาม*</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" required>
                        <option selected>-เลือกข้อมูล-</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2 control-label">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect02">เพศ</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02" required>
                        <option selected>-เลือกข้อมูล-</option>
                        <option value="1">ชาย</option>
                        <option value="2">หญิง</option>
                        <option value="3">ไม่ระบุเพศ</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2 control-label">
              ชื่อ <font color="red"><i class="fa fa-exclamation-circle fa-2x"> </i><br>*</font> :
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="ภาษาไทย">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 control-label">
                นามสกุล* :
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="ภาษาไทย">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect03">ศาสนา</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03" required>
                        <option selected>-เลือกข้อมูล-</option>
                        <option value="1">พุทธ</option>
                        <option value="2">คริสต์ </option>
                        <option value="3">อิสลาม </option>
                        <option value="4">พราหมณ์-ฮินดู</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label">
                บ้านเลขที่*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="123/45">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label">
                หมู่ที่*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="เช่น หมู่ที่ 3">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label">
                ถนน*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="เช่น ถ.ราชดำเนิน">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label">
                ตำบล/แขวง*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="เช่น ต.ในเมือง">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label">
                อำเภอ/เขต*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" placeholder="เช่น อ.เมือง">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2 control-label">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect04">จังหวัด</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect04" required>
                        <option selected>-เลือกข้อมูล-</option>
                        <option value="1">กะบี่</option>
                        <option value="2"> พังงา</option>
                        <option value="3"> ภูเก็ต</option>
                        <option value="3"> ตรัง </option>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2 control-label">
                รหัสไปรษณีย์*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" class="center" placeholder="18203">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2 control-label">
                โทรศัพท์บ้าน
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" class="center" placeholder="0256498731">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2 control-label">
                โทรศัพท์มือถือ*
            </div>
            <div class="col-sm-3" required>
                <input type="text" name="" required class="form-control" class="center" placeholder="0623254987">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">ตกลง</button>

            </div>
        </div>

    </form>
</body>

</html>
