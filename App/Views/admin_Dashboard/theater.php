<div class="chart-container d-flex justify-content-center">
    <div id="theaterChart" style="width:100%;max-width:700px"></div>
</div>
<script>
    var xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yArray = [55, 49, 44, 24, 15];

    var layout = {
        title: "DOANH THU THEO RẠP"
    };

    var data = [{
        labels: xArray,
        values: yArray,
        hole: .4,
        type: "pie"
    }];

    Plotly.newPlot("theaterChart", data, layout);
</script>