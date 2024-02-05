(function($) {
    "use strict"

    //basic bar chart
if($('#barChart_1').length > 0 ){

    const barChart_1 = document.getElementById("barChart_1").getContext('2d');

    barChart_1.height = 100;

    // Retrieve the dataset counts from the view
    // const impactAreas = jQuery('#barChart_1').data('impact-areas');
    // const datasetCounts = jQuery('#barChart_1').data('dataset-counts');
    const impactAreas = $('#barChart_1').data('impact-areas');
    const datasetCounts = $('#barChart_1').data('dataset-counts');

    // Sorting the data
    const sortedData = datasetCounts.slice().sort((a, b) => b - a);
    const sortedLabels = sortedData.map(count => impactAreas[datasetCounts.indexOf(count)]);

    // Generate random colors
    const colors = [];
    for (let i = 0; i < datasetCounts.length; i++) {
        const color = `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 1)`;
        colors.push(color);
    }




    new Chart(barChart_1, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: sortedLabels,
            datasets: [
                {
                    label: "Dataset Counts",
                    data: sortedData,
                    borderColor: 'rgba(69, 11, 90, 1)',
                    borderWidth: "0",
                    backgroundColor: colors
                }
            ]
        },
        options: {
            plugins: {
                datalabels: {
                    anchor: 'end', // Anchor the labels to the end of the bars
                    align: 'top', // Align the labels to the top of the bars
                    color: 'black', // Label color
                    font: {
                        weight: 'bold' // Bold font weight for the labels
                    },
                    formatter: function(value, context) {
                        return value; // Display the value of each data point as label
                    }
                }
            },
            // legend: {
            //     display: true,
            //     position: 'chartArea', // Display legend inside the chart area
            //     align: 'topright', // Align legend to the start of the chart
            //     labels: {
            //         generateLabels: function(chart) {
            //             const data = chart.data;
            //             if (data.labels.length && data.datasets.length) {
            //                 return data.labels.map(function(label, i) {
            //                     const dataset = data.datasets[0];
            //                     return {
            //                         text: label,
            //                         fillStyle: dataset.backgroundColor[i % dataset.backgroundColor.length],
            //                         hidden: isNaN(dataset.data[i]), // Hide legend for NaN values
            //                         index: i
            //                     };
            //                 });
            //             }
            //             return [];
            //         }
            //     }
            // },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    barPercentage: 0.8
                }]
            }
        }
    });

}



if(jQuery('#barChart_2').length > 0 ){

//gradient bar chart
    const barChart_2 = document.getElementById("barChart_2").getContext('2d');
    //generate gradient
    const barChart_2gradientStroke = barChart_2.createLinearGradient(0, 0, 0, 250);
    barChart_2gradientStroke.addColorStop(0, "rgba(69, 11, 90, 1)");
    barChart_2gradientStroke.addColorStop(1, "rgba(69, 11, 90, 0.5)");

    barChart_2.height = 100;

    new Chart(barChart_2, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: barChart_2gradientStroke,
                    borderWidth: "0",
                    backgroundColor: barChart_2gradientStroke,
                    hoverBackgroundColor: barChart_2gradientStroke
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    // Change here
                    barPercentage: 0.5
                }]
            }
        }
    });
}


//stalked bar chart
if(jQuery('#barChart_3').length > 0 ){
    const barChart_3 = document.getElementById("barChart_3").getContext('2d');
    //generate gradient
    const barChart_3gradientStroke = barChart_3.createLinearGradient(50, 100, 50, 50);
    barChart_3gradientStroke.addColorStop(0, "rgba(69, 11, 90, 1)");
    barChart_3gradientStroke.addColorStop(1, "rgba(69, 11, 90, 0.5)");

    const barChart_3gradientStroke2 = barChart_3.createLinearGradient(50, 100, 50, 50);
    barChart_3gradientStroke2.addColorStop(0, "rgba(32, 159, 132, 1)");
    barChart_3gradientStroke2.addColorStop(1, "rgba(32, 159, 132, 1)");

    const barChart_3gradientStroke3 = barChart_3.createLinearGradient(50, 100, 50, 50);
    barChart_3gradientStroke3.addColorStop(0, "rgba(247, 43, 80, 1)");
    barChart_3gradientStroke3.addColorStop(1, "rgba(247, 43, 80, 1)");

    barChart_3.height = 100;

    let barChartData = {
        defaultFontFamily: 'Poppins',
        labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Red',
            backgroundColor: barChart_3gradientStroke,
            hoverBackgroundColor: barChart_3gradientStroke,
            data: [
                '12',
                '12',
                '12',
                '12',
                '12',
                '12',
                '12'
            ]
        }, {
            label: 'Green',
            backgroundColor: barChart_3gradientStroke2,
            hoverBackgroundColor: barChart_3gradientStroke2,
            data: [
                '12',
                '12',
                '12',
                '12',
                '12',
                '12',
                '12'
            ]
        }, {
            label: 'Blue',
            backgroundColor: barChart_3gradientStroke3,
            hoverBackgroundColor: barChart_3gradientStroke3,
            data: [
                '12',
                '12',
                '12',
                '12',
                '12',
                '12',
                '12'
            ]
        }]

    };

    new Chart(barChart_3, {
        type: 'bar',
        data: barChartData,
        options: {
            legend: {
                display: false
            },
            title: {
                display: false
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });


}

let draw = Chart.controllers.line.__super__.draw; //draw shadow
if(jQuery('#lineChart_1').length > 0 ){


//basic line chart
    const datasets = JSON.parse(document.getElementById('datasets').textContent);
    const lineChart_1 = document.getElementById("lineChart_1").getContext('2d');

    const datasetCountByYear = {};



    // Loop through the datasets and count the occurrences of each year
    datasets.forEach(function(dataset) {
        var releaseYear = dataset.release_year;
        if (datasetCountByYear.hasOwnProperty(releaseYear)) {
            datasetCountByYear[releaseYear]++;
        } else {
            datasetCountByYear[releaseYear] = 1;
        }
    });

    // Extract the years and counts from the object
    var years = Object.keys(datasetCountByYear);
    var counts = Object.values(datasetCountByYear);



    Chart.controllers.line = Chart.controllers.line.extend({
        draw: function () {
            draw.apply(this, arguments);
            let nk = this.chart.chart.ctx;
            let _stroke = nk.stroke;
            nk.stroke = function () {
                nk.save();
                nk.shadowColor = 'rgba(255, 0, 0, .2)';
                nk.shadowBlur = 10;
                nk.shadowOffsetX = 0;
                nk.shadowOffsetY = 10;
                _stroke.apply(this, arguments)
                nk.restore();
            }
        }
    });

    lineChart_1.height = 100;

    new Chart(lineChart_1, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: years,
            datasets: [
                {
                    label: "Number of Bundles",
                    data: counts,
                    borderColor: 'rgba(241, 90, 49, 1)',
                    borderWidth: "3",
                    backgroundColor: 'transparent',
                    pointBackgroundColor: 'rgba(241, 90, 49, 1)'
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Release Year',

                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Number of Bundles'
                    }
                }
            }
        }
    });

}

//gradient line chart
if(jQuery('#lineChart_2').length > 0 ){

    const lineChart_2 = document.getElementById("lineChart_2").getContext('2d');
    //generate gradient
    const lineChart_2gradientStroke = lineChart_2.createLinearGradient(500, 0, 100, 0);
    lineChart_2gradientStroke.addColorStop(0, "rgba(69, 11, 90, 1)");
    lineChart_2gradientStroke.addColorStop(1, "rgba(69, 11, 90, 0.5)");

    Chart.controllers.line = Chart.controllers.line.extend({
        draw: function () {
            draw.apply(this, arguments);
            let nk = this.chart.chart.ctx;
            let _stroke = nk.stroke;
            nk.stroke = function () {
                nk.save();
                nk.shadowColor = 'rgba(0, 0, 128, .2)';
                nk.shadowBlur = 10;
                nk.shadowOffsetX = 0;
                nk.shadowOffsetY = 10;
                _stroke.apply(this, arguments)
                nk.restore();
            }
        }
    });

    lineChart_2.height = 100;

    new Chart(lineChart_2, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 20, 60, 41, 66, 45, 80],
                    borderColor: lineChart_2gradientStroke,
                    borderWidth: "2",
                    backgroundColor: 'transparent',
                    pointBackgroundColor: 'rgba(69, 11, 90, 0.5)'
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 10
                    }
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });
}

//dual line chart
if(jQuery('#lineChart_3').length > 0 ){
    const lineChart_3 = document.getElementById("lineChart_3").getContext('2d');
    //generate gradient
    const lineChart_3gradientStroke1 = lineChart_3.createLinearGradient(500, 0, 100, 0);
    lineChart_3gradientStroke1.addColorStop(0, "rgba(69, 11, 90, 1)");
    lineChart_3gradientStroke1.addColorStop(1, "rgba(69, 11, 90, 0.5)");

    const lineChart_3gradientStroke2 = lineChart_3.createLinearGradient(500, 0, 100, 0);
    lineChart_3gradientStroke2.addColorStop(0, "rgba(255, 92, 0, 1)");
    lineChart_3gradientStroke2.addColorStop(1, "rgba(255, 92, 0, 1)");

    Chart.controllers.line = Chart.controllers.line.extend({
        draw: function () {
            draw.apply(this, arguments);
            let nk = this.chart.chart.ctx;
            let _stroke = nk.stroke;
            nk.stroke = function () {
                nk.save();
                nk.shadowColor = 'rgba(0, 0, 0, 0)';
                nk.shadowBlur = 10;
                nk.shadowOffsetX = 0;
                nk.shadowOffsetY = 10;
                _stroke.apply(this, arguments)
                nk.restore();
            }
        }
    });

    lineChart_3.height = 100;

    new Chart(lineChart_3, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 20, 60, 41, 66, 45, 80],
                    borderColor: lineChart_3gradientStroke1,
                    borderWidth: "2",
                    backgroundColor: 'transparent',
                    pointBackgroundColor: 'rgba(69, 11, 90, 0.5)'
                }, {
                    label: "My First dataset",
                    data: [5, 20, 15, 41, 35, 65, 80],
                    borderColor: lineChart_3gradientStroke2,
                    borderWidth: "2",
                    backgroundColor: 'transparent',
                    pointBackgroundColor: 'rgba(254, 176, 25, 1)'
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 10
                    }
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });


}
//dual line chart
if(jQuery('#lineChart_3Kk').length > 0 ){
    const lineChart_3Kk = document.getElementById("lineChart_3Kk").getContext('2d');
    //generate gradient

	Chart.controllers.line = Chart.controllers.line.extend({
        draw: function () {
            draw.apply(this, arguments);
            let nk = this.chart.chart.ctx;
            let _stroke = nk.stroke;
            nk.stroke = function () {
                nk.save();
                nk.shadowColor = 'rgba(0, 0, 0, 0)';
                nk.shadowBlur = 10;
                nk.shadowOffsetX = 0;
                nk.shadowOffsetY = 10;
                _stroke.apply(this, arguments)
                nk.restore();
            }
        }
    });

    lineChart_3Kk.height = 100;

    new Chart(lineChart_3Kk, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [90, 60, 80, 50, 60, 55, 80],
                    borderColor: 'rgba(58,122,254,1)',
                    borderWidth: "3",
                    backgroundColor: 'rgba(0,0,0,0)',
                    pointBackgroundColor: 'rgba(0, 0, 0, 0)'
                }
            ]
        },
        options: {
            legend: false,
			elements: {
					point:{
						radius: 0
					}
			},
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 10
                    },
					borderWidth:3,
					display:false,
					lineTension:0.4,
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    },

                }]
            }
        }
    });


}
//basic area chart
if(jQuery('#areaChart_1').length > 0 ){
    const areaChart_1 = document.getElementById("areaChart_1").getContext('2d');

    areaChart_1.height = 100;

    new Chart(areaChart_1, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 20, 60, 41, 66, 45, 80],
                    borderColor: 'rgba(0, 0, 1128, .3)',
                    borderWidth: "1",
                    backgroundColor: 'rgba(69, 11, 90, .5)',
                    pointBackgroundColor: 'rgba(0, 0, 1128, .3)'
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 10
                    }
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });
}

//gradient area chart
if(jQuery('#areaChart_2').length > 0 ){
    const areaChart_2 = document.getElementById("areaChart_2").getContext('2d');
    //generate gradient
    const areaChart_2gradientStroke = areaChart_2.createLinearGradient(0, 1, 0, 500);
    areaChart_2gradientStroke.addColorStop(0, "rgba(247, 43, 80, 0.2)");
    areaChart_2gradientStroke.addColorStop(1, "rgba(247, 43, 80, 0)");

    areaChart_2.height = 100;

    new Chart(areaChart_2, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 20, 60, 41, 66, 45, 80],
                    borderColor: "#f72b50",
                    borderWidth: "4",
                    backgroundColor: areaChart_2gradientStroke
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 5
                    }
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });
}

//gradient area chart
if(jQuery('#areaChart_3').length > 0 ){
    const areaChart_3 = document.getElementById("areaChart_3").getContext('2d');

    areaChart_3.height = 100;

    new Chart(areaChart_3, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 20, 60, 41, 66, 45, 80],
                    borderColor: 'rgb(69, 11, 90)',
                    borderWidth: "1",
                    backgroundColor: 'rgba(69, 11, 90, .5)'
                },
                {
                    label: "My First dataset",
                    data: [5, 25, 20, 41, 36, 75, 70],
                    borderColor: 'rgb(255, 92, 0)',
                    borderWidth: "1",
                    backgroundColor: 'rgba(255, 92, 0, .5)'
                }
            ]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 10
                    }
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });

}

if(jQuery('#radar_chart').length > 0 ){
    //radar chart
    const radar_chart = document.getElementById("radar_chart").getContext('2d');

    const radar_chartgradientStroke1 = radar_chart.createLinearGradient(500, 0, 100, 0);
    radar_chartgradientStroke1.addColorStop(0, "rgba(54, 185, 216, .5)");
    radar_chartgradientStroke1.addColorStop(1, "rgba(75, 255, 162, .5)");

    const radar_chartgradientStroke2 = radar_chart.createLinearGradient(500, 0, 100, 0);
    radar_chartgradientStroke2.addColorStop(0, "rgba(68, 0, 235, .5");
    radar_chartgradientStroke2.addColorStop(1, "rgba(68, 236, 245, .5");

    // radar_chart.height = 100;
    new Chart(radar_chart, {
        type: 'radar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 66, 45, 56, 55, 40],
                    borderColor: '#f21780',
                    borderWidth: "1",
                    backgroundColor: radar_chartgradientStroke2
                },
                {
                    label: "My Second dataset",
                    data: [28, 12, 40, 19, 63, 27, 87],
                    borderColor: '#f21780',
                    borderWidth: "1",
                    backgroundColor: radar_chartgradientStroke1
                }
            ]
        },
        options: {
            legend: false,
            maintainAspectRatio: false,
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        }
    });


}
//pie chart
if(jQuery('#pie_chart').length > 0 ){
    //pie chart
    const pie_chart = document.getElementById("pie_chart").getContext('2d');
    // pie_chart.height = 100;
    new Chart(pie_chart, {
        type: 'pie',
        data: {
            defaultFontFamily: 'Poppins',
            datasets: [{
                data: [45, 25, 20, 10],
                borderWidth: 0,
                backgroundColor: [
                    "rgba(69, 11, 90, .9)",
                    "rgba(69, 11, 90, .7)",
                    "rgba(69, 11, 90, .5)",
                    "rgba(0,0,0,0.07)"
                ],
                hoverBackgroundColor: [
                    "rgba(69, 11, 90, .9)",
                    "rgba(69, 11, 90, .7)",
                    "rgba(69, 11, 90, .5)",
                    "rgba(0,0,0,0.07)"
                ]

            }],
            labels: [
                "one",
                "two",
                "three",
                "four"
            ]
        },
        options: {
            responsive: true,
            legend: false,
            maintainAspectRatio: false
        }
    });
}

if(jQuery('#doughnut_chart').length > 0 ){
    //doughut chart
    const doughnut_chart = document.getElementById("doughnut_chart").getContext('2d');
    // doughnut_chart.height = 100;
    new Chart(doughnut_chart, {
        type: 'doughnut',
        data: {
			weight: 5,
            defaultFontFamily: 'Poppins',
            datasets: [{
                data: [45, 25, 20],
                borderWidth: 3,
				borderColor: "rgba(255,255,255,1)",
                backgroundColor: [
                    "rgba(69, 11, 90, 1)",
                    "rgba(32, 159, 132, 1)",
                    "rgba(247, 43, 80, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(69, 11, 90, 0.9)",
                    "rgba(32, 159, 132, .9)",
                    "rgba(247, 43, 80, .9)"
                ]

            }],
            // labels: [
            //     "green",
            //     "green",
            //     "green",
            //     "green"
            // ]
        },
        options: {
			weight: 1,
			 cutoutPercentage: 70,
            responsive: true,
            maintainAspectRatio: false
        }
    });

}
if(jQuery('#polar_chart').length > 0 ){
    //polar chart
    const polar_chart = document.getElementById("polar_chart").getContext('2d');
    // polar_chart.height = 100;
    new Chart(polar_chart, {
        type: 'polarArea',
        data: {
            defaultFontFamily: 'Poppins',
            datasets: [{
                data: [15, 18, 9, 6, 19],
                borderWidth: 0,
                backgroundColor: [
                    "rgba(69, 11, 90, 1)",
                    "rgba(32, 159, 132, 1)",
                    "rgba(247, 43, 80, 1)",
                    "rgba(39, 129, 213, 1)",
                    "rgba(255, 92, 0, 1)"
                ]

            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

}





})(jQuery);
