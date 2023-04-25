function hex2a(hex) {
    var str = '';
    for (var i = 0; i < hex.length; i += 2) str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    return str;
}

function validateForm() {
  var username = document.forms["login"]["username"].value;
  var password = document.forms["login"]["password"].value;
  if (username == "admoun_username") {
    if (password == "secret_admoun_password") {
      alert("".concat("Great ! ",hex2a("47726561742c206e6f772074616b65207468697320666c61673a2043696d70726573737b4e337665725f5368356172655f63726564656e7469616c735f773174685f4a6176617363726970747d")));
    }else alert("Incorrect password");
  }else alert("Incorrect username");
  return false;
}
