@extends('layout.base')
@section('content')
    <div class="wrapper">
        <form action="/store" method="post">
            @csrf
            <label for="pizzaName">Name</label>
            <input id='pizzaName' name='pizzaName' type="text"/>
            <label for="pizzaHarga">Harga</label>
            <input id="pizzaHarga" name="pizzaHarga" type="text"/>
            <input id="pilihanGanda" name="pilihanGanda" type="radio" value="false"/>Rafi<br/>
            <input id="pilihanGanda" name="pilihanGanda" type="radio" value="true"/>B<br/>
            <input id="pilihanGanda" name="pilihanGanda" type="radio" value="true"/>C<br/>
            <input id="pilihanGanda" name="pilihanGanda" type="radio" value="true"/>D<br/>
            <input id='btnSubmit' name="btnSubmit" type="submit" value="Save"/>
        </form>
    </div>
@endsection