var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
        datasets: [{
                label: 'Recuperados por mes',
                borderColor: 'rgb(10,171,42)',
                data: [0, 10, 15, 22, 25, 30, 40]
            }]
    },

    // Configuration options go here
    options: {}
});

