// chart 1

anychart.onDocumentReady(function() {
    function colorizer(color) {
        return color;
    }
    // create data
    var data = [{
            x: "تست 1",
            value: 637166,
        },
        {
            x: "تست 2",
            value: 721630,
        },
        {
            x: "تست 3",
            value: 721630,
        },
        {
            x: "تست 4",
            value: 721630,
        },
        {
            x: "تست 5",
            value: 721630,
        },
    ];

    // create a chart and set the data
    var chart = anychart.pie(data);
    // label
    var legend = chart.legend();
    legend.itemsLayout("vertical");
    legend.position("right");
    legend.itemsSourceMode("categories");

    // set the position of labels
    chart.labels().position("outside");
    // configure connectors
    chart.connectorStroke({ color: "#90273a", thickness: 2, dash: "2.2" });
    // disable the legend
    chart.legend(false);
    // set the chart title
    chart.title("عنوان تستی برای چارت");

    // set the container id
    chart.container("chart1");

    // initiate drawing the chart
    chart.draw();
});

// chart 2
anychart.onDocumentReady(function() {
    // create data
    var data = [{
            x: "زن",
            value: 637166,
            normal: {
                hatchFill: "percent50",
            },
        },
        {
            x: "مرد",
            value: 721630,
            normal: {
                hatchFill: "percent50",
            },
        },
    ];

    //create a chart and set the data

    var chart = anychart.pie(data);

    // label
    var legend = chart.legend();
    legend.itemsLayout("vertical");
    legend.position("right");
    legend.itemsSourceMode("categories");

    // set the start angle
    chart.startAngle(130);
    // set the chart title
    chart.title("عنوان تستی برای چارت");

    // set the container id
    chart.container("chart2");

    // initiate drawing the chart
    chart.draw();
});

// chart 3
anychart.onDocumentReady(function() {
    function colorizer(color) {
        return color;
    }
    // create data
    var data = [
        { x: "فروردین", value: 9000 },
        { x: "اردیبهشت", value: 11000 },
        { x: "خرداد", value: 18000 },
        { x: "تیر", value: 12000 },
        { x: "مرداد", value: 10000 },
        { x: "شهریور", value: 10000 },
        { x: "مهر", value: 12000 },
        { x: "آبان", value: 18000 },
        { x: "آذر", value: 11000 },
        { x: "دی", value: 9000 },
        { x: "بهمن", value: 10000 },
        { x: "اسفند", value: 12000 },
    ];

    // create a chart
    var chart = anychart.area();

    // create a spline area series and set the data
    var series = chart.splineArea(data);

    // set the chart title
    chart.title("عنوان تستی برای چارت");

    // set the titles of the axes
    var xAxis = chart.xAxis();
    xAxis.title("متن تستی");
    var yAxis = chart.yAxis();

    // set the container id
    chart.container("chart3");

    // initiate drawing the chart
    chart.draw();
});

// chart 4
anychart.onDocumentReady(function() {
    // create data
    var data = [
        ["فروردین", 10000],
        ["اردیبهشت", 12000],
        ["خرداد", 18000],
        ["تیر", 11000],
        ["مرداد", 9000],
        ["شهریور", 10000],
        ["مهر", 12000],
        ["آبان", 18000],
        ["آذر", 11000],
        ["دی", 9000],
        ["بهمن", 11000],
        ["اسفند", 9000],
    ];

    // create a chart
    var chart = anychart.line();

    // create a line series and set the data
    var series = chart.line(data);

    // set scale mode
    chart.xScale().mode("continuous");

    // set the chart title
    chart.title("عنوان تستی برای چارت");

    // set the titles of the axes
    var xAxis = chart.xAxis();
    xAxis.title("متن تستی");
    var yAxis = chart.yAxis();

    // set the container id
    chart.container("chart4");

    // initiate drawing the chart
    chart.draw();
});