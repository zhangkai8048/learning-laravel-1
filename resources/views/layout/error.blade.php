<div class="alert alert-danger" role="alert">
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
</div>