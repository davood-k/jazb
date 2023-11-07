@extends('welcome')

@section('mohtava')

        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">خروجی</h3>
    
                    <div class="row card-tools">
    
                        <form action="" >
    
                            <div class="input-group input-group-sm ml-3" style="width: 150px;">
                                <input type="text" id="search" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">
    
                                <div class="input-group-append ">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
    
                    </div>
                    
                </div>
                <!-- /.card-header -->
                <form action="{{ route('khorooji')}}" method="post">
                    @csrf
                    <div class="card-body table-responsive p-0">
                        <textarea name="expexcelsr" id="expex" cols="30" rows="10"></textarea>
                     </div>
                     <button type="submit">send</button>
                </form>
                 
            </div>
            <!-- /.card -->
        </div>
       
@endsection