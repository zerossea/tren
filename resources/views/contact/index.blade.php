@extends('layouts.menu')
@section('content')
<div class="row">
  <div class="col-6 col-md-4">
    <div class="card " style="width: 18rem;">
      <img src="group 24.png" class="card-img-top" alt="left">
      <div class="card-body">
        <p class="card-text">Николай специализируется на улучшении силовых качеств, но готов работать с любыми пожеланиями клиентов; опыт в занятиях единоборствами помогает ему также составлять программы для улучшения выносливости атлетов, занимающихся единоборствами</p>
        <a href="{{ route('contact/create.create') }}" class="btn btn-primary">Записаться</a>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="group_59.png" class="card-img-top" alt="right">
      <div class="card-body">
        <p class="card-text">Никита специализируется на улучшении физических качеств, работает с запросами рекомпозиции тела и увеличения силовых показателей.
          Составит индивидуальную программу тренировок и проконсультирует по питанию.</p>
        <a href="{{ route('contact/create.create') }}" class="btn btn-primary">Записаться</a>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="group_61.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Владислав практиковал разные виды спорта: легкая атлетика,
          смешанные единоборства, воркаут, пауэрлифтинг и армрестлинг.
          Сейчас специализируется на коррекции осанки, помогает людям привести нужные мышцы спины в тонус. Поможет в общей физической подготовке, похудении и наборе мышечной массы.</p>
        <a href="{{ route('contact/create.create') }}" class="btn btn-primary">Записаться</a>
      </div>
    </div>
  </div>
</div>
@endsection