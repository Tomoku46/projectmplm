<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4">
        <div class="flex items-center space-x-3 text-xl font-bold text-gray-800">
            <img src="{{ asset('img/sisfo.png') }}" alt="Logo" class="h-8 w-8">
            <span>System Information FM</span>
        </div>
    </nav>

    <!-- Baris: Field Management + Button -->
    <div class="flex justify-between items-center px-20 py-4 bg-white">
        <h2 class="text-lg font-semibold text-gray-800">Field Management</h2>
        <a href="{{ url('/createproject') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
            + Create Project
        </a>
    </div>

    <!-- Project Cards Grid -->
    <div class="px-20 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($projects as $project)
                <a href="{{ route('projectdetail.index', $project->id) }}" class="block">
                    <div class="bg-white rounded-lg border border-gray-200 hover:border-blue-400 transition-colors duration-200">
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">{{ $project->project_name }}</h3>
                                    <p class="text-sm text-gray-600">{{ $project->site_manager }}</p>
                                </div>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Active
                                </span>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Investment</span>
                                    <span class="text-gray-900">${{ number_format($project->invest_capital, 2) }}</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Tax Rate</span>
                                    <span class="text-gray-900">{{ $project->tax }}%</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Created</span>
                                    <span class="text-gray-900">{{ $project->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <!-- Only show create project card when no projects exist -->
                <div class="col-span-full flex justify-center mt-32">
                    <a href="{{ url('/createproject') }}"
                        class="flex flex-col items-center justify-center w-96 h-32 border-2 border-dashed border-gray-300 bg-white rounded-xl shadow-sm cursor-pointer hover:bg-gray-50 hover:border-blue-400 transition duration-300">
                        <div class="text-6xl text-blue-400 font-bold mb-2">+</div>
                        <div class="text-gray-700 font-medium text-center">Create New Project</div>
                        <div class="text-sm text-gray-500 font-light mt-1 mb-4 text-center px-4">
                            Start by creating your first field management project
                        </div>
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>

