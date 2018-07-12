@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <form method="post" action="{{ route('error_report.store') }}">
                
                @csrf
                <div class="form-group">
                <label for="InputType">Hiba tipusa: </label>
                <input type="text" class="form-control form-control-sm" name="InputType" placeholder="Hardwer-es vagy szoftveres.">
                </div>
                <div class="form-group">
                <label for="InputTitle">Rövid leírás:</label>
                <input type="text" class="form-control form-control-sm" name="InputTitle" placeholder="Hiba megcímzése.">
                </div>
                <div class="form-group">
                <label for="InputMessage">Üzenet:</label>
                <textarea class="form-control form-control-sm" name="InputMessage" placeholder="Hibajelenség pontos leírása."></textarea>
                </div>
                <div class="form-group">
                <label for="InputContact">Közvetlen kapcsolat:</label>
                <input type="text" class="form-control form-control-sm" name="InputContact" placeholder="A könyebb kapcsolatfelvételért.">
                </div>
                <div class="form-group">
                <label for="InputSignature">Aláírás:</label>
                <input type="text" class="form-control form-control-sm" name="InputSignature" placeholder="Üdvözlettel....">
                </div>
                <button class="btn btn-default btn-lg" type="submit">Küldés</button>
            </form>
        </div>
    </div>
</div>
@endsection
