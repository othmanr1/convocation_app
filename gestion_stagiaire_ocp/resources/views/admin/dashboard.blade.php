<x-admin-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight text-neutral-800">
         {{ __('Admin') }}   {{ __('Dashboard') }} 
      </h2>
   </x-slot>
   <div class="py-12">
      <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <canvas id="bar-chart" height="400px">
          
            </canvas>
           
            </div>
            <h4 class="text-center text-xl font-bold mt-4">Les stagiaires qui ont été acceptées</h4>
         </div>
      </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        // Get the canvas element
        var ctx = document.getElementById('bar-chart').getContext('2d');

        // Define the data for the chart
        var data = {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: 'Total Stagiaire',
                data: {!! json_encode($data) !!},
                backgroundColor: 'rgba(218, 237, 216)',
                borderColor: 'rgba(84, 245, 66)',
                borderWidth: 1
            }]
        };

        // Define the options for the chart
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var label = data.datasets[tooltipItem.datasetIndex].label || '';
                        if (label) {
                            label += ': ';
                        }
                        label += tooltipItem.yLabel;
                        return label;
                    }
                }
            }
        };

        // Create the chart
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>

</x-admin-layout>