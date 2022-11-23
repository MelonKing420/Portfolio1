<x-guest-layout>

    <div class="">
        <div class="max-w-7xl mx-auto px-4 mb-32 sm:px-6 lg:px-8 justify-between">
            <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none ">
                <h1 class="text-white font-bold py-2 px-4 rounded">Filter</h1>
                <form action="" method="get">
                    @foreach($tools AS $tool)
                        <div class=""><input type="checkbox" name="tools[]" value="{{ $tool->id }}" @if(in_array($tool->id, request()->input('tools', []))) checked @endif />{{ $tool->title }}</div>
                    @endforeach
                    <button type="submit" class="shadow bg-cyan-400 hover:bg-sky-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded text-black">Zoeken</button>
                </form>
                <h2 class="text-2xl font-extrabold text-white pt-4">My projects</h2>

                <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">


                    @if($projects->count() == 0)
                        Er zijn geen projecten gevonden
                    @endempty

                @foreach($projects AS $project)

                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src="/storage/{{ $project->picture }}" class="w-full h-full object-center object-cover">
                            </div>
                            <div>
                                <ul>
                                    @foreach($project->tools AS $tool)
                                        <li class="bg-sky-800 inline-block text-sm w-fit my-1 p-0.5 px-3 rounded-sm">{{ $tool->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <h3 class="mt-2 text-sm text-gray-500 ">
                                <a target="_blank" href="{{ $project->github }}">
                                    <span class="text-2xl text-white font-bold inset-0">
                                        {{ $project->title }}
                                    </span>
                                </a>
                            </h3>


                            <p>&nbsp</p>

                            <div>

                            </div>
                        </div>
                        @endforeach



                </div>
                </div>
            </div>
        </div>
</x-guest-layout>
