<x-guest-layout>
    <div class="flex justify-between w-full flex-wrap md:flex-col lg:flex-nowrap">
        <div class="lg:rounded-l-md lg:rounded-b-none bg-zinc-700 w-full my-8 flex-col lg:absolute lg:my-0 lg:py-16 lg:mx-8 lg:w-[700px]">
            <p class="text-lg text-center font-semibold text-2xl sm:text-5xl">About me</p>
            <p class="flex text-center p-5 text-sm sm:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
        </div>
        <div class="sm:flex sm:justify-center w-full bg-zinc-800">
            <img src="{{ asset ('/img/koenvakantie.jpg') }} " class="object-cover lg:rounded-md rounded-none w-full sm:max-w-[650px] h-auto sm:max-h-[878px] lg:max-w-full lg-max-h-full lg:mx-8">
        </div>
    </div>
</x-guest-layout>
