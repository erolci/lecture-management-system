@if ( $errors->has() )
    <div class="alert alert-error" role="alert">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        @foreach( $errors->all('<li>:message</li>') as $message )

            {{ $message }}

        @endforeach
    </div>
@endif
