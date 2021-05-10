import Chart from 'chart.js';
import eachDayOfInterval from 'date-fns/eachDayOfInterval'

const result = eachDayOfInterval({
    start: new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate() - 6),
    end: new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate())
})
const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sep", "Octr", "Nov", "Dec"
];

function getMonth(m) {
    return monthNames[m]
}

const labels = []
result.map(l => {
    labels.push(l.getDate() + ' ' + getMonth(l.getMonth()))
})
new Chart(document.getElementById("profileChart"), {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            pointBackgroundColor:'white',
            data: [94, 93, 92, 89, 70, 60,50],
            pointRadius:10,
            borderColor: "red",
            label: 'Вес',
            fill: true,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
        }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                gridLines:{
                    display:false
                },
                display: true,
                ticks: {
                    suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                    // OR //
                    beginAtZero: true   // minimum value will be 0.
                }
            }],
            xAxes:[{
                gridLines:{
                    display:false
                }
            }]
        },
        title: {
            display: false,
        },
        legend: {
            display: false
        },

    }
});
