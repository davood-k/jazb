@extends('welcome')

@section('mohtava')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-danger">لیست کلی افراد شرکت کننده درآزمون</h3>

            <div class="row card-tools">

                <form action="">

                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" id="search" name="search" class="form-control float-right"
                            placeholder="جستجو" value="{{ request('search') }}">

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
                        <th>آزمون</th>
                        <th>دلیل عدم قبولی</th>
                        <th>اقدامات</th>
                    </tr>
                    @foreach ($khadem as $user)
                        <tr>
                            <td>{{ $user->namesr }}</td>
                            <td>{{ $user->familysr }}</td>
                            <td>{{ $user->codemsr }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->marhalesr }}</td>
                            <?php
                            $temp = \App\Khadem::find($user->id);
                            ?>

                            @foreach ($khadem = $temp->azmoons as $item)
                                @if ($item->nomrehAzmoonsr == 0)
                                    <td><button type="button" class="badge badge-info mt-2">عدم شرکت</button></td>
                                @elseif ($item->nomrehAzmoonsr >= 70)
                                    <td><button type="button" class="badge badge-success mt-2">قبول شده</button></td>
                                @elseif ($item->nomrehAzmoonsr < 70)
                                    <td><button type="button" class="badge badge-danger mt-2">عدم قبولی</button></td>
                                @endif
                            @endforeach
                            <th>
                                {{ $item->dalil }}
                            </th>
                            <td class="d-flex">

                                @if ($item->nomrehAzmoonsr < 70)
                                    <a class="btn btn-sm btn-danger mr-2" data-toggle="modal"
                                        data-target=".myModal-{{ $user->id }}">بازگردانی</a>

                                    <!-- Modal -->
                                    <div class="modal fade mt-5 myModal-{{ $user->id }}" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <form method="post" action='{{ url('/person/edit', $user->id) }}'>
                                                    @csrf
                                                    <div class="mb-3">

                                                        <p class="m-3">آیا از بازیابی به آزمون هستید</p>
                                                        <input type="hidden" class="form-control w-50" name="ShDarComision"
                                                            id="ShDarComision" value="0">
                                                        <input type="hidden" class="form-control w-25 m-auto"
                                                            name="bayegan" id="bayegan" value="1">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">بله</button>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                @endif
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
    <script></script>
@endsection
