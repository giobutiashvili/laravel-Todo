@if ($errors->any())
 <div class="alert alert-danger">
     <ul> 
        @foreach ($errors->get('title') as $message)
         <li>{{ $message }}</li> 
         @endforeach 
        </ul>
     </div>
     @endif
     <form action="{{ route('store_post') }}" method="post">
         @csrf 
         <input type="text" name="title"
          class="@error('title') is-invalid 
          @enderror" value="{{ old('title') }}">
           <textarea name="body" class="@error('title') is-invalid @enderror">
            {{ old('body') }}
        </textarea>
          <input type="submit" value="გაგზავნა"></form>