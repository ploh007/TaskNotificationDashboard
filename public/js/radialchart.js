var div1=d3.select(document.getElementById('div1'));
var div2=d3.select(document.getElementById('div2'));
var div3=d3.select(document.getElementById('div3'));
var div4=d3.select(document.getElementById('div4'));

start();

function onClick1() {
    deselect();
    div1.attr("class","selectedRadial");
}

function onClick2() {
    deselect();
    div2.attr("class","selectedRadial");
}

function onClick3() {
    deselect();
    div3.attr("class","selectedRadial");
}

function labelFunction(val,min,max) {

}

function deselect() {
    div1.attr("class","radial");
    div2.attr("class","radial");
    div3.attr("class","radial");
}

function start() {

    var rp1 = radialProgress(document.getElementById('div1'))
            .label("Outstanding Tasks")
            .onClick(onClick1)
            .diameter(150)
            .value(68)
            .render();

    var rp2 = radialProgress(document.getElementById('div2'))
            .label("Completed Tasks")
            .onClick(onClick2)
            .diameter(150)
            .value(36)
            .render();

    var rp3 = radialProgress(document.getElementById('div3'))
            .label("Daily Tasks Budget")
            .onClick(onClick3)
            .diameter(150)
            .minValue(100)
            .maxValue(200)
            .value(154)
            .render();

}