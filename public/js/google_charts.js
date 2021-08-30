google.charts.load('current', {'packages':['corechart', 'bar']});


google.charts.setOnLoadCallback(enrolledChart);
google.charts.setOnLoadCallback(strandsChart);

function redraw(chart, data) {
  window.addEventListener('resize', () => {
    // medium above
    if(window.innerWidth >= 768){

        var options = {
          title: 'Enrolled Student',
          curveType: 'function',
          width: 296,
          legend: { position: 'bottom' }
        };

        chart.draw(data, options);

    } else if (window.innerWidth >= 992){ // large above

        var options = {
          title: 'Enrolled Student',
          curveType: 'function',
          width: 296,
          legend: { position: 'bottom' }
        };

        chart.draw(data, options);
    } 
  });
}
