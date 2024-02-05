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


    // Define specific colors for each dataset
    const colors = [
        'rgba(88, 58, 131, 1)', // Red
        'rgba(0, 153, 170, 1)', // Blue
        'rgba(0, 150, 127, 1)', // Yellow
        'rgba(0, 166, 87, 1)', // Green
        'rgba(146, 200, 62, 1)', // Purple
        'rgba(255, 159, 64, 1)' // Orange
        // Add more colors if needed
    ];

    // Ensure that there are enough colors for all datasets
    const datasetColors = colors.slice(0, datasetCounts.length);






    new Chart(barChart_1, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: sortedLabels,
            datasets: [
                {
                    label: "Dataset Counts",
                    data: sortedData,
                    borderColor: 'rgb(255,255,255)',
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
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    barPercentage: 0.8,
                    ticks: {
                        maxRotation: 0, // Rotate x-axis labels by 45 degrees
                        minRotation: 25, // Minimum rotation of x-axis labels
                        autoSkip: false, // Prevent automatic skipping of labels
                        fontSize: 10 // Adjust font size of x-axis labels
                    }
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

if($('#barChart_3').length > 0 ){

    const barChart_1 = document.getElementById("barChart_3").getContext('2d');

    barChart_1.height = 100;

    // Retrieve the dataset counts from the view
    // const impactAreas = jQuery('#barChart_1').data('impact-areas');
    // const datasetCounts = jQuery('#barChart_1').data('dataset-counts');
    const providers = $('#barChart_3').data('providers');
    const datasetPCounts = $('#barChart_3').data('dataset-counts');

    // Sorting the data
    const sortedData = datasetPCounts.slice().sort((a, b) => b - a);
    const sortedLabels = sortedData.map(count => providers[datasetPCounts.indexOf(count)]);

    // Define a color range
    const colorRange = [
        'rgba(73, 42, 115, 1)', // Red
        'rgba(66, 62, 134, 1)', // Blue
        'rgba(55, 88, 141, 1)', // Yellow
        'rgba(47, 112, 143, 1)', // Green
        'rgba(37, 133, 142, 1)', // Purple
        'rgba(27, 155, 137, 1)', // Orange
        'rgba(92, 188, 106, 1)', // Orange
        'rgba(139, 198, 76, 1)', // Orange
        'rgba(193, 215, 47, 1)' // Orange
    ];

    // Create a function to cycle through the color range
    function getColor(index) {
        return colorRange[index % colorRange.length];
    }

    // Use the color function to assign colors to datasets
    const colors = sortedData.map((data, index) => getColor(index));



    new Chart(barChart_1, {
        type: 'horizontalBar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: sortedLabels,
            datasets: [
                {
                    label: "Dataset Counts",
                    data: sortedData,
                    borderColor: 'rgb(255,255,255)',
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
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    barPercentage: 0.8,
                    ticks: {
                        maxRotation: 0, // Rotate x-axis labels by 45 degrees
                        minRotation: 25, // Minimum rotation of x-axis labels
                        autoSkip: false, // Prevent automatic skipping of labels
                        fontSize: 10 // Adjust font size of x-axis labels
                    }
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

    if ($('#wordCloudChart').length > 0) {

        const wordCloudCtx = document.getElementById("wordCloudChart").getContext('2d');

        // Example word frequency data
        const wordFrequencies = {
            "hello": 10,
            "world": 15,
            "good": 8,
            "morning": 12,
            // Add more words and frequencies as needed
        };

        // Convert word frequency data to datasets for Chart.js
        const datasets = Object.keys(wordFrequencies).map(word => {
            return {
                label: word,
                data: [wordFrequencies[word]],
                backgroundColor: 'rgba(0, 0, 255, 0.5)', // Blue color for all words (you can change this)
                borderWidth: 0,
                fontSize: wordFrequencies[word] * 5 // Adjust the multiplier to change font sizes
            };
        });

        new Chart(wordCloudCtx, {
            type: 'horizontalBar',
            data: {
                datasets: datasets
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                plugins: {
                    datalabels: {
                        display: true,
                        font: {
                            size: 'fontSize'
                        },
                        formatter: function(value, context) {
                            return context.dataset.label; // Display the word label as the data label
                        }
                    }
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

if($('#pie_chart').length > 0 ){
    //pie chart
    const pie_chart = document.getElementById("pie_chart").getContext('2d');
    // const inventoryData = JSON.parse(document.getElementById('inventoryData').textContent);
    const inventoryData = $('#pie_chart').data('dataset-counts');
    // pie_chart.height = 100;
    if (inventoryData && inventoryData.length > 0) {
        new Chart(pie_chart, {

            type: 'pie',
            data: {
                defaultFontFamily: 'Poppins',
                datasets: [{
                    data: inventoryData.map(item => item.count),
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
                labels: inventoryData.map(item => item.inventory_source)
            },
            options: {
                responsive: true,
                legend: false,
                maintainAspectRatio: false

            }
        });
    } else {
        console.error("Inventory data is empty or invalid.");
    }
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
