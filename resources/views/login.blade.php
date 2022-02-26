<x-layout>
    <div class=" container bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h2 class="fw-bolder py-3">Enter your Login information</h2>
        </div>
    </div> 
    <div class="container">
        <div class="text-end">
            <a href="{{route('show-data')}}" class="btn btn-primary me-2">Show Data</a>
            <a href="{{route('register')}}" class="btn btn-primary my-3">Register</a>
        </div>
      @if (Session::has ('msg'))
      <p class="alert alert-danger">{{ Session::get('msg') }}</p>
      @endif
        <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @error('email')
                <span class="text-danger">{{$message}}</span>
             @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            @error('password')
                <span class="text-danger">{{$message}}</span>
             @enderror
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
    </div>
</x-layout>