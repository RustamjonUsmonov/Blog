<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="grid gap-6 grid-cols-2">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <!-- Email Address -->
                <div class="">
                    <div class="space-y-2 mt-2">
                        <x-label for="name" :value="__('Post title')"/>

                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5"/>
                            </x-slot>
                            <x-input withicon id="name" class="block w-full" type="text" name="name"
                                     :value="old('name')" required autofocus/>
                        </x-input-with-icon-wrapper>
                    </div>
                    <div class="space-y-2 mt-2">
                        <x-label for="description" :value="__('Description')"/>
                        <textarea id="description" class="block w-full" name="description"
                                  required/></textarea>

                    </div>
                </div>
                <div class="">
                    <div class="space-y-2 mt-2">
                        <x-label for="avatar" :value="__('Photo')"/>

                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-camera aria-hidden="true" class="w-5 h-5"/>
                            </x-slot>
                            <x-input withicon id="avatar" class="block w-full" type="file" name="avatar"/>
                        </x-input-with-icon-wrapper>
                    </div>
                    <br>
                    <div class="space-y-2 mt-2">
                        <!-- component -->
                        <!-- This is an example component -->
                        <div class=" flex justify-start">
                            <select name="category_id"
                                class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                <option disabled selected value> -- {{__('Choose category')}} -- </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>
                </div>
                <div class="col-span-2 flex justify-center">
                    <x-button class=" justify-center w-1/5 gap-2">
                        <x-heroicon-o-login class="w-6 h-6" aria-hidden="true"/>
                        <span>{{ __('Create') }}</span>
                    </x-button>
                </div>


            </div>
        </form>


    </div>
</x-app-layout>
