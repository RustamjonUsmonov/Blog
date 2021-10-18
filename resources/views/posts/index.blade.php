<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Posts') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">

        <section>
            <div class="px-4 py-5 mx-auto">
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8 lg:divide-y lg:divide-gray-100">
                        @forelse($posts as $post)
                        <div class="pt-8 sm:flex lg:items-end group">
                            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                                <img class="w-full rounded-md lg:h-32 lg:w-32"
                                     src="https://images.unsplash.com/photo-1616651181620-9906d6e43fc3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGF0dGVybnxlbnwwfDJ8MHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60" alt="text">
                            </div>
                            <div>
                                <span class="text-sm text-gray-300">{{$post->created_at->format('d M Y')}}</span>
                                <p class="mt-3 text-lg font-medium leading-6">
                                    <a href="{{route('posts.show',$post->id)}}" class="text-xl text-black group-hover:text-gray-300 lg:text-2xl">
                                        {{$post->name}}</a>
                                </p>
                                <p class="mt-2 text-lg text-gray-300"> {{$post->description}}</p>
                            </div>
                        </div>
                        @empty
                            <div class="pt-8 sm:flex lg:items-end group">
                                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                                    <img class="w-full rounded-md lg:h-32 lg:w-32" src="https://images.unsplash.com/photo-1509395062183-67c5ad6faff9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1100&amp;q=80" alt="text">
                                </div>
                                <div>
                                    <span class="text-sm text-gray-300">{{today()->format('d M Y')}}</span>
                                    <p class="mt-3 text-lg font-medium leading-6">
                                        <a href="#" class="text-xl text-black group-hover:text-gray-700 lg:text-2xl">{{__('No posts for now!')}} </a>
                                    </p>
                                    <p class="mt-2 text-lg text-gray-300"> A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. </p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
