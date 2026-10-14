 <!doctype html>
 <html lang="en" class="dark-theme">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Login - Lab ICT</title>

     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet" />
 </head>

 <body class="min-vh-100 d-flex flex-column py-4">
     <main class="container flex-grow-1 d-flex align-items-center">
         <div class="row justify-content-center w-100">
             <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                 <div class="card">

                     <div class="card-body p-4">
                         <h6 class="mb-3 text-uppercase">Login lab ict</h6>
                         <hr />
                         <form action="{{ route('login.submit') }}" method="POST" class="row g-3">
                             @csrf
                             <div class="col-12">
                                 <label for="username" class="form-label">username</label>
                                 <input id="username" name="username" type="text" class="form-control" placeholder="username bebas" required autofocus>
                             </div>
                             <div class="col-12">
                                 <label for="password" class="form-label">Password</label>
                                 <input id="password" name="password" type="password" placeholder="password bebas" class="form-control" required>
                             </div>
                             <!-- <div class="col-6">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Check me out
                     </label>
                 </div>
             </div> -->
                             <!-- <div class="col-6 text-end">
                 <a href="javascript:;">Forgot Password?</a>
             </div> -->
                             <div class="col-12">
                                 <div class="d-grid">
                                     <button type="submit" class="btn btn-primary">Sign in</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </main>
     <footer class="footer text-center mt-auto">
         <div class="footer-text">
             Copyright © 2022. All right reserved. rehan12pplg2.
         </div>
     </footer>
 </body>