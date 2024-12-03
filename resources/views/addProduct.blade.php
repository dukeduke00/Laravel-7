@extends("layout")  {{--sadrzi fajl layout u kom je navigacija i footer--}}

@section("nazivStranice") {{-- u layoutu smo yiled da je title naziv stranice --}}
    Dodavanje proizvoda
@endsection


@section("sadrzajStranice") {{-- u layoutu smo stavili (yiled) da je sadrzajStranice sve izmedju navigacije i footer --}}



<form  style="margin: 100px 600px"  class=" d-flex justify-content-center gap-3 flex-column" method="POST" action="/admin/add-product">

    @if($errors->any())
        <p>Greska: {{ $errors->first() }}</p>
    @endif


    {{ csrf_field() }}
    <input name="name" type="text" placeholder="Unesite naziv proizvoda">
    <input name="description" type="text" placeholder="Unesite opis">
    <input name="amount" type="number" placeholder="Unesite kolicinu proizvoda">
    <input name="price" type="number" step="0.01" placeholder="Unesite cijenu ">
    <input name="image" type="text" placeholder="Unesite fotografije">

    <button>Posalji poruku</button>
</form>


@endsection
