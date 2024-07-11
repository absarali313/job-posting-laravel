<x-layout>
    <h1 class='text-3xl text-center font-hanken-grotesk '>Lets Find You A Great Job</h1>

    <form class="max-w-xl mx-auto mt-5">
        <div class="relative">

            <div class="absolute inset-y-0 end-5 flex items-center ps-3 pointer-events-none">
                <span class="w-2 h-2 bg-white inline-block"></span>
            </div>
            <input type="search" id="default-search"
                   class="bg-white/5 block w-full mb-10  py-3 px-2 text-sm text-black-900 border border-gray-700 rounded-2xl bg-black-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-black dark:border-black-600 dark:placeholder-black-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500"
                   placeholder="I'm looking for..." required/>
        </div>
    </form>


    <section>
        <x-headers>Top Job</x-headers>
        <div class="grid lg:grid-cols-3 gap-8">
            @foreach($jobs as $job)
                @if($job->featured)
                    <x-job-box :job="$job" />
                @endif

            @endforeach

        </div>
        <x-headers>Tags</x-headers>
        <div class="justify-betweent">
          @foreach($tags as $tag)
                <x-tags :tag="$tag"/>
          @endforeach
        </div>

        <x-headers >Find Job</x-headers>
        <div class ="">
            @foreach($jobs as $job)
                <x-job-box-wide :job="$job" />
            @endforeach
        </div>


    </section>


</x-layout>
