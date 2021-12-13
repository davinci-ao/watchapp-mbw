<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <div id="playerdiv"><iframe id="playeriframe" src="./Embedding IP Camera Live Video Stream in web page - IPCamLive.com_files/player.html" width="1024px" height="576px" frameborder="0" allowfullscreen="" style="width: 904px; height: 509px;"></iframe></div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
