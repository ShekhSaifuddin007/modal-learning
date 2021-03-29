<div x-data="{ isOpen: false }" x-show="isOpen">
    <div class="bg-gray-900 opacity-80 fixed inset-0"></div>
    <div class="bg-white p-4 max-w-sm shadow-md h-48 m-auto rounded-md fixed inset-0">
        <div class="flex h-full flex-col justify-between">
            <header class="text-lg font-bold">
                {{ $title }}
            </header>

            <main>
                {{ $body }}
            </main>

            <footer>
                {{ $footer }}
            </footer>
        </div>
    </div>
</div>
