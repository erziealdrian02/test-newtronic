<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <span class="text-xl font-bold text-blue-600">LiveScore</span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('public') }}" class="text-gray-500 hover:text-blue-600">Dashboard</a>
                <a href="{{ route('input.score') }}" class="text-gray-500 hover:text-blue-600">Input Score</a>
                <a href="{{ route('log.score') }}" class="text-gray-500 hover:text-blue-600">Log Activity</a>
                <a href="#" class="text-gray-500 hover:text-blue-600">Settings</a>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Logout</button>
            </div>
        </div>
    </div>
</nav>