<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true"/>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Categories" :active="request()->routeIs('categories*')">
        <x-slot name="icon">
            <x-heroicon-o-clipboard-list class="flex-shrink-0 w-6 h-6" aria-hidden="true"/>
        </x-slot>

        <x-sidebar.sublink title="Category list" href="{{ route('categories.index') }}"
                           :active="request()->routeIs('categories.index')"/>
        <x-sidebar.sublink title="Add new" href="{{ route('categories.create') }}"
                           :active="request()->routeIs('categories.create')"/>
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Posts" :active="request()->routeIs('posts*')">
        <x-slot name="icon">
            <x-heroicon-o-chat class="flex-shrink-0 w-6 h-6" aria-hidden="true"/>
        </x-slot>

        <x-sidebar.sublink title="Posts list" href="{{ route('posts.index') }}"
                           :active="request()->routeIs('posts.index')"/>
        <x-sidebar.sublink title="Add post" href="{{ route('posts.create') }}"
                           :active="request()->routeIs('posts.create')"/>
    </x-sidebar.dropdown>


    <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true"/>
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
                           :active="request()->routeIs('buttons.text')"/>
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
                           :active="request()->routeIs('buttons.icon')"/>
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
                           :active="request()->routeIs('buttons.text-icon')"/>
    </x-sidebar.dropdown>

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Dummy Links</div>


    <x-sidebar.link title="Dummy link 1" href="#"/>


</x-perfect-scrollbar>
