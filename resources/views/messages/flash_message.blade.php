<div style="margin-top: 10px;">
    @if(session('success'))
        <div class="alert alert-success">
            <p><strong>Success!</strong>{{session('success')}}</p>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            <p><strong>Error!</strong>{{session('error')}}</p>
        </div>
    @endif
</div>