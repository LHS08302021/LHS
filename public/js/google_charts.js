google.charts.load('current', {'packages':['corechart']});


google.charts.setOnLoadCallback(enrolledChart);
google.charts.setOnLoadCallback(strandsChart);

function redraw(chart, data, options) {
  window.addEventListener('resize', () => {
    if(window.innerWidth < 768){
        chart.draw(data, data, options);
    }
    else{
        console.log('wide');
    }
  });
}
