<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'sarir') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="" rel="stylesheet">

    <!-- Styles -->
    <link href="" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body { direction:rtl;}
</style>
<body>
<div class="container_fluid">
    <div class="row m-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="float: right;">کاربران</h3>
</br>
                    <div class="row card-tools d-flex" style="float: left;">

                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                <div class="input-group-append ">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                        <div class="btn btn-group-sm">
                           
                                <a class="btn btn-info" href="">ایجاد کاربر جدید</a>
                       
                            <a class="btn btn-warning" href="">کاربران مدیر</a>
                            
                        </div>
                    </div>
                    
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>نام</th>
                            <th>فامیل</th>
                            <th>وضعيت ايميل كاربر</th>
                            <th>اقدامات</th>
                            <th>ايميل كابر</th>
                            <th>اقدامات</th>
                            <th>اقدامات</th>
                            <th>ايميل كابر</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($Khadems as $item)
                        
                <tr>
                <form action="{{ route('emtiaz.edit' , ['khadem' => $item->id ] ) }}" method="get">
                <td>
                {{ $item->namesr }}
                  </td>
                  <td>
                {{ $item->familysr }}
                  </td>
                  <td>
                {{ $item->codemsr }}
                  </td> 
                  <td>
                {{ $item->tdatesr }}
                  </td>
                  <td>
                {{ $item->dateshsr }}
                  </td>
                  <td>
                {{ $item->mobilesr }}
                  </td>
                  <td>
                {{ $item->bkhademyarsr }}
                  </td>
                  <td>
                {{ $item->moavenat }}
                  </td>
                  <td>
                  <button class="btn btn-info">مشاهده</button>
                  </td> 
                  </form>  
                </tr>
                
              @endforeach
              </tbody>
             </table>
            </div>
                <!-- /.card-body -->
                <div class="card-footer">
                {{ $Khadems->links() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

</body>
</html>