@extends('layouts.app')
@section('title')
التحليلات
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">التحليلات</h4>
            </div>
        </div>
    </div>
@endsection

@section('css')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('content')
<div class="row">
    <!-- Summary Cards -->
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="tx-12 text-muted">إجمالي الزوار</h6>
                        <h4 class="tx-20 font-weight-bold">{{ number_format($totalVisitors) }}</h4>
                    </div>
                    <div class="align-self-center">
                        <div class="bg-primary-transparent rounded-circle p-2">
                            <i class="fas fa-users text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="tx-12 text-muted">إجمالي الزيارات</h6>
                        <h4 class="tx-20 font-weight-bold">{{ number_format($totalVisits) }}</h4>
                    </div>
                    <div class="align-self-center">
                        <div class="bg-success-transparent rounded-circle p-2">
                            <i class="fas fa-eye text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="tx-12 text-muted">إجمالي المشاهدات</h6>
                        <h4 class="tx-20 font-weight-bold">{{ number_format($totalPageViews) }}</h4>
                    </div>
                    <div class="align-self-center">
                        <div class="bg-info-transparent rounded-circle p-2">
                            <i class="fas fa-file-alt text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="tx-12 text-muted">معدل الارتداد</h6>
                        <h4 class="tx-20 font-weight-bold">{{ number_format($avgBounceRate, 2) }}%</h4>
                    </div>
                    <div class="align-self-center">
                        <div class="bg-warning-transparent rounded-circle p-2">
                            <i class="fas fa-chart-line text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Visitors Chart -->
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">إحصائيات الزوار (آخر 30 يوم)</h4>
            </div>
            <div class="card-body">
                <canvas id="visitorsChart" height="100"></canvas>
            </div>
        </div>
    </div>
    
    <!-- Traffic Sources -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">مصادر الزيارات</h4>
            </div>
            <div class="card-body">
                <canvas id="trafficSourcesChart" height="200"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Devices -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">الأجهزة</h4>
            </div>
            <div class="card-body">
                <canvas id="devicesChart" height="150"></canvas>
            </div>
        </div>
    </div>
    
    <!-- Browsers -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">المتصفحات</h4>
            </div>
            <div class="card-body">
                <canvas id="browsersChart" height="150"></canvas>
            </div>
        </div>
    </div>
    
    <!-- Countries -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">الدول</h4>
            </div>
            <div class="card-body">
                <canvas id="countriesChart" height="150"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Top Pages -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">أكثر الصفحات زيارة</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>الصفحة</th>
                                <th>عدد الزيارات</th>
                                <th>النسبة المئوية</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($topPages && count($topPages) > 0)
                                @php
                                    $totalPageViews = array_sum($topPages);
                                @endphp
                                @foreach(array_slice($topPages, 0, 10, true) as $page => $views)
                                    <tr>
                                        <td>{{ $page }}</td>
                                        <td>{{ number_format($views) }}</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" 
                                                     style="width: {{ ($views / $totalPageViews) * 100 }}%">
                                                    {{ number_format(($views / $totalPageViews) * 100, 1) }}%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">لا توجد بيانات متاحة</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
// Visitors Chart
const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
const visitorsChart = new Chart(visitorsCtx, {
    type: 'line',
    data: {
        labels: @json($last30Days ? $last30Days->pluck('date')->map(function($date) { return \Carbon\Carbon::parse($date)->format('M d'); }) : []),
        datasets: [{
            label: 'الزوار',
            data: @json($last30Days ? $last30Days->pluck('visitors') : []),
            borderColor: 'rgb(75, 192, 192)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            tension: 0.1
        }, {
            label: 'الزيارات',
            data: @json($last30Days ? $last30Days->pluck('visits') : []),
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            tension: 0.1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Traffic Sources Chart
const trafficSourcesCtx = document.getElementById('trafficSourcesChart').getContext('2d');
const trafficSourcesChart = new Chart(trafficSourcesCtx, {
    type: 'doughnut',
    data: {
        labels: @json($trafficSources ? array_keys($trafficSources) : []),
        datasets: [{
            data: @json($trafficSources ? array_values($trafficSources) : []),
            backgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#4BC0C0',
                '#9966FF'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

// Devices Chart
const devicesCtx = document.getElementById('devicesChart').getContext('2d');
const devicesChart = new Chart(devicesCtx, {
    type: 'pie',
    data: {
        labels: @json($devices ? array_keys($devices) : []),
        datasets: [{
            data: @json($devices ? array_values($devices) : []),
            backgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

// Browsers Chart
const browsersCtx = document.getElementById('browsersChart').getContext('2d');
const browsersChart = new Chart(browsersCtx, {
    type: 'bar',
    data: {
        labels: @json($browsers ? array_keys($browsers) : []),
        datasets: [{
            label: 'عدد المستخدمين',
            data: @json($browsers ? array_values($browsers) : []),
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Countries Chart
const countriesCtx = document.getElementById('countriesChart').getContext('2d');
const countriesChart = new Chart(countriesCtx, {
    type: 'bar',
    data: {
        labels: @json($countries ? array_keys(array_slice($countries, 0, 5, true)) : []),
        datasets: [{
            label: 'عدد الزوار',
            data: @json($countries ? array_values(array_slice($countries, 0, 5, true)) : []),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection
