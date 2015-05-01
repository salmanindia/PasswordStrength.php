<html>
<head>
<style>
#passwordStrength{  height:10px;  display:block;  float:left;}
.strength0{ width:250px;  background:#cccccc;}
.strength1{ width:50px; background:#ff0000;}
.strength2{ width:100px;    background:#ff5f5f;}
.strength3{ width:150px;  background:#56e500;}
.strength4{ background:#4dcd00; width:200px;}
.strength5{ background:#399800; width:250px;}
</style>

<script>
function passwordStrength(password)
{ var desc = new Array();
desc[0]="Very Weak"; desc[1]="Weak"; desc[2]="Better"; desc[3] = "Medium"; desc[4] = "Strong";desc[5]= "Strongest";
var score   = 0;
  //if password bigger than 6 give 1 point
  if (password.length > 6) score++;

  //if password has both lower and uppercase characters give 1 point  
  if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

  //if password has at least one number give 1 point
  if (password.match(/\d+/)) score++;

  //if password has at least one special caracther give 1 point
  if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

  //if password bigger than 12 give another 1 point
  if (password.length > 12) score++;

   document.getElementById("passwordDescription").innerHTML = desc[score];
   document.getElementById("passwordDescription").className = "strength" + score;
}
</script>
</head>
<body>

    <p>Password testing<input type="password" name="password"  onkeyup="passwordStrength(this.value)"/></p>
    <p>Confirm Password<input type="password" name="confirm" /></p>
    <p><div id="passwordDescription" class="strength0">Password not entered</div></p>

</body>
</html>
