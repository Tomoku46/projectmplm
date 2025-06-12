
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cashflow Details PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px;}
        th, td { border: 1px solid #888; padding: 6px 8px; text-align: left; }
        th { background: #f3f3f3; }
        h2 { margin-bottom: 0; }
        img { margin-bottom: 16px; }
    </style>
</head>
<body>
    <h2>Cashflow Details - {{ $project->project_name }}</h2>
    @if(!empty($lineChart))
        <div>
            <strong>Line Chart</strong><br>
            <img src="{{ $lineChart }}" style="width:100%;max-width:500px;">
        </div>
    @endif
    @if(!empty($barChart))
        <div>
            <strong>Bar Chart</strong><br>
            <img src="{{ $barChart }}" style="width:100%;max-width:500px;">
        </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Production</th>
                <th>Income</th>
                <th>Operational</th>
                <th>Depreciation</th>
                <th>Tax</th>
                <th>Taxable Income</th>
                <th>NCF</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projectdetails as $detail)
            <tr>
                <td>{{ $detail->year }}</td>
                <td>{{ $detail->production }}</td>
                <td>${{ number_format($detail->income, 2) }}</td>
                <td>${{ number_format($detail->operational, 2) }}</td>
                <td>{{ number_format($detail->depreciation, 2) }}%</td>
                <td>{{ $detail->tax }}%</td>
                <td>${{ number_format($detail->taxable_income, 2) }}</td>
                <td>${{ number_format($detail->ncf, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>