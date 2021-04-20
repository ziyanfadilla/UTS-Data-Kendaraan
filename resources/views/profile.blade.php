<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
      <div class="card p-3">
          <div class="d-flex align-items-center">
              <div class="image"> <img src="{{ asset('img1.jpeg') }}" class="rounded" width="155" height="70%"> </div>
              <div class="ml-3 w-100">
                  <h4 class="mb-0 mt-0">Ziyan Fadilla Saporette</h4> <span>Politeknik Harapan Bersama</span>
                  <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                      <div class="d-flex flex-column"> <span class="articles">Kelas</span> <span class="number1">6B</span> </div>
                      <div class="d-flex flex-column"> <span class="followers">NIM</span> <span class="number2">18090058</span> </div>
                  </div>
                  <div class="button mt-2 d-flex flex-row align-items-center"> 
                      <button class="btn btn-sm btn-outline-primary w-100" onclick="window.location.href='https://www.instagram.com/zynfadilla/'">Instagram</button> 
                    <button class="btn btn-sm btn-primary w-100 ml-2">Youtube</button>
                    <button class="btn btn-sm btn-outline-primary w-100 ml-2" onclick="window.location.href='{{route('kendaraan.index')}}'">Go To aplikasi</button> 
                </div>
              </div>
          </div>
      </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
