
<div class="mb-3">
<label for="" class="form-label">{{$label}}</label>
<input class="form-control border-black" type="{{$type}}" name="{{$name}}" placeholder="enter your account {{$label}}" @if ($name == 'cvv') max="999" min="100" @endif value="{{$value}}">
</div>