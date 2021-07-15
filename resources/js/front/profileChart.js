import Chart from 'chart.js';
import eachDayOfInterval from 'date-fns/eachDayOfInterval'

let date = []
let weight = []
const labels = []
$(document).ready(function () {
    axios.get('/profile/get/personals').then((response) => {
        // data = response.data
        response.data.date.map((e) => {
            date.push(new Date(e))
        })
        weight = response.data.weight
    }).then(() => {
        date.map(l => {
            labels.push(l.getDate() + ' ' + getMonth(l.getMonth()))
        })


        new Chart(document.getElementById("profileChart"), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    pointBackgroundColor: 'white',
                    data: weight,
                    pointRadius: 10,
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
                        gridLines: {
                            display: false
                        },
                        display: true,
                        ticks: {
                            suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                            // OR //
                            beginAtZero: true   // minimum value will be 0.
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
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
    })
})

const monthNames = ["Янв", "Феб", "Мар", "Апр", "Май", "Июн",
    "Июл", "Авг", "Сеп", "Окт", "Ноя", "Дек"
];

function getMonth(m) {
    return monthNames[m]
}




