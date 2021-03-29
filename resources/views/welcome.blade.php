<x-app-layout>
    <div class="container max-w-lg mx-auto bg-gray-300">
        <header class="bg-blue-600 p-4">
            <h1 class="font-bold text-white">My Sites</h1>
        </header>

        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3 text-sm">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>

            <main class="col-span-9 text-sm">
                <p class="p-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto atque, dicta eaque eveniet explicabo harum, illum nesciunt optio quasi qui quis quod rem, sequi temporibus vitae voluptas. Expedita, quisquam!
                </p>
                <p class="p-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto atque, dicta eaque eveniet explicabo harum, illum nesciunt optio quasi qui quis quod rem, sequi temporibus vitae voluptas. Expedita, quisquam!
                </p>
                <p class="p-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto atque, dicta eaque eveniet explicabo harum, illum nesciunt optio quasi qui quis quod rem, sequi temporibus vitae voluptas. Expedita, quisquam!
                </p>
            </main>
        </div>

        <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
            <h5>My Sites</h5>
            <p>2021</p>
        </footer>
    </div>

    {{-- Modal --}}

    <x-confirmation-modal>
        <x-slot name="title">
            Are You Sure.?
        </x-slot>

        <x-slot name="body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, mollitia?
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>
</x-app-layout>
