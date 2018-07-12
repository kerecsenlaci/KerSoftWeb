
 @if(Session::has('message'))
<div class="alert alert-success text-center" role="alert">
  {{ Session::get('message') }}
</div>
 @endif