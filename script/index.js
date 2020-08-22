document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {});
  });

document.addEventListener('DOMContentLoaded', function() {
    var elems1 = document.querySelectorAll('select');
    var instances1 = M.FormSelect.init(elems1, {});
  });

console.log("we here");  

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, { 
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            data: [20, 18, 16, 14, 12, 10, 8, 7, 6, 4, 2, 18],
            backgroundColor: [
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)',
                'rgba(83, 67, 43, 0.4)'
            ],
            borderColor: [
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)',
                'rgba(83, 67, 43, 1)'
            ],
            borderWidth: 1,
            label: 'Total Expenses'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});