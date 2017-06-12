var w = 500;
var h = 150;

var svg = d3.select("#line")
  .append("svg")
  .attr("width", w)
  .attr("height", h)
  .attr("id", "visualization");

var data = d3.range(11).map(function(){return 10*Math.random();});

var x = d3.scale.linear().domain([-1, 10]).range([0, 490]);
var y = d3.scale.linear().domain([-15, 10]).range([0, 140]);
var line = d3.svg.line()
  .interpolate("linear")
  .x(function(d,i) {return x(i);})
  .y(function(d) {return y(-d);})


var path = svg.append("path")
  .attr("d", line(data))
  .attr("stroke", "steelblue")
  .attr("stroke-width", "5")
  .attr("fill", "none");

var totalLength = path.node().getTotalLength();

path
  .attr("stroke-dasharray", totalLength + " " + totalLength)
  .attr("stroke-dashoffset", totalLength)
  .transition()
    .duration(1500)
    .ease("linear")
    .attr("stroke-dashoffset", 0);

svg.on("click", function(){
  path      
    .transition()
    .duration(1500)
    .ease("linear")
    .attr("stroke-dashoffset", totalLength);
})

var points = svg.selectAll(".point")
        .data(data)
      .enter().append("svg:circle")
         .attr("class","point")
         .attr("stroke", "steelblue")
         .attr("fill", function(d, i) { return "steelblue" })
         .attr("cx", function(d, i) { return x(i); })
         .attr("cy", function(d, i) { return (-1 * y(d))+ h + 18; })
         .attr("r", function(d, i) { return 5 })
         .style("opacity", 1)
         .on('click', function(p){
           console.log('clicked! - ' + p );
         })
        .on("mouseover", function(d) {
          d3.select(this).attr("r", 8).style("fill", "red").attr("stroke", "red");
        })
        .on("mouseout", function(d) {
          d3.select(this).attr("r", 5).style("fill", "steelblue").attr("stroke", "steelblue");
        });

svg.append("text")
        .attr("x", (w / 2))             
        .attr("y", h-25)
        .attr("text-anchor", "middle")  
        .style("font-size", "13px") 
        .style("text-decoration", "bold") 
        .style("font-weight", "bold") 
        .text("Daily Tasks Completed");

// svg.selectAll(".xLabel")
//     .data(x.ticks(5))
//     .enter().append("svg:text")
//     .attr("class", "xLabel")
//     .text(String)
//     .attr("x", function(d) { return x(d)})
//     .attr("y", function(d) { return (-1 * y(d))+ h + 18; })
//     .attr("text-anchor", "middle")
 


// svg.selectAll(".yLabel")
//     .data(y.ticks(4))
//     .enter().append("svg:text")
//     .attr("class", "yLabel")
//     .text(String)
//     .attr("x", 0)
//     .attr("y", function(d) { return (-1 * y(d))+ h + 18; })
//     .attr("text-anchor", "right")
//     .attr("dy", 4)

// svg.selectAll(".xTicks")
//     .data(x.ticks(5))
//     .enter().append("svg:line")
//     .attr("class", "xTicks")
//     .attr("x1", function(d) { return x(d)})
//     .attr("y", function(d) { return (-1 * y(d)) })
//     .attr("x2", function(d) { return x(d)})
//     .attr("y2", -1 * y(-0.3))
 
// svg.selectAll(".yTicks")
//     .data(y.ticks(4))
//     .enter().append("svg:line")
//     .attr("class", "yTicks")
//     .attr("y1", function(d) { return (-1 * y(d))+ h + 18; })
//     .attr("x1", x(-0.3))
//     .attr("y2", function(d) { return (-1 * y(d))+ h + 18; })
//     .attr("x2", x(0))