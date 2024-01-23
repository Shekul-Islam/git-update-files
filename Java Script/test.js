//add list of word/name
var a = ["Rakib","Raju","Shakil","Mamun" ];
console.log(a);

//add word/name by last
a.push("Jakir");
console.log(a);

//remove word/name by last
a.pop();
console.log(a);
a.pop(1);
console.log(a);

//remov word/name from first
a.shift();
console.log(a);

//add word/name from first
a.unshift("Tuhin","Shahin");
console.log(a);

//sorting
var a = ["Rakib","Shakil", "Raju", "Mamun" ];
console.log(a);
a.sort();
console.log(a);

var b = ["c","d","t","a,","b"];
b.sort();
console.log(b);
b.reverse();
console.log(b);

var b = ["4","1","5","2,","3"];
b.sort();
console.log(b);
b.reverse();
console.log(b);

var f = [4,1,5,2,3];
f.sort(function(a,b){
    return (a-b);
});
console.log(f);


var a ="This is";
var b ="Our Country";
var c =a.concat(b);
document.write(c);
document.write("<br>");


//add function
function summ () {
    var a = 24;
    var b = 56;
    document.write(a+b);
    document.write("<br>");
    document.write(a-b);
    
}
summ();

document.write("<br>");

function sum (a,b) {
    document.write(a+b);
}
sum(88,12);


document.write("<br>");

function sam (a,b) {
    document.write("total sum: "+(a+b));
}
sam(88,12);

//minus function
document.write("<br>");

function min (a,b) {
    document.write("total sum: "+(a-b));
}
min(88,12);

document.write("<br>");
//multiple function
function mult (x,y) {
    document.write("total mult: "+(x*y));
}
mult (15,5);

document.write("<br>");

function divid (x,y) {
    document.write("total divid: "+(x/y));
}
divid (15,5);

document.write("<br>");


var text = substruction (6,10);
document.write(text);
console.log(text);

function substruction (x,y) {
    return x-y;
}

document.write("<br>")
var a =34;
b=40;
document.write(a+b);

document.write("<br>")
document.write("<br>")
document.write("<br>")
document.write("<br>")




var score = parseInt(prompt("Please enter your score"));


if (score>=80 && score<=100) {
    document.write("A+");
} 
else if (score>=70 && score<=80) {
    document.write("A");
}
else if (score>=60 && score<=70) {
    document.write("A-");
}
else if (score>=50 && score<=60) {
    document.write("B");
}
else if (score>=40 && score<=50) {
    document.write("C");
}
else if (score>=33 && score<=40) {
    document.write("D");
}
else {
    document.write("F");
}