//add list of word/name
var a = ["Rakib","Raju","Shakil","Mamun" ];
console.log(a);

//add work/name by last
a.push("Jakir");
console.log(a);

//remove work/name by last
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


var a ="This is <br/>";
var b ="Our Country";
var c =a.concat(b)
document.write(c);


