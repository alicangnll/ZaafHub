<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Can Gonullu | Vulnerable Web Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="text-center container">
    <div style="padding:15px;" class="mt-4">
      <p align="right" style="font-size:200%" class="text-center">Ali Can Gonullu | Vulnerable Web Application</p>
    </div>
    <hr></hr>
    <h2>Web Bugs</h2>
    <hr></hr>
    <div class="text-center" style="padding:20px;">
      <a class="btn btn-primary"  name="comexec_button" href='CommandExecution/commandexec.html'>Command Execution</a>
      <a class="btn btn-primary"  name="_button" href='SQL/sqlmainpage.html'>SQL Injection</a>
      <a class="btn btn-primary"  name="_button" href='XSS/xssmainpage.html'>XSS</a>
      <a class="btn btn-primary"  name="_button" href='FileInclusion/fileinc.html'>File Inclusion</a>
      <a class="btn btn-primary"  name="_button" href='CSRF/csrf.html'>CSRF</a>
      <a class="btn btn-primary"  name="_button" href='IDOR/idor.html'>IDOR</a>
      <a class="btn btn-primary"  name="_button" href='XXE/xxe.html'>XXE</a>
      <a class="btn btn-primary"  name="_button" href='PATH/path.html'>Path Traversal</a>
    </div>
    <hr></hr>
    <h2>Program Bugs</h2>
    <hr></hr>
    <div class="text-center" style="padding:20px;">
      <a class="btn btn-primary"  name="comexec_button" href='BufferOverflow/overflow.html'>Buffer Overflow</a>
    </div>
    <a class="btn btn-danger"  name="_button" href='setup.php' style="width:85%;">Setup</a>
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
  </body>