<x-guest-layout>
    @if (session('status'))
        <div class="alert alert-success text-green-600 text-center font-semibold">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger text-red-600 text-center font-semibold">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="w-full max-w-lg mt-8 mx-auto" method="POST" action="{{ route('contact.create') }}">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-stone-50 text-xs font-bold mb-2" for="grid-first-name"
                       required>
                    First Name
                </label>
                <input
                    class="appearance-none block w-[4/5] ml-1 sm:w-full bg-gray-200 text-stone-50 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-black"
                    id="grid-first-name" type="text" placeholder="Koen" name="name" required>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-stone-50 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input
                    class=" w-[4/5] ml-1 appearance-none block sm:w-full bg-gray-200 text-stone-50 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-black"
                    id="grid-last-name" type="text" placeholder="Groen" name="lastname" required>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-stone-50 text-xs font-bold mb-2" for="grid-password">
                    E-mail
                </label>
                <input
                    class="appearance-none sm:block w-[4/5] ml-1 sm:w-full bg-gray-200 text-stone-50 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-black"
                    id="email" type="email" name="email" required>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-stone-50 text-xs font-bold mb-2" for="grid-password">
                    Message
                </label>
                <textarea
                    class=" no-resize appearance-none block w-[5/5] ml-1 sm:w-full bg-gray-200 text-stone-50 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none text-black"
                    id="message" name="message" required></textarea>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3">
                <button
                    class="shadow bg-cyan-400 hover:bg-sky-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded text-black"
                    type="submit">
                    Send
                </button>
            </div>
            <div class="md:w-2/3"></div>
        </div>
    </form>
</x-guest-layout>
