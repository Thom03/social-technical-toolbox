// Retrieve the datasets from the view
var datasets = JSON.parse(document.getElementById('datasets').textContent);

// Your custom JavaScript code for creating the line graph using the charting library
// Use the datasets and render the line chart on the canvas element with id "lineChart"
// Example:
var lineChart = new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: datasets.map(dataset => dataset.release_year),
        datasets: [{
            label: 'Dataset Releases',
            data: datasets.map(dataset => dataset.release_year),
            backgroundColor: 'rgba(0, 123, 255, 0.2)',
            borderColor: 'rgba(0, 123, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Release Year'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Number of Releases'
                }
            }
        }
    }
});
