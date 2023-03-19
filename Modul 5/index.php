<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./custom.css" rel="stylesheet">
    <title>Explore HTML!</title>
  </head>
  <body>
    <nav class="p-3 bg-nav text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-white ">Home</a></li>
              <li><a href="./about.html" class="nav-link px-2 text-light">About</a></li>
            </ul>
          </div>
        </div>
    </nav>
    <header class="header-page bg-gradient">
        <div class="page-header-ui-content pt-10">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="header-title">Hello World!</h1>
                        <p class="header-content mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique quisquam beatae vitae molestiae ipsa maiores totam aliquid maxime numquam ullam, assumenda minima inventore officiis asperiores voluptatum laboriosam, saepe itaque sunt?</p>
                        <a class="btn btn-teal" href="#!" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Click to open modal
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a class="btn btn-link" href="#">Learn More</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block"><img class="img-fluid" src="example.svg" alt="example-image"></div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-white">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>

    <section class="bg-white pt-10">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h2>Example use form using AJAX (POST)</h2>
            </div>
            <div class="row gx-5 z-1">
            <p>Use U:akmal P:1301204188 for success response</p>
              <div id="login-message">

              </div>
              <form id="login-form" method="post">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username">
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password">
                  </div>

                  <button class="btn btn-teal mt-5"  type="submit" id="btn-login">Login</button>
                </div>
              </form>
          </div>
        </div>
    </section>
    <section class="bg-white pt-10">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h2>Example use video (embeded from Youtube)</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-21by9 text-center">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i4OqlArDpxc" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white pt-10 py-10">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h2>Example use table get from server using ajax</h2>
                <button class="btn btn-teal mt-4" class="btn btn-primary" id="get-users">
                            Click to get data
                        </button>
            </div>
            <div class="row gx-5 z-1">
                <div class="col-md-12">
                    <table class="table" id="users-tbl">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Alamat</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Example Object in JS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
            </div>

            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" placeholder="NIM" required>
            </div>

            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="kelas" placeholder="Kelas" required>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="printObject">Print Object To Console</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
          $("#get-users").click(function(e) {
            $.ajax({
              url: 'users.php',
              dataType: 'json',
              success: function(data) {
                let no = 1;
                $.each(data, function(index, user) {
                  var row = '<tr>';
                  row += '<th scope="row">' + no + '</th>';
                  row += '<td>' + user.nama + '</td>';
                  row += '<td>' + user.nim + '</td>';
                  row += '<td>' + user.alamat + '</td>';
                  row += '</tr>';
                  $('#users-tbl tbody').append(row);
                  no++;
                });
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error: ' + textStatus);
              }
            });
          });
          $('#login-form').on('submit', function(event) {
            event.preventDefault();
            console.log($(this));
            $.ajax({
              url: 'login.php',
              type: 'POST',
              dataType: 'json',
              data: $(this).serialize(),
              beforeSend: function() {
                  $('#login-btn').prop('disabled', true);
              },
              success: function(response) {
                  if (response.status == 'success') {
                      $('#login-message').html('<div class="alert alert-success" role="alert">Login berhasil</div>');
                  } else {
                      $('#login-message').html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
                  }
              },
              error: function(jqXHR, textStatus, errorThrown) {
                var errorData = jqXHR.responseJSON;
                $('#login-message').html(`<div class="alert alert-danger" role="alert">${errorData.message}</div>`);
              },
              complete: function() {
                  $('#login-btn').prop('disabled', false);
              }
              });
          });
        });
    </script>
  </body>
</html>