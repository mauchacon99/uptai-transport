
$(function () {
	"use strict";
	
    //bar chart example
    var barOptions = {
        series: {
            bars: {
                show: true,
                barWidth: 0.8,
                fill: true,
                fillColor: {
                    colors: [{
                            opacity: 0.8
                        }, {
                            opacity: 0.8
                        }]
                }
            }
        },
        xaxis: {
            tickDecimals: 0
        },
        colors: ["#5867dd"],
        grid: {
            color: "#dde6e9",
            hoverable: true,
            clickable: true,
            tickColor: "#dde6e9",
            borderWidth: 0
        },
        legend: {
            show: false
        },
        tooltip: true,
        tooltipOpts: {
            content: "x: %x, y: %y"
        }
    };
    var barData = {
        label: "bar",
        data: [
            [1, 34],
            [2, 25],
            [3, 19],
            [4, 34],
            [5, 32],
            [6, 44],
			
        ]
    };
    $.plot($("#flot-bar-chart"), [barData], barOptions); 
});
//Flot Pie Chart
$(function() {

    var data = [{
        label: "Vehiculo Nro 2",
        data: 23,
        color: "#f4516c"
    }, {
        label: "Vehiculo Nro 56",
        data: 18,
        color: "#ffb822"
    }, {
        label: "Vehiculo Nro 12",
        data: 12,
        color: "#36a3f7"
    }, {
        label: "Vehiculo Nro 17",
        data: 8,
        color: "#ff2422"
    }];

    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 100,
                y: 0
            },
            defaultTheme: false
        }
    });

});
 