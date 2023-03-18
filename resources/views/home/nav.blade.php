{{-- <?php
    $isHomePage = true;
    $isExpanded = $isHomePage ? true : false;
?>
<nav class="fixed top-0 left-0 right-0 z-10 <?php echo $isExpanded ? 'h-18 bg-black' : 'h-20 bg-white' ?> transition-all duration-300">
    <div class="flex justify-between w-10/12 mx-auto h-10">
        <!-- logo and links -->
        <a href="{{ url('/') }}">
            @if ($isExpanded)
                <x-application-logo class="" />
            @else
                <x-white-logo class="h-10" />
            @endif
        </a>
        <div class="flex gap-5">
            <ul class="flex h-auto my-auto gap-5">
            <li class="">
                <a href="{{ url('/') }}" class="uppercase text-black hover:font-bold">home</a>
            </li>
            <li class="">
                <a href="{{ url('/') }}" class="uppercase text-black hover:font-bold">about</a>
            </li>
            <li class="">
                <a href="{{ url('/') }}" class="uppercase text-black hover:font-bold">academics</a>
            </li>
            <li class="">
                <a href="{{ url('/') }}" class="uppercase text-black hover:font-bold">admissions</a>
            </li>
            <li class="">
                <a href="{{ url('/') }}" class="uppercase text-black hover:font-bold">student life</a>
            </li>
            </ul>
            <!-- get started button -->
            <div class="h-auto my-auto">
                <x-primary-button class="">get started</x-primary-button>
            </div>
        </div>
    </div>
</nav> --}}
<div class="absolute right-10 top-10 z-20" x-data="{ open: false }">
    <button @click="open = ! open">Expand</button>

    <div class="absolute top-0 right-0 bg-white p-5" x-show="open">
        <button @click="open = ! open">Expand</button>
        Content...
    </div>
</div>
