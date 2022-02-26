<x-layout>
    <div class=" container bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h2 class="fw-bolder py-3">Employees Contact Information</h2>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="text-end">
                <a href="{{url('/add-data')}}" class="btn btn-primary my-3">Add Data</a>
                <a href="{{url('/login')}}" class="btn btn-primary my-3">Log in</a>
                <a href="{{url('/register')}}" class="btn btn-primary my-3">Register</a>
                <a href="{{url('/')}}" class="btn btn-primary my-3">Home</a>
        </div>
        @if (Session::has ('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }}</p>
        @endif
        <table class="table table-bordered border-2">
            <thead>
            <tr>
                <th scope="col">sl</th>
                <th scope="col"class="text-center">Name</th>
                <th scope="col"class="text-center">phone</th>
                <th scope="col"class="text-center">Email</th>
                <th scope="col"class="text-center">Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach ($showData as $key=>$data)
            <tr>
                <td class="">{{ $key+1 }}</td>
                <td class="text-center">{{ $data-> name }}</td>
                <td class="text-center">{{ $data-> phone }}</td>
                <td class="text-center">{{ $data-> email }}</td>
                <td class="text-center">
                <a href="{{ url('/edit-data/'.$data-> id)}}" class="btn-success btn">Edit</a>
                <a href="{{ url('/delete-data/'.$data-> id)}}"onclick = "return confirm('are you sure to delete?')" class="btn-danger btn">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{$showData->links()}}
    </div>
</x-layout>
