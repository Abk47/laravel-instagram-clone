<form action="/p/{{ $post->id }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type='submit' class="btn btn-danger" value="delete">{!! 'delete' !!}</button>
</form>

