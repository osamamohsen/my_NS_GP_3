<script src="http://d3js.org/d3.v3.min.js"></script>

<div id="pie-chart"></div>
<script>
var data = [23,34,54,12,13,32];

var width = 300,
    height = 300,
    margin = {top:10,right:10,bottom:10,left:10},
    svg_width = width + margin.left + margin.right,
    svg_height = height + margin.top + margin.bottom;

var svg = d3.select("#pie-chart").append("svg")
    .attr({
      width: svg_width,
      height: svg_height
    });

var pie_g = svg.append("g")
    .attr({
      transform: "translate("+svg_width/2+","+svg_height/2+")"
    });

var pie_generator = d3.svg.arc()
    .innerRadius(75)
    .outerRadius(150);

var angle_layout = d3.layout.pie()
    .value(function(d){return d;});

var color_scale = d3.scale.category10(); 

pie_g.selectAll("path")
    .data(angle_layout(data))
    .enter()
    .append("path")
    .attr({
      d: pie_generator,
      fill: function(d,i){return color_scale(i);}
    });

//添加文字
pie_g.selectAll("text")
  .data(angle_layout(data))
  .enter()
  .append("text")
  .text(function(d,i){return d.data })
  .attr({
    transform: function(d){return "translate("+pie_generator.centroid(d)+")";},
    "text-anchor": "middle"
  });
</script>