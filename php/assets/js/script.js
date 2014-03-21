
function Array_fromList(l) {
     var a= [];
     for (var i= 0; i<l.length; i++)
         a.push(l[i]);
     return a;
 }
document.onload = function() {
 var e= Array_fromList(document.getElementsByClassName("full"));
console.log(e);
 for (var i= 0; i<e.length; i++) {
 	if (i % 2 == 0)
		e[i].classList.add("black");
	console.log(e[i]);
 }

}