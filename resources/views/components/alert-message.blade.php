@if (session('message'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2">
        <div class="w-full bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
            role="alert">
            {{ session('message') }}
        </div>
    </div>
@endif
