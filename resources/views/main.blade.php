@extends('welcome')

@section('mohtava')

<div class="container_fluid">
    <div class="row m-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="float: right;">کاربران</h3>
                    </br>
                    <div class="row card-tools d-flex" style="float: left;">
                        {{-- <div class="btn btn-group-sm">
                           
                            <a class="btn btn-info" href="">صفحه اصلی</a>
                          
                        </div> --}}
                        <form action="">
                        <div class="input-group input-group-sm">
                            <input type="text" type="text" name="search" class="form-control input-group input-group-sm" placeholder="جستجو" value="{{ request('search') }}">
                        </div>
                        </form>

                        
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
                    {{ $item->total }}
                  </td>
                  <td>
                {{ $item->bkhademyarsr }}
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

@endsection