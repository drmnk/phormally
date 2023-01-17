<div class="flex justify-center items-center min-h-screen">
    <div class="p-10 bg-white shadow-xl rounded-xl xl:w-1/2 ">
        <div class="flex justify-center">
            <img class="w-80" src="{{ asset('images/phormally_logo.png') }}" alt="">
        </div>
        <form class="mt-6 group">
            <label for="email" class="text-xl">Your email:</label>
            <div>
                <input wire:model="email" type="email" id="email"
                    class="w-full rounded-md border border-blue-300 py-4 px-4 mt-4 font-medium outline-none focus:border-blue-500 focus:shadow-md">
            </div>

            {{ $email }}
        </form>
    </div>

</div>
