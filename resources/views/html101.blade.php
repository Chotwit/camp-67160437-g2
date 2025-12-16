@extends('template.default')

@section('title', 'Workshop FORM')

@section('content')
<h1>Workshop #HTML - FORM</h1>
                <form class="needs-validation" novalidate>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="fname">ชื่อ</label>
                        </div>
                        <div class="col">
                            <input id="fname" class="form-control">
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดระบุชื่อ
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">นามสกุล</label>
                        </div>
                        <div class="col">
                            <input id="lname" class="form-control">
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดระบุนามสกุล
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="birthday">วัน/เดือน/ปีเกิด</label>
                        </div>
                        <div class="col">
                            <input type="date"  id="birthday"  class="form-control" placeholder="dd/mm/yyyy">
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดระบุวันที่
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="age">อายุ</label>
                        </div>
                        <div class="col">
                            <input id="age" class="form-control">
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดระบุอายุ
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label>เพศ</label>
                        </div>
                        <div class="col">
                            <div id="gender">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" required>
                                    <label class="form-check-label" for="male">ชาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" required>
                                    <label class="form-check-label" for="female">หญิง</label>
                                </div>
                            </div>

                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดเลือกเพศ
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="image">รูป</label>
                        </div>
                        <div class="col">
                            <input class="form-control" type="file" id="image">
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดใส่รูป
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <labl for="address">ที่อยู่</labl>
                        </div>
                        <div class="col">
                            <textarea id="address" class="form-control" rows="4"></textarea>
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดระบุที่อยู่
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label for="color">สีที่ชอบ</label>
                        </div>
                        <div class="col">
                            <select id="color" class="form-select form-select-sm" aria-label="Small select example">
                                <option selected>เลือก</option>
                                <option value="1">สีแดง</option>
                                <option value="2">สีฟ้า</option>
                                <option value="3">สีเหลือง</option>
                            </select>
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดเลือกสีที่ชอบ
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <label>แนวเพลงที่ชอบ</label>
                        </div>
                        <div class="col">
                            <div id="music">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="music" id="music1">
                                    <label class="form-check-label" for="music1">j-pop</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="music" id="music2">
                                    <label class="form-check-label" for="music2">k-pop</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="music" id="more">
                                    <label class="form-check-label" for="more">อื่นๆ</label>
                                </div>
                            </div>

                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                โปรดเลือกแนวเพลง
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkdata">
                                <label class="form-check-label" for="checkdata">
                                    ยินยอมให้เก็บข้อมูล
                                </label>
                                <div class="valid-feedback">
                                    ถูกต้อง
                                </div>
                                <div class="invalid-feedback">
                                    โปรดยินยอมให้เก็บข้อมูล
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <button class="btn btn btn-light" type="reset">Reset</button>
                        </div>
                        <div class="col">
                            <button class="btn btn btn-success" onclick="clickMe()" type="button">Success</button>
                        </div>
                    </div>

                </form>
@endsection

@push('scripts')
    <script>
       let clickMe = function () {
            let fname = document.getElementById('fname')
            let lname = document.getElementById('lname')
            let birthday = document.getElementById('birthday')
            let age = document.getElementById('age')
            let address = document.getElementById('address')
            let gender = document.getElementById('gender')
            let genderMale = document.getElementById('male')
            let genderFemale = document.getElementById('female')
            let color = document.getElementById('color')
            let music = document.getElementById('music')
            let jpop = document.getElementById('music1')
            let kpop = document.getElementById('music2')
            let more = document.getElementById('more')
            let image = document.getElementById('image')
            let data = document.getElementById('checkdata')


            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            }else{
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            if(birthday.value == ""){
                birthday.classList.remove('is-valid')
                birthday.classList.add('is-invalid')
            }else{
                birthday.classList.remove('is-invalid')
                birthday.classList.add('is-valid')
            }

            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            }else{
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }

            if(address.value == ""){
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            }else{
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            if(!genderMale.checked && !genderFemale.checked) {
                gender.classList.remove('is-valid')
                gender.classList.add('is-invalid')
            } else {
                gender.classList.remove('is-invalid')
                gender.classList.add('is-valid')
            }

            if(color.value == "เลือก") {
                color.classList.remove('is-valid')
                color.classList.add('is-invalid')
            } else {
                color.classList.remove('is-invalid')
                color.classList.add('is-valid')
            }

            if(!jpop.checked && !kpop.checked && !more.checked) {
                music.classList.remove('is-valid')
                music.classList.add('is-invalid')
            } else {
                music.classList.remove('is-invalid')
                music.classList.add('is-valid')
            }

            if (image.files.length === 0) {
                image.classList.remove('is-valid')
                image.classList.add('is-invalid')
            } else {
                image.classList.remove('is-invalid')
                image.classList.add('is-valid')
            }

            if(!data.checked) {
                data.classList.remove('is-valid')
                data.classList.add('is-invalid')
            } else {
                data.classList.remove('is-invalid')
                data.classList.add('is-valid')
            }
       }

       let myfunc = (callback)=>{
            callback("in Callback")
       }

       callMe = (param)=> {
            console.log(param)
       }
    </script>
@endpush
