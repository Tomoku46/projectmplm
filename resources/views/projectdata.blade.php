<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Data - System FM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .card-hover {
            transition: all 0.2s ease-in-out;
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar with gradient border -->
    <nav class="bg-white border-b border-gray-200 relative">
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-gray-200 via-gray-400 to-gray-200"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-16">
                <img src="{{ asset('img/sisfo.png') }}" alt="Logo" class="h-8 w-8">
                <span class="ml-3 text-xl font-bold text-gray-900">System Information FM</span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Header Section with line decoration -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex items-center justify-between pb-4 border-b border-gray-100">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Project Data</h1>
                    <p class="mt-1 text-sm text-gray-500">View and manage your project information</p>
                </div>
            </div>
        </div>

        <!-- Project Information Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Left Column -->
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
                <div class="space-y-4">
                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Project Name</label>
                        <p class="mt-1 text-base font-medium text-gray-900">{{ $project->project_name }}</p>
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Site Manager</label>
                        <p class="mt-1 text-base font-medium text-gray-900">{{ $project->site_manager }}</p>
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Invest Capital</label>
                        <p class="mt-1 text-base font-medium text-gray-900">${{ number_format($project->invest_capital, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
                <div class="space-y-4">
                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Created at</label>
                        <p class="mt-1 text-base font-medium text-gray-900">{{ $project->created_at->format('D, d M Y') }}</p>
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Invest Non-Capital</label>
                        <p class="mt-1 text-base font-medium text-gray-900">${{ number_format($project->invest_non_capital, 2) }}</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Depreciation</label>
                            <p class="mt-1 text-base font-medium text-gray-900">{{ $project->depreciation }}%</p>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Tax</label>
                            <p class="mt-1 text-base font-medium text-gray-900">{{ $project->tax }}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cashflow Charts -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Cashflow Charts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Line Chart -->
                <div>
                    <canvas id="lineChart"></canvas>
                </div>
                <!-- Bar Chart -->
                <div>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Cashflow Table Card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-900">Cashflow Details</h2>
                    <div class="flex items-center space-x-3">
                        <button id="exportPdfWithChart"
                            class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 hover:border-gray-300 transition-all duration-200 flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Export PDF</span>
                        </button>
                        <a href="{{ url('/addcashflow/'.$project->id) }}" 
                           class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-all duration-200 flex items-center space-x-2 shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            <span>Add Cashflow</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Production</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Income</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Operational</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Depreciation</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tax</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Taxable Income</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NCF</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($projectdetails as $detail)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $detail->year }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $detail->production }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${{ number_format($detail->income, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${{ number_format($detail->operational, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ number_format($detail->depreciation, 2) }}%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $detail->tax }}%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${{ number_format($detail->taxable_income, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${{ number_format($detail->ncf, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <a href="{{ route('projectdetail.edit', $detail->id) }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('projectdetail.destroy', $detail->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this cashflow?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-600 hover:text-red-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="px-6 py-4 text-center text-gray-400">No cashflow data available.</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="bg-gray-50">
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-sm font-medium text-gray-900 text-right">Total NCF</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                ${{ number_format($projectdetails->sum('ncf'), 2) }}
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Back Button and Delete Project Button -->
        <div class="mt-8 flex justify-between items-center">
            <!-- Back Button -->
            <a href="{{ url('/projectdata') }}" class="group inline-flex items-center space-x-2 text-gray-600 hover:text-gray-900 transition-all duration-200">
                <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Back to Projects</span>
            </a>

            <!-- Delete Project Button -->
            <form action="{{ route('project.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="group inline-flex items-center space-x-2 px-4 py-2 border border-red-200 text-red-600 rounded-lg hover:bg-red-50 hover:border-red-300 transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    <span class="font-medium">Delete Project</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Ambil data dari Laravel ke JS
        const cashflowLabels = @json($projectdetails->pluck('year'));
        const incomeData = @json($projectdetails->pluck('income'));
        const operationalData = @json($projectdetails->pluck('operational'));
        const ncfData = @json($projectdetails->pluck('ncf'));

        // Line Chart: Income, Operational, NCF
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: cashflowLabels,
                datasets: [
                    {
                        label: 'Income',
                        data: incomeData,
                        borderColor: '#2563eb',
                        backgroundColor: 'rgba(37,99,235,0.1)',
                        fill: false,
                        tension: 0.3
                    },
                    {
                        label: 'Operational',
                        data: operationalData,
                        borderColor: '#f59e42',
                        backgroundColor: 'rgba(245,158,66,0.1)',
                        fill: false,
                        tension: 0.3
                    },
                    {
                        label: 'NCF',
                        data: ncfData,
                        borderColor: '#16a34a',
                        backgroundColor: 'rgba(22,163,74,0.1)',
                        fill: false,
                        tension: 0.3
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'Line Chart: Income, Operational, NCF per Year' }
                },
                scales: {
                    x: { title: { display: true, text: 'Year' } },
                    y: { title: { display: true, text: 'Amount' }, beginAtZero: true }
                }
            }
        });

        // Bar Chart: NCF per Year
        const ctxBar = document.getElementById('barChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: cashflowLabels,
                datasets: [
                    {
                        label: 'NCF',
                        data: ncfData,
                        backgroundColor: '#2563eb'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    title: { display: true, text: 'Bar Chart: NCF per Year' }
                },
                scales: {
                    x: { title: { display: true, text: 'Year' } },
                    y: { title: { display: true, text: 'NCF' }, beginAtZero: true }
                }
            }
        });

        document.getElementById('exportPdfWithChart').addEventListener('click', function () {
            // Ambil gambar dari kedua chart
            const lineChartImg = document.getElementById('lineChart').toDataURL('image/png');
            const barChartImg = document.getElementById('barChart').toDataURL('image/png');

            fetch("{{ route('project.exportPdf', $project->id) }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    line_chart: lineChartImg,
                    bar_chart: barChartImg
                })
            })
            .then(response => response.blob())
            .then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = "cashflow-details-with-chart.pdf";
                document.body.appendChild(a);
                a.click();
                a.remove();
            });
        });
    </script>
</body>
</html>
