@extends('layouts.master')
@section('title')
    IPE TANO | {{ $data->business_name}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4">
                <div class="card  text-white" >
                    <div class="card-header">
                        <h3>Service reviewers by Gender</h3>
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
                    <div class="card-header">
                        <h3>Ratings count per Service</h3>
                    </div>
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
                    <div class="card-header">
                        <h3>Service reviewers per Age</h3>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center">
                            <canvas id="ageChart"></canvas>
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="card  text-white" >
                    <div class="card-header">
                        <h3>Service reviewers by Gender</h3>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center">
{{--                            <canvas id="genderDistributionChart"></canvas>--}}
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card  text-white">
                    <div class="card-header">
                        <h3>Ratings count per Service</h3>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center">
                            <canvas id="reviewChart" width="800" height="400"></canvas>
{{--                            <canvas id="ratingsChart"></canvas>--}}
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card  text-white">
                    <div class="card-header">
                        <h3>Service reviewers per Location</h3>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center">
                            <canvas id="regionChart"></canvas>
{{--                            <canvas id="ageChart"></canvas>--}}
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>


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
        {{--var pieCtx = document.getElementById('ratingsPieChart').getContext('2d');--}}
        {{--var totalRatings = {{ $ratingsData['Very good'] }} + {{ $ratingsData['Good'] }} + {{ $ratingsData['Okay'] }} + {{ $ratingsData['Bad'] }} + {{ $ratingsData['Terrible'] }};--}}
        {{--var ratingsPieChart = new Chart(pieCtx, {--}}
        {{--    type: 'pie',--}}
        {{--    data: {--}}
        {{--        labels: ['Very good', 'Good', 'Okay', 'Bad', 'Terrible'],--}}
        {{--        datasets: [{--}}
        {{--            data: [--}}
        {{--                {{ $ratingsData['Very good'] }},--}}
        {{--                {{ $ratingsData['Good'] }},--}}
        {{--                {{ $ratingsData['Okay'] }},--}}
        {{--                {{ $ratingsData['Bad'] }},--}}
        {{--                {{ $ratingsData['Terrible'] }}--}}
        {{--            ],--}}
        {{--            backgroundColor: [--}}
        {{--                'rgb(54, 162, 235)',--}}
        {{--                'rgb(74, 191, 103)',--}}
        {{--                'rgb(108, 113, 122)',--}}
        {{--                'rgb(255, 206, 86)',--}}
        {{--                'rgb(255, 97, 97)'--}}
        {{--            ],--}}
        {{--            borderColor: [--}}
        {{--                'rgba(54, 162, 235, 1)',--}}
        {{--                'rgba(75, 192, 192, 1)',--}}
        {{--                'rgba(201, 203, 207, 1)',--}}
        {{--                'rgba(255, 206, 86, 1)',--}}
        {{--                'rgba(255, 99, 132, 1)'--}}
        {{--            ],--}}
        {{--            borderWidth: 1--}}
        {{--        }]--}}
        {{--    },--}}
        {{--    options: {--}}
        {{--        plugins: {--}}
        {{--            datalabels: {--}}
        {{--                formatter: (value, context) => {--}}
        {{--                    let percentage = (value / totalRatings * 100).toFixed(2) + "%";--}}
        {{--                    return percentage;--}}
        {{--                },--}}
        {{--                color: '#fff',--}}
        {{--                labels: {--}}
        {{--                    title: {--}}
        {{--                        font: {--}}
        {{--                            weight: 'bold'--}}
        {{--                        }--}}
        {{--                    }--}}
        {{--                }--}}
        {{--            }--}}
        {{--        }--}}
        {{--    },--}}
        {{--    plugins: [ChartDataLabels]--}}
        {{--});--}}



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


        const ctxx = document.getElementById('ageChart').getContext('2d');
        const dataa = {
            labels: @json(array_keys($ageGroups)),
            datasets: [{
                label: 'Business reviewers per Age',
                data: @json(array_values($ageGroups)),
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const confiig = {
            type: 'bar',
            data: dataa,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        };

        new Chart(ctxx, confiig);


        const regionLabels = @json(array_keys($reviewCounts->toArray()));
        const regionData = @json(array_values($reviewCounts->toArray()));

        const rData = {
            labels: regionLabels,
            datasets: [{
                label: 'Clients Count per Location',
                data: regionData,
                backgroundColor: '#36A2EB' // Customize the color as needed
            }]
        };

        const rconfig = {
            type: 'bar',
            data: rData,
            options: {
                indexAxis: 'y', // Horizontal bar chart
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Render the chart
        new Chart(document.getElementById('regionChart').getContext('2d'), rconfig);


        document.addEventListener("DOMContentLoaded", function () {
            // Prepare data for Chart.js
            const labels = @json(array_keys($ratingMap));  // X-axis labels for ratings (e.g., 'Very good', 'Good', etc.)
            const ageGroups = @json(array_keys($reviewData));  // Age group labels (e.g., '18 - 24', '25 - 34', etc.)

            const datasets = [];
            @foreach($reviewData as $ageGroup => $data)
            datasets.push({
                label: '{{ $ageGroup }}',
                data: @json(array_values($data)),  // Data values for each rating type within this age group
                borderColor: getRandomColor(),
                fill: false,
                tension: 0.1  // Line smoothing
            });
            @endforeach

            const ctxline = document.getElementById('reviewChart').getContext('2d');
            new Chart(ctxline, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Count of Reviews'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Rating'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    }
                }
            });

            // Helper function to get random colors for each age group line
            function getRandomColor() {
                const letters = '0123456789ABCDEF';
                let color = '#';
                for (let i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
        });

    </script>
@endsection
