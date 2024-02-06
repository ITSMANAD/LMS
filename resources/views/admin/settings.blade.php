@extends('admin.master')
@section('title','تنظیمات سایت')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">تنظیمات وبسایت</h1>

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="card-title">پیکربندی</div>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                  <label for="sitename">نام سایت</label>
                  <input type="text" value="{{$Settings->name}}" class="form-control" id="sitename" name="sitename">
                </div>
                <div class="form-group">
                  <label for="siteintro">توضیحات کوتاهی در مورد وبسایت</label>
                  <input type="text" value="{{$Settings->intro}}" name="siteintro" class="form-control" id="siteintro">
                </div>
                <div class="form-group">
                    <label for="siteseo">کلمه کلیدی وبسایت</label>
                    <input type="text" value="{{$Settings->seo}}" name="siteseo" class="form-control" id="siteseo">
                  </div>
                  <div class="form-group">
                    <label for="siteemail">ایمیل وبسایت</label>
                    <input type="email" value="{{$Settings->email}}" name="siteemail" class="form-control" id="siteemail">
                  </div>
                  <div class="form-group">
                    <label for="sitephone">شماره تماس وبسایت</label>
                    <input type="tel" value="{{$Settings->phone}}" name="sitephone" class="form-control" id="sitephone">
                  </div>
                  <div class="form-group">
                    <label for="sitelogo">لوگو وبسایت</label>
                    <input type="file" name="sitelogo" class="form-control file-input" id="sitelogo">
                  </div>
                <button type="submit" class="btn btn-primary">ارسال اطلاعات</button>
              </form>
                              
        
        </div>
    </div>
</div>
@endsection