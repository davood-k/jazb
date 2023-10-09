
@extends('welcome')

@section('mohtava')

<style>
  .tiledBackground {
  background-image: url('dist/img/ttttt-min.jpg');
  background-size: 100px;
  width: 300px;
  height: 300px;
  border: 2px solid;
  color: pink;
}

  .emtiazeb{
    background: url('dist/img/ttttt-min.jpg');
    background-repeat: no-repeat;
    background-size: 1000px 500px;
    border: 2px solid rgb(180, 180, 180);
    border-radius: 15px;
  }
  .personally{
    text-align: right;
  }
  .personallys h6{
    text-align: right;
    margin-bottom: 16px;
  }
  .personally h6{
    padding-right: 20px;
    margin-bottom: 23px;
  }
</style>
<section class="emtiazeb container" style="margin-top:10%; width: 750px; height:500px;">
  <h1 class="u-custom-font u-font-raleway u-text u-text-palette-4-base u-text-1 pt-3" style="text-align: center; color:#2cccc4;">محل خدمتی ایشان {{ $khadem->bkhademyarsr }} میباشد.</h1>
  <hr>


    <div class="row">
      <div class="col personally">
          <h4 class="start col">نام: </h4>
          <h6> {{ $khadem->namesr }} </h6>
          <h4 class="start col">فامیل: </h4>
          <h6> {{ $khadem->familysr }} </h6>
          <h4 class="start col">کدملی: </h4>
          <h6> {{ $khadem->codemsr }} </h6>
          <h4 class="start col">سن: </h4>
          <h6> {{ $khadem->tdatesr }} سال</h6>
      </div>
      <div class="col personally">
        
        <h4 class="start col">تاریخ شروع خدمت: </h4>
        <h6> {{ $khadem->dateshsr }} </h6>
        <h4 class="start col">همراه: </h4>
        <h6> {{ $khadem->mobilesr }} </h6>
        {{-- <h4 class="start col">معاونت: </h4>
        <h6> {{ $khadem->moavenat }} </h6>
        <h4 class="start col">بخش خدمتی: </h4>
        <h6> {{ $khadem->bkhademyarsr }}</h6> --}}
       
      </div>
      <div class="col personally">
        <h4 class="start col">نمره های خدمتی </h4>
        <h5 class="start col">سنوات: </h5>
        
        <h5 class="start col">انضباط خدمتی: </h5>

        <h4 class="start col">کیفی: </h4>

        <h4 class="start col">ایثارگری: </h4>

        <h4 class="start col">تحصیلات: </h4>

        <h4 class="start col">نخبه: </h4>

        <h4 class="start col">مجموع نمره خدمتی: </h4>
      </div>

      <div class="col-2 personallys">
        <h6>.....</h6>
        <h6> {{ $khadem->sanvatsr  }} </h6>
        <h6> {{ $khadem->enzebatsr  }} </h6>
        <h6> {{ $khadem->keifisr  }} </h6>
        <h6> {{ $khadem->isarsr  }} </h6>
        <h6> {{ $khadem->tahsilsr }} </h6>
        <h6> {{ $khadem->nokhbehsr  }} </h6>
        <?php
        $tajmi = $khadem->sanvatsr + $khadem->enzebatsr + $khadem->keifisr + $khadem->isarsr + $khadem->tahsilsr + $khadem->nokhbehsr;
        ?>
        <h6> {{ $tajmi }} </h6>
      </div>
      <div class="u-container-layout u-container-layout-2"></div>
    </div>    

  </div>
  <div>

</section>
@endsection

