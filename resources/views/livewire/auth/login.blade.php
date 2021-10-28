  <div class="h-screen bg-gray-100 flex justify-center items-center">
        <div class="py-6 px-8 bg-white rounded shadow-xl">

            <h1 class="flex justify-center text-3xl font-bold mb-5">Login</h1>
            <form wire:submit.prevent="login()">
                <div class="mb-6">
                    <label for="email" class="block text-gray-800 font-bold">Email:</label>
                    <input type="text" wire:model="email" placeholder="Enter Email"
                        class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
                </div>

                <div>
                    <label for="password1" class="block text-gray-800 font-bold">Password:</label>
                    <input type="password" wire:model="password"  placeholder="Enter Password"
                        class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />

                    <a href="#"
                        class="text-sm font-thin text-gray-800 hover:underline mt-2 inline-block hover:text-indigo-600">Forget
                        Password</a>
                </div>
                <button type="submit"
                    class="cursor-pointer py-2 px-4 block mt-6 bg-indigo-500 text-white font-bold w-full text-center rounded">
                    Login</button>
            </form>
        </div>
    </div>
