<x-layout>
    <div class=" container bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h2 class="fw-bolder py-3">Enter Employees Contact information</h2>
        </div>
    </div>
    <div class="container">
        <div class="text-end">
            <a href="{{route('show-data')}}" class="btn btn-primary">Show Data</a>
        </div>
        <form action="{{route('store-data') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label"></label>
                <input type="text" class="form-control" id="" name="name" placeholder="enter name">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone" class="form-label"></label>
                <input type="text" class="form-control" id="" name="phone" placeholder="enter phone number">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label"></label>
                <input type="text" class="form-control" id="" name="email" placeholder="enter email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
                <input type="submit" class="btn btn-primary mt-3" value="Submit"/>
        </form>
    </div>
</x-layout>