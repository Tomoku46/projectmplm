<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Cashflow - System FM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('img/sisfo.png') }}" alt="Logo" class="h-8 w-8">
                    <span class="ml-3 text-xl font-bold text-gray-900">System Information FM</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8" x-data="{ showSuccess: false, showError: false, errorFields: [] }">
        <!-- Project Info Card -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">Edit Cashflow</h1>
                    <p class="mt-1 text-sm text-gray-500">Project: Accumsanium aperiam iste provident</p>
                </div>
                <div class="flex items-center space-x-4 text-sm text-gray-600">
                    <span>Depreciation: {{$detail->depreciation}}%</span>
                    <span class="border-l pl-4">Tax Rate: {{$detail->tax}}%</span>
                </div>
            </div>

            <!-- Notification Messages -->
            <div x-show="showSuccess" x-cloak class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 rounded-md text-sm">
                Form submitted successfully!
            </div>
            <div x-show="showError" x-cloak class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded-md text-sm">
                Please fill in all required fields
            </div>

            <!-- Single Row Form -->
            <form method="POST" action="{{ route('projectdetail.update', $detail->id) }}" class="space-y-6">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-8 gap-4">
                    <div>
                        <label for="year" class="block text-xs font-medium text-gray-700 mb-1">Year</label>
                        <input type="number" id="year" name="year" value="{{ old('year', $detail->year) }}"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('year')}"
                               placeholder="YYYY">
                    </div>

                    <div>
                        <label for="production" class="block text-xs font-medium text-gray-700 mb-1">Production</label>
                        <input type="number" id="production" name="production" value="{{ old('production', $detail->production) }}" step="0.01"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('production')}"
                               placeholder="Mbbl">
                    </div>

                    <div>
                        <label for="income" class="block text-xs font-medium text-gray-700 mb-1">Income</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-2 flex items-center text-gray-500">$</span>
                            <input type="number" id="income" name="income" value="{{ old('income', $detail->income) }}" step="0.01"
                                   class="block w-full pl-6 rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                                   :class="{'border-red-300': errorFields.includes('income')}"
                                   placeholder="0.00">
                        </div>
                    </div>

                    <div>
                        <label for="operational" class="block text-xs font-medium text-gray-700 mb-1">Operational</label>
                        <input type="number" id="operational" name="operational" value="{{ old('operational', $detail->operational) }}" step="0.01"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('operational')}"
                               placeholder="Amount">
                    </div>

                    <div>
                        <label for="depreciation" class="block text-xs font-medium text-gray-700 mb-1">Depreciation</label>
                        <input type="number" id="depreciation" name="depreciation" value="{{ old('depreciation', $detail->depreciation) }}" step="0.01"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('depreciation')}"
                               placeholder="Amount" readonly>
                    </div>
                    <div>
                        <label for="tax" class="block text-xs font-medium text-gray-700 mb-1">Tax</label>
                        <input type="number" id="tax" name="tax" value="{{ old('tax', $detail->tax) }}" step="0.01"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('tax')}"
                               placeholder="Amount" readonly>
                    </div>

                    <div>
                        <label for="taxableIncome" class="block text-xs font-medium text-gray-700 mb-1">Taxable Income</label>
                        <input type="number" id="taxableIncome" name="taxable_income" value="{{ old('taxable_income', $detail->taxable_income) }}" step="0.01"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('taxableIncome')}"
                               placeholder="Amount" readonly>
                    </div>


                    <div>
                        <label for="ncf" class="block text-xs font-medium text-gray-700 mb-1">NCF</label>
                        <input type="number" id="ncf" name="ncf" value="{{ old('ncf', $detail->ncf) }}" step="0.01"
                               class="block w-full rounded-md border-gray-200 shadow-sm text-sm focus:ring-1 focus:ring-gray-300"
                               :class="{'border-red-300': errorFields.includes('ncf')}"
                               placeholder="Amount" readonly>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between pt-4 border-t">
                     <a href="{{ route('projectdetail.index', $project->id) }}" 
                       class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Back to Project
                    </a>
                    <div class="flex space-x-3">
                        <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white bg-gray-900 border border-transparent rounded-md hover:bg-gray-800">
                            Save Cashflow
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const incomeInput = document.getElementById('income');
    const operationalInput = document.getElementById('operational');
    const depreciationInput = document.getElementById('depreciation');
    const taxableIncomeInput = document.getElementById('taxableIncome');

    function calculateTaxableIncome() {
        const income = parseFloat(incomeInput.value) || 0;
        const operational = parseFloat(operationalInput.value) || 0;
        const depreciation = parseFloat(depreciationInput.value) || 0;
        const taxableIncome = income - operational - depreciation;
        taxableIncomeInput.value = taxableIncome.toFixed(2);
    }

    [incomeInput, operationalInput, depreciationInput].forEach(input => {
        input.addEventListener('input', calculateTaxableIncome);
    });

    // Hitung saat halaman pertama kali dibuka
    calculateTaxableIncome();
});
</script>
</body>
</html>
