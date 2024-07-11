
<x-layout>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12 items-center">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-white">Profile Information</h2>
                    <p class="mt-1 text-sm leading-6 text-white">Please fill the following details</p>
                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-label for="email">Email</x-form-label>
                            <x-form-input-field name="email" id="email"></x-form-input-field>
                            <x-form-error name='email' />
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-label for="password">Password</x-form-label>
                            <x-form-input-field type='password' name="password" id="password"></x-form-input-field>
                            <x-form-error name='password' />
                        </div>
                    </div>

                </div>


                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </div>
        </div>
    </form>

</x-layout>
