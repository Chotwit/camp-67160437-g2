<!DOCTYPE html>
<html>
    <head>
        <title> ส่วนหัว </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
        <style>
            body{
                 font-family: "Noto Sans Thai", sans-serif;
            }
        </style>
    </head>
    <body>
       <div class="container mt-4">
            <h1>
                Workshop #HTML - FORM</h1>
                <form>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="fname">ชื่อ</label>
                        </div>
                        <div class="col">
                            <input id="fname" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">นามสกุล</label>
                        </div>
                        <div class="col">
                            <input id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="birthday">วัน/เดือน/ปีเกิด</label>
                        </div>
                        <div class="col">
                            <input type="date"  id="birthday"  class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="age">อายุ</label>
                        </div>
                        <div class="col">
                            <input id="age" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label>เพศ</label> 
                        </div>
                        <div class="col">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male">
                                <label class="form-check-label" for="male">ชาย</label>
                            </div>
                            <div class="form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="gender" id="female">
                                <label class="form-check-label" for="female">หญิง</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="image">รูป</label>
                        </div>
                        <div class="col">
                            <input class="form-control" type="file" id="image">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <labl for="address">ที่อยู่</labl>
                        </div>
                        <div class="col">
                            <textarea id="address" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="color">สีที่ชอบ</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option selected>เลือก</option>
                                <option value="1">สีแดง</option>
                                <option value="2">สีฟ้า</option>
                                <option value="3">สีเหลือง</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label>แนวเพลงที่ชอบ</label> 
                        </div>
                        <div class="col">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="music" id="music1">
                                <label class="form-check-label" for="music1">j-pop</label>
                            </div>
                            <div class="form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="music" id="music2">
                                <label class="form-check-label" for="music2">k-pop</label>
                            </div>
                            <div class="form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="music" id="more">
                                <label class="form-check-label" for="more">อื่นๆ</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                                <label class="form-check-label" for="checkDefault">
                                ยินยอมให้เก็บข้อมูล
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-sm btn-light me-4">Reset</button>
                            <button type="button" class="btn btn-sm btn-success">Success</button>
                        </div>
                    </div>

                </form>
       </div>
    </body>


</html>
