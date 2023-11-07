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
                            <th>نام و نام خانوادگی</th>
                            <th>کدملی</th>
                            <th>محل خدمت</th>
                            <th>حراست</th>
                            <th>تولیت</th>
                            <th>||خدام</th>
                            <th>سرمایه</th>
                            <th>عالی</th>
                            <th>تولیت||</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($list as $user)
                            <tr>
                              <td >{{ $user->namesr }} - {{ $user->familysr }}</td>
                              <td>{{ $user->codemsr }}</td>
                              <?php
                                $temp = \App\Khadem::find($user->id);
                              ?>

                            @foreach($temp->comisions as $item)
                              <td>{{ $item->TnMahalKhsr }}</td>
                              <td>
                                @if ($item->TdHerasatsr == '1')
                                <img src="/dist/img/checked.png" alt="">
                                @else
                                <img src="/dist/img/uncheck.png" alt="">
                                @endif
                              </td>
                              <td>
                                @if ($item->TdToliatsr == '1')
                                <img src="/dist/img/checked.png" alt="">
                                @else
                                <img src="/dist/img/uncheck.png" alt="">
                                @endif
                              </td>
                              <td>
                                @if ($item->SiMKhodamsr == '1')
                                <img src="/dist/img/checked.png" alt="">
                                @else
                                <img src="/dist/img/uncheck.png" alt="">
                                @endif
                              </td>
                              <td>
                                @if ($item->SiMSarmayehsr == '1')
                                <img src="/dist/img/checked.png" alt="">
                                @else
                                <img src="/dist/img/uncheck.png" alt="">
                                @endif
                              </td>
                              <td>
                                @if ($item->SiMAalesr == '1')
                                <img src="/dist/img/checked.png" alt="">
                                @else
                                <img src="/dist/img/uncheck.png" alt="">
                                @endif
                              </td>
                              <td>
                                @if ($item->SiToliatsr == '1')
                                <img src="/dist/img/checked.png" alt="">
                                @else
                                <img src="/dist/img/uncheck.png" alt="">
                                @endif
                              </td>
                           @endforeach

                              <td class="d-flex">

                                 <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".myModal-{{$user->id}}">
                                    ثبت اقدامات
                                </button>

                                <!-- Modal -->
                                <div class="modal fade mt-5 myModal-{{$user->id}}" role="dialog">
                                    <div class="modal-dialog">

                                   <!-- Modal content-->
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     </div>
                                     <form method="post" action='comision/{{ $user->id }}/sabt'>
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="message-text" name="TnMahalKhsr" class="col-form-label mr-4">محل خدمت:</label>
                                                    <select class="form-control w-75 mr-5 " id="type" name="TnMahalKhsr"> 
                                                      @foreach(\App\placeKh::all() as $place)
                                                          <option value="{{ $place->tashKhsr }}">{{ $place->tashKhsr }}</option>
                                                      @endforeach
                                                   </select>
                                                  </div>
                                                
                                                <div>
                                                    <label for="message-text" name="ShHerasatsr" class="col-form-label mr-4">نامه حراست:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="ShHerasatsr" id="ShHerasatsr" value="{{ old('name' , $item->ShHerasatsr) }}">
                                                </div>
                                                <div>
                                                    <label for="message-text" name="TdHerasatsr" class="col-form-label mr-4">تائید حراست:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="TdHerasatsr" id="TdHerasatsr" value="{{ old('name' , $item->TdHerasatsr) }}">
                                                </div>
                                                
                                                <div>
                                                    <label for="message-text" name="ShToliatsr" class="col-form-label mr-4">نامه تولیت:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="ShToliatsr" id="ShToliatsr" value="{{ old('name' , $item->ShToliatsr) }}">
                                                </div>
                                                  
                                                <div>
                                                    <label for="message-text" name="TdToliatsr" class="col-form-label mr-4">تائید تولیت:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="TdToliatsr" id="TdToliatsr" value="{{ old('name' , $item->TdToliatsr) }}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-6">
                                                  
                                                <div>
                                                    <label for="message-text" name="SiMKhodamsr" class="col-form-label mr-4">امضای مدیریت خدام:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="SiMKhodamsr" id="SiMKhodamsr" value="{{ old('name' , $item->SiMKhodamsr) }}">
                                                </div>
                                                  
                                                <div>
                                                    <label for="message-text" name="SiMSarmayehsr" class="col-form-label mr-4">امضای سرمایه انسانی:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="SiMSarmayehsr" id="SiMSarmayehsr" value="{{ old('name' , $item->SiMSarmayehsr) }}">
                                                </div>
                                                
                                                <div>
                                                    <label for="message-text" name="SiMAalesr" class="col-form-label mr-4">امضای مدیریت عالی:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="SiMAalesr" id="SiMAalesr" value="{{ old('name' , $item->SiMAalesr) }}">
                                                </div>
                                                  
                                                <div>
                                                    <label for="message-text" name="SiToliatsr" class="col-form-label mr-4">امضای تولیت:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="SiToliatsr" id="SiToliatsr" value="{{ old('name' , $item->SiToliatsr) }}">
                                                </div>
                                                  
                                                <div>
                                                    <label for="message-text" name="ShHokmsr" class="col-form-label mr-4">شماره حکم:</label>
                                                    <input type="text" class="form-control w-50 m-auto" name="ShHokmsr" id="ShHokmsr" value="{{ old('name' , $item->ShHokmsr) }}">
                                                </div>
                                                {{-- <img onClick="window.print()" class="mt-3" src="/dist/img/print.png" alt=""> --}}
                                            </div>

                                            <div class="modal-footer m-3">
                                                <button type="submit" class="btn btn-primary">ثبت اقدامات</button>
                                            </div>

                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div> 
                                <a class="btn btn-sm btn-danger mr-2" data-toggle="modal" data-target=".myModal-{{$user->user_id}}">بایگانی</a>
                                 
                                 <!-- Modal -->
                                <div class="modal fade mt-5 myModal-{{$user->user_id}}" role="dialog">
                                    <div class="modal-dialog">
    
                                       <!-- Modal content-->
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         </div>
                                         <form method="post" action='{{ url('/person/edit' , $user->id )}}'>
                                            @csrf
                                            <div class="mb-3">
                                             
                                              <p class="m-3">آیا از بایگانی فرد مطمئن هستید</p>
                                              <input type="hidden" class="form-control w-50" name="bayegan" id="bayegan"  value="2">
                                              <select class="form-control w-25 mr-4" id="dalil" name="dalil"> 
                                                    <option value=""> </option>
                                                    <option value="اتمام مراحل">اتمام فرآیند</option>
                                                    <option value="ابقاء">ابقاء</option>
                                                    <option value="انصراف">انصراف</option>
                                             </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">بله</button>
                                              </div>
                                          </form>
                                          
                                       </div>
                                   
                                      </div>
                                    </div>
                                 
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

@endsection