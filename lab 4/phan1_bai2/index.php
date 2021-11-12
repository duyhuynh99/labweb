<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>1710779</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
      .container{
        width: 1600px;
        }

      .left{
        width: 200px;
        float: left;
        text-align: left;

        }

      .right{
        width: 1300px;
        float: left;
        text-align: center;

        }

      form {
                border: 2px solid #80808000;
                height: 370px;
                width:  500px;
                margin:auto;
                align-items: left;
                padding-left: 15px;
                padding-right: 15px;
                position: relative;
                border-radius: 30px;
                box-shadow: 0px 0px 14px 0px grey;
                background-color: white;
            }

      #baby{
        width: 30%;
      }
  </style>
<script type="text/javascript">
  function xoaCookie(cname) {
    var result = confirm('Are you sure to delete cookie name: '+cname);
    if(result)
    {
      var d = new Date();
      d.setTime(d.getTime()-1);
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=;" + expires;
      location.reload();
    }
  }
    function suaCookie(cname) {
    var newvl = prompt("Add new value for cookie "+cname+" : ");
    updateCookie(cname,newvl);
  }
  function setCookie() {
    var cname =  document.getElementById("tencookie").value;
    var exdays = document.getElementById("day").value;
    var cvalue = document.getElementById("value").value;
    if (exdays.length == 0) exdays = 365;
    if (cname.length == 0) alert('Please input name!');
    else
    if (cvalue.length == 0) alert('Please input value!');
    else
    if (isNaN(exdays)) alert('Timespan of cookie is integer!');
    else
    
   {
    var d = new Date();
    d.setTime(d.getTime() + exdays*1000*60*60*24);
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires;
    alert('Add new Cookie name complete: '+cname);
  }

  }
  function updateCookie(cname,cvalue) {
    exdays = 365;
    if (cvalue.length == 0) alert('Please input new value!');
    else
   {
    var d = new Date();
    d.setTime(d.getTime() + exdays*1000*60*60*24);
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires;
    alert('Update Cookie name complete: '+cname);
    location.reload();

  }

  }
  function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
  }

</script>
</head>

<body>

  <div class="container">
      <div class="left">
        <form onsubmit="setCookie()">
          <h2>Add Cookie: </h2>

          <div class="mb-3">
            <label for="cookiesname" class="form-label">Name of cookie:</label>
            <input type="name" class="form-control" id="tencookie" >
          </div>
          <div class="mb-3">
            <label for="Value" class="form-label">Value:</label>
            <input type="name" class="form-control" id="value">
          </div>

          <div class="mb-3">
            <label for="day" class="form-label">Timelife (default 365 days):</label>
            <input type="day" class="form-control" id="day">
          </div>

          <button type="submit" class="btn btn-info" name="submit" id="baby" value="Add" >Add</button>

        </form>
      </div>

      <div class="right">
      <br><br>
        <table class="table table-bordered" >
          <tr class="table-dark">
            <th>Cookie Name</th>
            <th>Value</th>
            <th colspan="2">Options</th>
          </tr>
        <script>
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i < ca.length; i++) {
            ca[i] = ca[i].split('=');
            var a = ca[i][0];
            var b = ca[i][1];
            var c = "xoaCookie('"+a.trim()+"')";
            var d = "suaCookie('"+a.trim()+"')";
            document.write('<tr>');
            document.write('<td class=table-info>'+a+ '</td><td class=table-info> ' +b+ '</td>');
            document.write("<td class=table-danger><button type=button class=btn btn-danger id=xoacookie onclick ="+c+">Delete</button></td>");
            document.write("<td class=table-success><button type=button class=btn btn-danger id=suacookie onclick ="+d+">Update</button></td>");
            document.write('</tr>');
          }
        </script>

        </table>

      </div>

  </div>
</body>

</html>
