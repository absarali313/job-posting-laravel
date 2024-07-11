@props(['job'])



<div class="p-4 bg-white/5 text-white  rounded-lg flex flex-col border border-transparent hover:border-blue-600 transition-colors duration-300 group">
    <div class="text-sm self-start">{{$job->employer->name}}</div>
    <div class="text-center py-8">
        <h3 class="text-lg group-hover:text-blue-600 group-hover:text-xl transition-all duration-300">{{$job->title}}</h3>
        <h3 class="text-sm group-hover:mt-5 transition-all duration-200">{{$job->type}} From {{$job->salary}}</h3>
    </div>
    <div class="flex justify-between items-center">
        <div>
            @foreach($job->tags as $tag)
                <x-tags href="/" :tag="$tag"/>
            @endforeach
        </div>
        <img width="50" class="rounded-xl" src="{{$job->employer->logo}}" alt="">
    </div>


</div>
