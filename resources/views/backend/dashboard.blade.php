@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Welcome :Name', ['name' => $logged_in_user->name])
        </x-slot>
        
        

        <x-slot name="body">
            <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>

<script>
    
var InstructorCount = @php print_r($CountRole['Instructor']); @endphp;
var UsersCount = @php print_r($CountRole['Customer']); @endphp;
// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
	credits: {
    enabled: false
  },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:1f}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: '',
        colorByPoint: true,
        data: [{
            name: 'Instructor',
            y: InstructorCount,
            sliced: true,
            selected: true
        }, {
            name: 'Users',
            y: UsersCount,
        }]
    }]
});
</script>
        </x-slot>
    </x-backend.card>
@endsection
