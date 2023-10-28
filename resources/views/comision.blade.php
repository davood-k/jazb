@extends('welcome')

@section('mohtava')

        <div class="card">
            <div class="card-header">
                    <h3 class="card-title text-danger">لیست افراد کمیسیون</h3>
    
                    <div class="row card-tools">
    
                        <form action="" >
    
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" id="search" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">
    
                                <div class="input-group-append ">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
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
                            <th>نام خانوادگی</th>
                            <th>کدملی</th>
                            <th>محل خدمت</th>
                            <th>سنوات آزمون</th>
                            <th style="width: 250px;">آزمون</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($list as $user)
                            <tr>
                              <td >{{ $user->namesr }}</td>
                              <td>{{ $user->familysr }}</td>
                              <td>{{ $user->codemsr }}</td>
                              <td>{{ $user->bkhademyarsr }}</td>
                              <td>{{ $user->marhalesr }}</td>
                              <?php
                                $temp = \App\Khadem::find($user->id);
                              ?>

                              @foreach($temp->azmoons as $item)
                              @if ($item->nomrehAzmoonsr == 0)
                              <td><button type="button" class="badge badge-info mt-2">عدم شرکت</button></td>
                              @elseif ($item->nomrehAzmoonsr >= 70)
                              <td><button type="button" class="badge badge-success mt-2">قبول شده</button></td>
                              @elseif ($item->nomrehAzmoonsr < 70)
                              <td><button type="button" class="badge badge-danger mt-2">عدم قبولی</button></td>
                              @endif
                              @endforeach

                              <td class="d-flex">
                                 <a class="btn btn-sm btn-info ml-2" href="{{ url('/person/show' , $user->id )}}">جزئیات</a>
                           
                                 <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".myModal-{{$user->id}}">
                                    ثبت نمره
                                </button>

                                <!-- Modal -->
                                <div class="modal fade mt-5 myModal-{{$user->id}}" role="dialog">
                                <div class="modal-dialog">

                                   <!-- Modal content-->
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     </div>
                                     <form method="post" action='azmoon/{{ $user->id }}/sabt'>
                                        @csrf
                                        <div class="mb-3">
                                          <label for="message-text" name="nomrehAz" class="col-form-label mr-4">ثبت نمره آزمون:</label>
                                          <input type="text" class="form-control w-25 m-auto" name="nomrehAz" id="nomrehAz">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">ثبت نمره</button>
                                          </div>
                                      </form>
                                      
                                   </div>
                               
                                  </div>
                                </div>
                                          
                                <form method="post" action="comision/{{ $user->id }}">
                                    @csrf
                                    @method('put')
                                 <button class="btn btn-warning mr-2">انتقال به کمیسیون</button>
                                 </form>         
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                
            </div>
            <!-- /.card -->
        </div>
<script>

</script>
@endsection