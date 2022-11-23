<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projecten') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" placeholder="Titel" class="mb-2" value="">
                        <br>
                        <input type="text" name="description" placeholder="description" class="mb-2" value="">
                        <br>
                        <input type="text" name="github" placeholder="github" class="mb-2" value="">
                        <br>
                        <select name="framework" id="framework">
                            <option value="Tailwindcss">Tailwind</option>
                            <option value="Bootstrap">Bootstrap</option>
                            <option value="No framework">Geen</option>
                        </select>
                        <br>
                        <label for="active">Active</label>
                        <br>
                        <select name="active" id="active">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                        <br>
                        <label class="font-bold">Filter</label>
                        @foreach($tools AS $tool)
                            <br>
                            <input type="checkbox" id="" name="tools[]" value="{{ $tool->id }}">
                            <label for="language">{{ $tool->title }}</label>
                        @endforeach
                        <br>
                        <input type="file" name="picture" accept="image/*" value="">
                        <br>
                        <button type="submit" class="bg-cyan-400 inline-block text-sm w-fit my-1 p-2 px-3 rounded">Opslaan</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
