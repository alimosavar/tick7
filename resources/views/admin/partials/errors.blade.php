@if($errors->any())
    <div class="alert alert-danger" style="margin: 0 16px;">
        @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
    </div>
@endif