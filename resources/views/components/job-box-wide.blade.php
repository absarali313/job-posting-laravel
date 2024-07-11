@props(['job'])


<div class="p-4 bg-white/5 text-white gap-x-6  mb-5 rounded-lg flex border border-transparent hover:border-blue-600 transition-colors duration-300 group">
    <div>
        <img width=90 height=90 class="rounded-xl" src="{{$job->employer->logo}}" alt="">
    </div>
    <div>
        <a href="#" class="text-xs self-start text-gray-400 ">{{$job->employer->name}}</a>
        <div class="flex-1">
            <h3 class="mt-2 group-hover:text-blue-600 group-hover:text-lg transition-all duration-300">{{$job->title}}</h3>
            <h3 class="text-gray-400 text-xs mt-10">{{$job->type}} From {{$job->salary}}</h3>
        </div>

    </div>
    <div class="ml-auto gap-x-8 right-0 mt-auto">
        @foreach($job->tags as $tag)
            <x-tags href="/" :tag="$tag"/>
        @endforeach


    </div>



</div>
