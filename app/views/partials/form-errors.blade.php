@if (count($errors->all()) > 0)
<div class="row">
    <div class="col-md-12 text-danger">
        <p>There were errors with the following fields:</p>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
