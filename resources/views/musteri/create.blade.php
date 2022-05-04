@extends("app.layout")


@section('content')

    <form method="Post" action="{{route('musteri.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Adı</label>
            <input type="text" name="ad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Soyadı</label>
            <input type="text" name="soyad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Maas</label>
            <input type="text" name="maas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Et</button>
    </form>
@endsection
