@if (\Session::has('edit'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('edit') !!}</li>
        </ul>
    </div>
@endif