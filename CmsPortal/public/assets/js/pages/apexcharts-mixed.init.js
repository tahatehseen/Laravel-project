function getChartColorsArray(e){if(null!==document.getElementById(e))return e=document.getElementById(e).getAttribute("data-colors"),(e=JSON.parse(e)).map(function(e){var t=e.replace(" ","");return-1===t.indexOf(",")?getComputedStyle(document.documentElement).getPropertyValue(t)||t:2==(e=e.split(",")).length?"rgba("+getComputedStyle(document.documentElement).getPropertyValue(e[0])+","+e[1]+")":t})}var options,chart,chartLineColumnColors=getChartColorsArray("line_column_chart"),chartMultiColors=(chartLineColumnColors&&(options={series:[{name:"Website Blog",type:"column",data:[440,505,414,671,227,413,201,352,752,320,257,160]},{name:"Social Media",type:"line",data:[23,42,35,27,43,22,17,31,22,22,12,16]}],chart:{height:350,type:"line",toolbar:{show:!1}},stroke:{width:[0,4]},title:{text:"Traffic Sources",style:{fontWeight:500}},dataLabels:{enabled:!0,enabledOnSeries:[1]},labels:["01 Jan 2001","02 Jan 2001","03 Jan 2001","04 Jan 2001","05 Jan 2001","06 Jan 2001","07 Jan 2001","08 Jan 2001","09 Jan 2001","10 Jan 2001","11 Jan 2001","12 Jan 2001"],xaxis:{type:"datetime"},yaxis:[{title:{text:"Website Blog",style:{fontWeight:500}}},{opposite:!0,title:{text:"Social Media",style:{fontWeight:500}}}],colors:chartLineColumnColors},(chart=new ApexCharts(document.querySelector("#line_column_chart"),options)).render()),getChartColorsArray("multi_chart")),chartLineAreaColors=(chartMultiColors&&(options={series:[{name:"Income",type:"column",data:[1.4,2,2.5,1.5,2.5,2.8,3.8,4.6]},{name:"Cashflow",type:"column",data:[1.1,3,3.1,4,4.1,4.9,6.5,8.5]},{name:"Revenue",type:"line",data:[20,29,37,36,44,45,50,58]}],chart:{height:350,type:"line",stacked:!1,toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{width:[1,1,4]},title:{text:"XYZ - Stock Analysis (2009 - 2016)",align:"left",offsetX:110,style:{fontWeight:500}},xaxis:{categories:[2009,2010,2011,2012,2013,2014,2015,2016]},yaxis:[{axisTicks:{show:!0},axisBorder:{show:!0,color:"#038edc"},labels:{style:{colors:"#038edc"}},title:{text:"Income (thousand crores)",style:{color:"#038edc",fontWeight:600}},tooltip:{enabled:!0}},{seriesName:"Income",opposite:!0,axisTicks:{show:!0},axisBorder:{show:!0,color:"#038edc"},labels:{style:{colors:"#038edc"}},title:{text:"Operating Cashflow (thousand crores)",style:{color:"#038edc",fontWeight:600}}},{seriesName:"Revenue",opposite:!0,axisTicks:{show:!0},axisBorder:{show:!0,color:"#51d28c"},labels:{style:{colors:"#51d28c"}},title:{text:"Revenue (thousand crores)",style:{color:"#51d28c",fontWeight:600}}}],tooltip:{fixed:{enabled:!0,position:"topLeft",offsetY:30,offsetX:60}},legend:{horizontalAlign:"left",offsetX:40},colors:chartMultiColors},(chart=new ApexCharts(document.querySelector("#multi_chart"),options)).render()),getChartColorsArray("line_area_chart")),chartLineAreaMultiColors=(chartLineAreaColors&&(options={series:[{name:"TEAM A",type:"area",data:[44,55,31,47,31,43,26,41,31,47,33]},{name:"TEAM B",type:"line",data:[55,69,45,61,43,54,37,52,44,61,43]}],chart:{height:350,type:"line",toolbar:{show:!1}},stroke:{curve:"smooth"},fill:{type:"solid",opacity:[.35,1]},labels:["Dec 01","Dec 02","Dec 03","Dec 04","Dec 05","Dec 06","Dec 07","Dec 08","Dec 09 ","Dec 10","Dec 11"],markers:{size:0},yaxis:[{title:{text:"Series A"}},{opposite:!0,title:{text:"Series B"}}],tooltip:{shared:!0,intersect:!1,y:{formatter:function(e){return void 0!==e?e.toFixed(0)+" points":e}}},colors:chartLineAreaColors},(chart=new ApexCharts(document.querySelector("#line_area_chart"),options)).render()),getChartColorsArray("line_area_charts"));chartLineAreaMultiColors&&(options={series:[{name:"TEAM A",type:"column",data:[23,11,22,27,13,22,37,21,44,22,30]},{name:"TEAM B",type:"area",data:[44,55,41,67,22,43,21,41,56,27,43]},{name:"Taha",type:"line",data:[30,25,36,30,45,35,64,52,59,36,39]}],chart:{height:350,type:"line",stacked:!1,toolbar:{show:!1}},stroke:{width:[0,2,5],curve:"smooth"},plotOptions:{bar:{columnWidth:"50%"}},fill:{opacity:[.85,.25,1],gradient:{inverseColors:!1,shade:"light",type:"vertical",opacityFrom:.85,opacityTo:.55,stops:[0,100,100,100]}},labels:["01/01/2003","02/01/2003","03/01/2003","04/01/2003","05/01/2003","06/01/2003","07/01/2003","08/01/2003","09/01/2003","10/01/2003","11/01/2003"],markers:{size:0},xaxis:{type:"datetime"},yaxis:{title:{text:"Points"},min:0},tooltip:{shared:!0,intersect:!1,y:{formatter:function(e){return void 0!==e?e.toFixed(0)+" points":e}}},colors:chartLineAreaMultiColors},(chart=new ApexCharts(document.querySelector("#line_area_charts"),options)).render());