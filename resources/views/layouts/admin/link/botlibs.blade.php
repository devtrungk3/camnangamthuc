<script src="js/jquery-3.2.1.min.js"></script>
    <script src="/js/dashboard.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="/js/chart.js"></script>
    <script type="text/javascript">
        var data1 = {
            labels: ["col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(227,86,40,255)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 25, 65, 76, 23, 79, 11, 33],
            }],
        };
        var data2 = {
            labels: ["col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(32,144,184,255)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 12, 95, 81, 70, 59, 80, 81, 56, 25, 65, 76],
            }],
        };

        var ctxb = $("#barChartView").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data1);

        var ctxb = $("#barChartLike").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data2);

        $('#sampleTable').DataTable();
    </script>