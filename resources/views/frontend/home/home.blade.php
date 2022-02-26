<x-layout>
    <main>
        <section class=" introduce-section bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder pt-3">Welcome to Crud Project</h1>
                <p class="lead">A Crud Operation Mini project</p>
                <a class="btn btn-lg btn-light mb-5 me-1" href="{{route('login') }}">Login</a>
                <a class="btn btn-lg btn-light mb-5 ms-1" href="{{route('register') }}">Register</a>
            </div>
        </section>

        <section class="mt-5">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>About this project</h2>
                        <p class="lead fw-bold">This is a simple Crud oparetion and authentication project.<br>In this project i used Html5 for markup, bootstrap5 for styling & laravel8 for programming.Hope you will like it.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>