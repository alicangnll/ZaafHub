<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Can Gonullu | Vulnerable Web Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="bg-info text-center container">
    <div style="padding:15px;" class="mt-4 bg-secondary">
      <p align="right" style="font-size:200%" class="text-center">Ali Can Gonullu | Vulnerable Web Application</p>
    </div>

    <div style="background-color:#c9c9c9;padding:20px;">
      <h1 align="center">Login</h1>
      <form style="background-color:#afafaf;padding:15px;border-radius:20px 20px 0px 0px;" method="post" action="lvl1.php">
      <input type="text" name="xml" placeholder="Password (9Hz7AuNRykKpd9Lyrm1PFV)" /><br>
      <input type="submit" />
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
  function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}
deleteAllCookies();
</script>
<a class="btn btn-danger mt-2"  name="_button" href='../index.php' style="width:85%;">Home Page</a>
</body>
