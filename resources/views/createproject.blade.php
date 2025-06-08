<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Project - System FM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Inter font for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs" defer></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        [x-cloak] { display: none !important; }
        @keyframes slideIn {
            0% { transform: translateY(-1rem); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        .slide-in { animation: slideIn 0.2s ease-out; }
    </style>
    
</head>
<body class="min-h-screen bg-gradient-to-b from-white to-gray-50">
    <!-- Main Navbar with subtle gradient -->
    <nav class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/sisfo.png') }}" alt="Logo" class="h-8 w-8">
                    <span class="text-xl font-bold text-gray-900">System Information FM</span>
                </div>
               
            </div>
        </div>
    </nav>

    <!-- Form Container with improved spacing -->
    <div class="max-w-4xl mx-auto p-6 sm:p-8">
        <!-- Title with subtle animation -->
        <div class="mb-8">
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 hover:text-gray-700 transition-colors">
                        Create Project
                    </h1>
                    <p class="mt-2 text-sm text-gray-600">Fill in the details to create a new oil & gas field project.</p>
                </div>
            </div>
        </div>

        <!-- Form with improved card design -->
        <div class="bg-white shadow-lg rounded-xl p-6 sm:p-8 border border-gray-100 hover:border-gray-200 transition-colors"
             x-data="{ 
                showError: false,
                errorFields: [],
                validateForm(e) {
                    this.errorFields = [];
                    const required = [
                        'projectName', 
                        'fieldLocation', 
                        'investCapital',
                        'investNonCapital',
                        'depreciation',
                        'tax'
                    ];
                    required.forEach(field => {
                        if (!document.getElementById(field).value) {
                            this.errorFields.push(field);
                        }
                    });
                    if (this.errorFields.length > 0) {
                        e.preventDefault();
                        this.showError = true;
                        setTimeout(() => this.showError = false, 3000);
                    }
                }
             }">
            
            <!-- Error Notification -->
            <div x-show="showError" 
                 x-cloak
                 class="slide-in fixed top-4 right-4 bg-red-50 border-l-4 border-red-500 p-4 rounded shadow-lg"
                 role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">
                            Please fill in all required fields
                        </p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ url('/createproject') }}" @submit="validateForm" class="space-y-8">
                @csrf
                <!-- Project Details Section -->
                <div class="space-y-6">
                    <div class="space-y-1">
                        <label class="block text-sm font-semibold text-gray-800">Project Name</label>
                        <input id="projectName" name="projectName" 
                               type="text" 
                               class="w-full border border-gray-200 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-all"
                               :class="{'border-red-300': errorFields.includes('projectName')}"
                               placeholder="Input your project name">
                    </div>

                    <div class="space-y-1">
                        <label class="block text-sm font-semibold text-gray-800">Site Manager</label>
                        <input id="fieldLocation" name="siteManager" 
                               type="text" 
                               class="w-full border border-gray-200 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-all"
                               :class="{'border-red-300': errorFields.includes('Sitemanager')}"
                               placeholder="Input Site Manager">
                    </div>
                </div>

                <!-- Financial Parameters Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-900">Financial Parameters</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="space-y-1">
                            <label class="block text-sm font-semibold text-gray-800">Invest Capital</label>
                            <div class="relative">
                                <span class="absolute left-3 top-2.5 text-gray-500">$</span>
                                <input id="investCapital" name="investCapital" 
                                       type="number" 
                                       class="w-full pl-7 border border-gray-200 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-all" 
                                       :class="{'border-red-300': errorFields.includes('investCapital')}"
                                       placeholder="Input invest capital amount">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-semibold text-gray-800">Invest Non Capital</label>
                            <input id="investNonCapital" name="investNonCapital" 
                                   type="number" 
                                   class="w-full border border-gray-200 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-all" 
                                   :class="{'border-red-300': errorFields.includes('investNonCapital')}"
                                   placeholder="Input non-capital investment">
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-semibold text-gray-800">Depreciation (%)</label>
                            <input id="depreciation" name="depreciation" 
                                   type="number" 
                                   class="w-full border border-gray-200 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-all" 
                                   :class="{'border-red-300': errorFields.includes('depreciation')}"
                                   placeholder="Input depreciation percentage">
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-semibold text-gray-800">Tax (%)</label>
                            <input id="tax" name="tax" 
                                   type="number" 
                                   class="w-full border border-gray-200 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-all" 
                                   :class="{'border-red-300': errorFields.includes('tax')}"
                                   placeholder="Input tax percentage">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-4">
                    <button type="submit" 
                            class="group px-6 py-2.5 bg-gray-900 text-white rounded-lg hover:bg-gray-800 active:bg-gray-950 transition-colors duration-200">
                        <span class="flex items-center space-x-2">
                            <span>Create Project</span>
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

