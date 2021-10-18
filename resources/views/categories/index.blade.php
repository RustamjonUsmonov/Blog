<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Categories') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <section>
            <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
                <div class="relative mx-auto max-w-7xl">
                    <div class="grid max-w-lg gap-5 mx-auto lg:grid-cols-3 lg:max-w-none">
                        @forelse($categories as $category)
                            <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                                <div class="flex-shrink-0">
                                    <img class="object-cover w-full h-48"
                                         src="https://d33wubrfki0l68.cloudfront.net/d75073109edbac6e4c4e3e3e15cdee9f18b2ffe5/bf256/images/ogtwitter.png"
                                         alt="">
                                </div>
                                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                    <div class="flex-1">
                                        <a href="{{route('categories.show',$category->id)}}" class="block mt-2">
                                            <p class="text-xl font-semibold text-black"> {{$category->name}} </p>
                                            <p class="mt-3 text-base text-gray-300">{{$category->description}}</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between flex-1 p-6 bg-white">
                                    <x-button variant="warning"><a
                                            href="{{route('categories.edit',$category->id)}}">{{__('Edit')}}</a>
                                    </x-button>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <x-button variant="danger">{{__('Delete')}}</x-button>
                                    </form>
                                </div>
                            </div>
                        @empty

                            <section class="col-span-3">
                                <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 ">
                                    <div class="grid grid-cols-1 ">
                                        <div class="w-full max-w-lg mx-auto my-4 bg-white shadow-xl rounded-xl">
                                            <div class="p-6 lg:text-center">
                                                <span
                                                    class="mb-8 text-xs font-semibold tracking-widest text-blue-400 uppercase "> Info</span>
                                                <h4 class="mt-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl ">
                                                    No files Yet</h4>
                                                <p class="mt-3 text-base leading-relaxed text-gray-300"> Free and
                                                    Premium themes, UI Kit's, templates and landing pages built with
                                                    Tailwind CSS, HTML &amp; Next.js. </p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        {{$categories->links()}}
    </div>


</x-app-layout>
