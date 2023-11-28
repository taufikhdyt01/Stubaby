@if (auth()->user()->role === 'ahliGizi' || auth()->user()->role === 'admin')
    <div class=" h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
@endif

<!-- Side bar -->
@if (auth()->user()->role === 'ahliGizi')
    @include('components.sidebar')
@elseif (auth()->user()->role === 'admin')
    @include('components-Admin.sidebar')
@endif

@if (auth()->user()->role === 'ahliGizi' || auth()->user()->role === 'admin')
    <div class="flex flex-col flex-1 w-full ml-16">
@endif

<x-app-layout>
    <div class="bg-white shadow-md flex justify-between items-center p-4">
        <div class="text-xl font-semibold text-gray-700 ml-20">Profile</div>
        <div id="tanggal" class="text-gray-700 mr-20"></div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('components.footer')
