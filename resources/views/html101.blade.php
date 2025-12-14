@extends('template.default')

@section('title', 'Workshop FORM')

@section('content')
<h1>Workshop #HTML - FORM</h1>
                <form>
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
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male">
                                <label class="form-check-label" for="male">ชาย</label>

                                <input class="form-check-input ms-4" type="radio" name="gender" id="female">
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

       }

       let myfunc = (callback)=>{
            callback("in Callback")
       }

       callMe = (param)=> {
            console.log(param)
       }
    </script>
@endpush
