<html>
  <head>
	<title>Want to Know More Information</title>
  <script type="text"/javascript">
    function GatherInfo()
    {
	first = document.getElementById("fname").value;
	last = document.getElementById("lname").value;
	age = parseInt(document.getElementById("age").value);
	phone = parseInt(document.getElementById("pnum").value);
	email = document.getElementById("email").value;
	male = document.getElementById("male").value;
	female = document.getElementById("female").value;
	other = document.getElementById("other").value;
	yes = document.getElementById("yes").value;
	no = document.getElementById("no").value;
	denmark = document.getElementById("denmark").value;
	germany = document.getElementById("germany").value;
	england = document.getElementById("england").value;
	france = document.getElementById("france").value;
	spain = document.getElementById("spain").value;
	italy = document.getElementById("italy").value;
	switzerland = document.getElementById("switzerland").value;
	norway = document.getElementById("norway").value;
	sweden = document.getElementById("sweden").value;
	finland = document.getElementById("finland").value;
	poland = document.getElementById("poland").value;
	scotland = document.getElementById("scotland").value;
	none = document.getElementById("none").value;
	alert(
    }
  </script>
  </head>
  <body>
    First Name: <input type="text" id="fname" /><br />
    Last Name: <input type="text" id="lname" /><br />
    Age: <input type="text" id="age" /><br />
    Phone Number: <input type="text" id="pnum" /><br />
    E-Mail: <input type="text" id="email" /><br />
    Male <input type="radio" id="male" /><br />
    Female <input type="radio" id="female" /><br />
    Other <input type="radio" id="other" /><br />
    Yes <input type="radio" id="yes" /><br />
    No <input type="radio" id="no" /><br />
    Denmark <input type="checkbox" id=denmark /><br>
    Germany <input type="checkbox" id=germany /><br>
    England <input type="checkbox" id=england /><br>
    France <input type="checkbox" id=france /><br>
    Spain <input type="checkbox" id=spain /><br>
    Italy <input type="checkbox" id=italy /><br>
    Switzerland <input type="checkbox" id=switzerland /><br>
    Norway <input type="checkbox" id=norway /><br>
    Sweden <input type="checkbox" id=sweden /><br>
    Finland <input type="checkbox" id=finland /><br>
    Poland <input type="checkbox" id=poland /><br>
    Scotland <input type="checkbox" id=scotland /><br>
    None of the above <input type="checkbox" id=none /><br>
    <input type="button" value="Process" onclick="GatherInfo();" />
  </body>
</html>
