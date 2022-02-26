<x-layout>
    <div class="container">
        <a href="{{route('show-data') }}" class="btn btn-primary my-3">Show Data</a>
        <form action="{{route('update-data',$editData->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label"></label>
                <input type="text" class="form-control" id="" name="name" value="{{$editData-> name}}" placeholder="enter your name">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone" class="form-label"></label>
                <input type="text" class="form-control" id="" name="phone"value="{{$editData-> phone}}" placeholder="enter your phone number">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label"></label>
                <input type="text" class="form-control" id="" name="email"value="{{$editData-> email}}" placeholder="enter your email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
                <input type="submit" class="btn btn-primary mt-3" value="Submit"/>
            </form>
    </div>
</x-layout>
