function myFunction(operation){
 var a = parseFloat(document.getElementById("one").value);
 var b = parseFloat(document.getElementById("two").value);
 var kq;
   if(operation === '+'){
    kq = a + b; }
   else if(operation === '-') {
    kq = a - b;}
   else if(operation === '*'){
    kq = a * b;}
   else if(operation === '/'){
    kq = a / b;}

 document.getElementById("ketqua").innerHTML = kq;
}

