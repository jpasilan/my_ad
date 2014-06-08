@if (count($errors->all()) > 0)
<div class="row">
    <div class="col-md-12 text-danger">
        <p>{{ Lang::get('flash.error_in_fields') }}:</p>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
