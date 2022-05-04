@extends("app.layout")



@section("content")
    <div class="row">
        <div class="col d-flex justify-content-end">
            <a href="{{route("musteri.create")}}" class="btn btn-success">Müşteri Ekle</a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Adı</th>
            <th scope="col">Soyadı</th>
            <th scope="col">Maaşı</th>
            <th width="150">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        @foreach($musteriler as $musteri)
        <tr>
            <th scope="row">{{$musteri->id}}</th>
            <td>{{$musteri->ad}}</td>
            <td>{{$musteri->soyad}}</td>
            <td>{{$musteri->maas}}</td>
            <td class="d-flex">
                <a class="btn btn-primary" href="{{route('musteri.edit',["musteri" => $musteri->id])}}">Düzenle</a>
                <form method="Post" action="{{route('musteri.destroy',["musteri" => $musteri->id])}}">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">Sil</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$musteriler->links()}}
@endsection

