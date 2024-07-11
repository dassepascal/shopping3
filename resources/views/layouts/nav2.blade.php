<nav class="flex justify-between items-center  py-4 border-b border-white/10 ">
    <div class="div">

      <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""></a>
    </div>
    <div class="space-x-6 font-bold">
        <a href="#">Job</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Compagnies</a>
    </div>
    {{-- todo message errors --}}
{{-- auth --}}

    @auth

    <div class="space-x-6 font-bold flex">
    <a href="/jobs/create">Post a job</a>

    <form action="/logout" method="POST">
        @csrf
        @method('DELETE')
        <button>Log Out</button>
    </form>
    </div>

    @endauth
    @guest()
    <div class="space-x-6 font-bold">
        <a href="/register">Sign Up</a>
        <a href="/login">Log In</a>

    </div>
    @endguest
</nav>
