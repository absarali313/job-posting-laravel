<x-layout>

    <h1 class='text-3xl text-center font-hanken-grotesk '>Lets Find You A Great Job</h1>
    <form method="POST" action="/job">
        @csrf
        <div class="space-y-12  rounded-lg">
            <div class="border-b rounded-lg pb-12">

                <div class="items-center border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-white">Profile Information</h2>
                    <p class="mt-1 text-sm leading-6 text-white">Please fill the following details</p>

                    <div class="mt-4 grid grid-cols-3 gap-x-6 gap-y-8 sm:grid-cols-6 ">
                        <div class="sm:col-span-3">
                            <x-form-label for="title">Title</x-form-label>
                            <x-form-input-field name="title" id="title"></x-form-input-field>
                            <x-form-error name='title'/>
                        </div>
                    </div>
                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-label for="salary">Salary</x-form-label>
                            <x-form-input-field name="salary" id="salary"></x-form-input-field>
                            <x-form-error name='salary'/>
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-label for="Type">Tyoe</x-form-label>
                            <x-form-input-field name="type" id="type"></x-form-input-field>
                            <x-form-error name='type'/>
                        </div>
                    </div>
                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-label for="featured"> Featured</x-form-label>
                            <x-form-input-field type="checkbox" name="featured" id="featured"></x-form-input-field>
                            <x-form-error name='featured'/>
                        </div>
                    </div>
                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-label for="tags"> Tags</x-form-label>
                            <x-form-input-field name="tags" id="tags"></x-form-input-field>
                            <x-form-error name='tagsß'/>
                        </div>
                    </div>
                </div>

            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs"
                   class="rounded-md text-white py-2 px-3 text-sm bg-indigo-600 font-semibold leading-6">Cancel</a>
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Register
                </button>
            </div>
        </div>


    </form>
</x-layout>
