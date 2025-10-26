@extends('layout.layout')

@section('title', 'User')
@section('page-tiltle', 'Change Password')

@section('content')

    <!-- Main Section -->
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-xl shadow-sm p-8">
        <h2 class="text-xl font-semibold mb-6">Change Password</h2>

        <!-- Session Messages -->
        @if (session('success'))
            <div class="mb-4 text-green-700 bg-green-100 px-4 py-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 text-red-700 bg-red-100 px-4 py-3 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form -->
        <form id="passwordForm" action="#" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Current Password -->
            <div>
                <label for="current_password" class="block text-sm font-medium mb-2">Current Password</label>
                <input type="password" name="current_password" id="current_password"
                    placeholder="Enter your current password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @error('current_password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- New Password -->
            <div>
                <label for="new_password" class="block text-sm font-medium mb-2">New Password</label>
                <input type="password" name="new_password" id="new_password" placeholder="Enter new password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @error('new_password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="new_password_confirmation" class="block text-sm font-medium mb-2">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                    placeholder="Re-enter new password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!--Cancel Button-->
            <div class="flex justify-end gap-3 pt-6 border-t mt-6">
                <a href="{{ route('dashboard.admin') }}"
                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update
                    Password</button>
            </div>
        </form>
    </div>

@endsection