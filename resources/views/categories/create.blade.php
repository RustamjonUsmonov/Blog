<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Add Category') }}
            </h2>
        </div>
    </x-slot>


    <div class="p-6  dark:bg-dark-eval-1">


        <section class="text-gray-700">
            <div class="container items-center px-5 py-12 lg:px-20">
                <div
                    class="flex flex-col w-full shadow max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg  md:mt-0">
                    <div class="mt-8">
                        <section class="flex flex-col w-full h-full p-1 overflow-auto">
                            <header
                                class="flex flex-col items-center justify-center py-12 text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg  text-blueGray-500 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                                <input
                                    type="file"
                                    value="Upload a file"
                                    class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md  text-blueGray-500 hover:text-blueGray-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blueGray-100">

                            </header>
                        </section>
                        <div class="mt-6">
                            <form action="{{route('categories.store')}}" method="POST" class="space-y-6 ">
                                @csrf
                                <div class="">
                                    <x-label for="name" :value="__('Category name')"/>
                                    <x-input-with-icon-wrapper>
                                        <x-slot name="icon">
                                            <x-heroicon-o-menu-alt-1 aria-hidden="true" class="w-5 h-5"/>
                                        </x-slot>
                                        <x-input withicon id="name" class="block w-full" type="text" name="name"
                                                 :value="old('name')" placeholder="{{ __('Title') }}" required
                                                 autofocus/>
                                    </x-input-with-icon-wrapper>

                                </div>
                                <div>
                                    <label for="description"
                                           class="block text-sm font-medium text-black"> {{ __('Description') }} </label>
                                    <textarea
                                        class="block w-full px-5 py-3 mt-2 text-base text-black placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg  bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 apearance-none autoexpand"
                                        id="description" type="text" name="description" placeholder="Message..."
                                        required=""></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                            class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400  rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


</x-app-layout>
