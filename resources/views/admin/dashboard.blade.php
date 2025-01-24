@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <!-- page statustic chart start -->
        <div class="col-xl-4 col-md-6">
            <div class="card text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0" style="color: #000">
                                {{-- @if ($commission != null)
                            {{ number_format($commission->mpesa + $commission->tigopesa + $commission->airtelmoney 
                                + $commission->halopesa + $commission->nmb + $commission->crdb + $commission->nbc, 2) }}
                        @else
                            0
                        @endif --}}
                                {{ $businesses->count() }}
                            </h4>
                            <p class="mb-0"><a href="#" style="color: #000">Businesses</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <i style="color: #B28910;" class="fas fa-cube f-30"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart1" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0" style="color: #000">
                                {{-- {{ number_format($totalDebts->sum('amount') - $totalDebts->sum('repayment')) }}</h4> --}}
                                {{ $consumers->count() }}
                                <p class="mb-0"><a href="#" style="color: #000">Consumers</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <i style="color: #B28910;" class="ik ik-user f-30"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0" style="color: #000">
                                {{-- {{ number_format($totalDebts->sum('amount') - $totalDebts->sum('repayment')) }}</h4> --}}
                                {{ $reviews->count() }}
                                <p class="mb-0"><a href="#" style="color: #000">Reviews</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <i style="color: #B28910;" class="ik ik-shopping-cart f-30"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart3" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card  text-white">
                <div class="card-header">
                    <h3>Clients Count per gender</h3>
                </div>
                <div class="card-block">
                    <div class="row align-items-center">
                        <canvas id="genderDistributionChart"></canvas>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <canvas id="ratingsChart"></canvas>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
      
        <div class="col-md-4">
            <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <canvas id="ratingsPieChart"></canvas>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
       

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    <h3>Top Businesses</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Business Name</th>
                                <th class="text-center">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topCompanies as $top)
                                <tr>
                                    <td>{{ $top->business_name }}</td>
                                    <td class="text-center">{{ $top->total_rating }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            {{-- <div class="card">
                <div class="card-header">
                    <h3>Top Businesses</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Business Name</th>
                                <th class="text-center">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topCompanies as $top)
                                <tr>
                                    <td>{{ $top->business_name }}</td>
                                    <td class="text-center">{{ $top->total_rating }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
        <div class="col-md-4">
            {{-- <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <canvas id="ratingsPieChart"></canvas>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div> --}}
        </div>
       

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('ratingsChart').getContext('2d');
            var ratingsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Very good', 'Good', 'Okay', 'Bad', 'Terrible'],
                    datasets: [{
                        label: 'Ratings count per Business',
                        data: [
                            {{ $ratingsData['Very good'] }},
                            {{ $ratingsData['Good'] }},
                            {{ $ratingsData['Okay'] }},
                            {{ $ratingsData['Bad'] }},
                            {{ $ratingsData['Terrible'] }}
                        ],
                        backgroundColor: [
                            'rgb(54, 162, 235)',
                            'rgb(74, 191, 103)',
                            'rgb(108, 113, 122)',
                            'rgb(255, 206, 86)',
                            'rgb(255, 97, 97)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(201, 203, 207, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
        

        // Pie Chart
        var pieCtx = document.getElementById('ratingsPieChart').getContext('2d');
        var totalRatings = {{ $ratingsData['Very good'] }} + {{ $ratingsData['Good'] }} + {{ $ratingsData['Okay'] }} + {{ $ratingsData['Bad'] }} + {{ $ratingsData['Terrible'] }};
        var ratingsPieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Very good', 'Good', 'Okay', 'Bad', 'Terrible'],
                datasets: [{
                    data: [
                        {{ $ratingsData['Very good'] }},
                        {{ $ratingsData['Good'] }},
                        {{ $ratingsData['Okay'] }},
                        {{ $ratingsData['Bad'] }},
                        {{ $ratingsData['Terrible'] }}
                    ],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(74, 191, 103)',
                        'rgb(108, 113, 122)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 97, 97)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(201, 203, 207, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        formatter: (value, context) => {
                            let percentage = (value / totalRatings * 100).toFixed(2) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        labels: {
                            title: {
                                font: {
                                    weight: 'bold'
                                }
                            }
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });

       

        const ctx = document.getElementById('genderDistributionChart').getContext('2d');
        const data = {
            labels: ['Male', 'Female'],
            datasets: [{
                label: 'Gender Distribution',
                data: @json(array_values($genderPercentages)),
                backgroundColor: ['#36A2EB', '#4abf67'],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    datalabels: {
                        formatter: (value, context) => {
                            return value.toFixed(2) + '%';
                        },
                        color: '#fff',
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        };

        const genderDistributionChart = new Chart(ctx, config);

    </script>
@endsection
