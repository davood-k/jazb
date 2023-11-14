@extends('welcome')

@section('mohtava')
    {{-- @include('admin.layouts.errors') --}}

    <!-- form start -->
    <form class="" method="post" action="{{ route('sendpersons') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                <div class="form-group">
                    <label>شماره نامه</label>
                    <input name="num" type="text" class="form-control">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <label>تاریخ نامه</label>
                    <input name="date" type="text" class="form-control">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <label style="display: block;margin-bottom: 15px;width: 100%">جنسیت</label>
                    <select name="gender">
                        <option value="1">مرد</option>
                        <option value="2">زن</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>معرفی از</label>
                    <input name="moa" type="text" class="form-control">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label>معاونت</label>
                    <input name="mo" type="text" class="form-control">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label>تعداد سطر</label>
                    <input name="counter" type="text" class="form-control counter">
                </div>
            </div>
            <div class="col-2">
                <img src="/dist/img/checked.png" title="افزودن تکی">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="table">
                    <thead>
                        <th>کد ملی</th>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>توضیحات</th>
                        <th>ملاحظات</th>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" title="ارسال">
            </div>
        </div>
    </form>
    <script>
        $('.counter').keydown(function(e) {
            if (e.keyCode == 13) {
                $('#tbody').empty();
                var count = parseInt($('.counter').val());

                e.preventDefault();
                for (let i = 0; i < count; i++) {
                    $('#tbody').append(`<tr> 
            <td> 
                <input name="code${i+1}" type="text" class="form-control">
            </td> 
            <td> 
                <input name="name${i+1}" type="text" class="form-control">
            </td> 
            <td> 
                <input name="family${i+1}" type="text" class="form-control">
            </td> 
            <td> 
                <input name="tozih${i+1}" type="text" class="form-control">
            </td> 
            <td> 
                <input name="molahezat${i+1}" type="text" class="form-control">
            </td> 
           </tr>`);
                }
            }
        });
    </script>
@endsection
