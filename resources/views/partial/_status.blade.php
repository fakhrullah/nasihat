@if(session('status'))
<div class="alert alert-success">
    <ul>
        <li>{{session('status')}}</li>
    </ul>
</div>
@endif

{{-- it'll be better if i can add status warning etc--}}