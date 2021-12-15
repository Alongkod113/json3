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
    <link rel="stylesheet" href="ลงทะเบียน.html">
</head>
<style>
    #myForm {
        max-width: 370px;
        border-radius: 1em;
        border: 2px solid orange;
        background-color: whitesmoke;
        padding: 20px;
        margin: 10px;
        
    }

    .my-label {
        width: 38%
    }

    .my-input {
        width: 60%
    }
    #myForm1 {
        max-width: 400px;
        border-radius: 1em;
        border: 2px solid orangered;
        background-color: whitesmoke;
        padding: 50px;
        margin: 10px;
        height: 500px;
       
    }
   

    .bg {
        background-color: rgb(185, 160, 236);
    }

</style>

<body class="bg">
    <div class="container">
        <form action="#" method="post" name="add" class="form-horizontal" id="add">
            <h1 style="text-align: center;">แบบฟอร์มกรอกประวัติส่วนตัว</h1>
            <p></p>
            <form action="home_login.asp?e=1" method="post" autocomplete="off">
                <div id="myForm">
                    <div class="row">
                        <div class="col-label my-label"><label><b>เลขบัตรประชาชน</b><font color="#FF0000">*</font>
                            </label></div>
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
                            <label class="input-group-text" for="inputGroupSelect01"> <b> คำนำหน้านาม</b>
                                <font color="#FF0000">*</font>
                            </label>
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
                            <label class="input-group-text" for="inputGroupSelect02"><b>เพศ</b>
                                <font color="#FF0000">*</font>
                            </label>
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
                    <b>
                        ชื่อ
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="ภาษาไทย">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        นามสกุล
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="ภาษาไทย">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect03"><b>ศาสนา</b>
                                <font color="#FF0000">*</font>
                            </label>
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
                    <b>
                        บ้านเลขที่
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="123/45">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        หมู่ที่
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="เช่น หมู่ที่ 3">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        ถนน
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="เช่น ถ.ราชดำเนิน">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        ตำบล/แขวง
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="เช่น ต.ในเมือง">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        อำเภอ/เขต
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" placeholder="เช่น อ.เมือง">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect04"><b>จังหวัด</b>
                                <font color="#FF0000">*</font>
                            </label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect04" required>
                            <option selected>-เลือกข้อมูล-</option>
                            <option value="1">กะบี่</option>
                            <option value="2"> พังงา</option>
                            <option value="3"> ภูเก็ต</option>
                            <option value="4"> ตรัง </option>
                            <option value="5"> ระนอง </option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        รหัสไปรษณีย์
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" class="center" placeholder="18203">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        โทรศัพท์บ้าน
                    </b>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" class="center" placeholder="0256498731">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <b>
                        โทรศัพท์มือถือ
                    </b>
                    <font color="#FF0000">*</font>
                </div>
                <div class="col-sm-3" required>
                    <input type="text" name="" required class="form-control" class="center" placeholder="0623254987">
                </div>
            </div>
            <div>
                <!--ส่วนสาขาที่สนใจ-->

                <div class="col-sm-2 control-label" required>
                    สาขาที่สนใจ :

                </div>
                <div class="col-sm-2 control-label" required>
                    <div id="myForm1">
                        <label class="checkbox  ">
                            <input type="checkbox" id="itd" value=""> ITD (เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล)
                        </label><br />
                        <label class="checkbox">
                            <input type="checkbox" id="imi" value=""> IMI (นวัตกรรมสารสนเทศทางการแพทย์)
                        </label><br />
                        <label class="checkbox">
                            <input type="checkbox" id="mta" value=""> MTA (เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม)
                        </label><br />
                        <label class="checkbox">
                            <input type="checkbox" id="dcm" value=""> DCM (ดิจิทัลคอนเทนต์และสื่อ)
                        </label><br />
                        <label class="checkbox">
                            <input type="checkbox" id="comm" value=""> COMM (นิเทศศาสตร์)
                        </label><br />
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">ตกลง</button>

                        </div>
                    </div>
                </div>
        </form>
</body>

</html>
