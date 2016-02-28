function checkform(){
  var a=document.forms['reg']['NAME'].value;
  var b=document.forms['reg']['USERNAME'].value;
  var c=document.forms['reg']['EMAIL'].value;
  var d=document.forms['reg']['PASSWORD'].value;
  var e=document.forms['reg']['ADDRESS'].value;
  var f=document.forms['reg']['DOB'].value;
  if( (a == null || a == "") && (b == null || b == "") && (c == null || c == "") && (d == null || d == "") && (f == null || f == "")){
    alert ("Please fill in the form");
    return false;
  }
  if (a == null || a == "") {
    alert ("Please enter your name");
    return false;
  }
}
