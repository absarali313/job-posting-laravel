
@props(['tag'])
<a href="/" class="bg-white/10 text-sm rounded-lg px-0.5 py-1 ml-0.5 items-center  hover:bg-white/30 transition-colors duration-300">
    {{strtolower($tag->name)}}
</a>
