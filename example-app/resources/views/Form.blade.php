@extends('layouts.default')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h1 class="card-title">Workshop #HTML - FORM</h1>
    </div>
    <form class="container-sm">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="InputName">ชื่อ</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Enter name">
                </div>
                <div class="form-group col-md-6">
                    <label for="InputLastname">สกุล</label>
                    <input type="text" class="form-control" id="InputLastname" placeholder="Enter lastname">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>วัน/เดือน/ปี</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="InputAge">อายุ</label>
                    <input type="number" class="form-control" id="InputAge" placeholder="Enter age">
                </div>
            </div>
            <div class="form-group">
                <label>เพศ</label>
                <div class="form-check">
                    <input type="radio" name="Gender" class="form-check-input" id="Male">
                    <label class="form-check-label" for="Male">ชาย</label>
                    &emsp;&emsp;&emsp;
                    <input type="radio" name="Gender" class="form-check-input" id="Female">
                    <label class="form-check-label" for="Female">หญิง</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">รูป</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label>ที่อยู่</label>
                <textarea class="form-control" rows="3" placeholder="Enter address"></textarea>
            </div>
            <div class="form-group col-md-6 ">
                <label>สีที่ชอบ</label>
                <select class="form-control">
                    <option >สีเเดง</option>
                        <option >สีฟ้า</option>
                        <option >สีดำ</option>
                        <option >สีเขียว</option>
                        <option >สีน้ำเงิน</option>
                        <option >สีชมพู</option>
                        <option >สีส้ม</option>
                        <option >สีเหลือง</option>
                        <option >สีขาว</option>
                        <option >สีอื่นๆ</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>แนวเพลงที่ชอบ</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">เพื่อชีวิต</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">ลูกทุ่ง</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">แจ๊ส </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">อื่น ๆ </label>
                </div>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
