
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ asset('css/HomeStyles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profileStyles.css') }}">
 
    <title>Profile</title>
  </head>
  <!--BODY STARTS -->


  <body>
  @extends('layouts.layout')
  @section('content')

    <div class="container">
        <div class="main-body">
        

              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>

              <!--Image Uploaded here -->
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        @if ($user->prof_image != null)
                          <img class="profilePicture" src="{{ asset('images/Profile Pictures/'. $user->prof_image) }}" alt="Admin">  
                        @else
                          <img class="profilePicture" src="{{ asset('images/Profile Pictures/dummy-image2.png') }}" alt="Admin">
                        @endif
                        
                        <div class="mt-3">
                          <h4>{{ $user->name }}</h4>
   
                          <!--MODAL START-->
                          <!--MODAL START-->
                          <!--MODAL START-->
                          <!--MODAL START-->
                          <!--MODAL START-->

                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDiscount">Change picture</button>
                          
                              <!--Modal: modalDiscount-->
                              <div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true" data-backdrop="true">
                                <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
                                  <!--Content-->
                                    <div class="modal-content">
                                        <div class="upload">
                                            <div class="upload-files">
                                                <div class="modal-header">
                                                    <header>
                                                        <p>
                                                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                        <span class="up">NSU</span>
                                                        <span class="load">CLUB</span>
                                                        </p>
                                                    </header>
                                            
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" class="white-text">&times;</span>
                                                        </button>
                                                    </div>
                                            
                                                    <!--Body Of Modal-->
                                                    <div class="modal-body">

                                                    <form action="/profile/{{ $user->id }}/update_image" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')  

                                                         <div class="row">
                                                             <div class="col-2">
                                                             <p></p>
                                                             <p class="text-center">
                                                                 <i class="fas fa-gift fa-4x"></i>
                                                             </p>
                                                         </div>

                                                             <div class="body" id="drop">
                                                                 <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
                                                                 <p class="pointer-none"><b>Drag and drop</b> files here <br /> or <a href="" id="triggerFile">browse</a> to begin the upload</p>
                                                                     <input type="file" name="prof_image">
                                                             </div>
                    
                                                         </div>
                                                         </div>
                                        
                                                         <!--Footer-->
                                                         <div class="modal-footer flex-center">
                                                             <footer>


                                                                 <div class="divider">
                                                                 <span><AR>Photo</AR></span>
                                                                 </div>
                                                                 <div class="list-files">
                                                        
                                                                 </div>
                                                                 <!--   Photo Upload button  -->
                                                                 <!--   Photo Upload button  -->
                                                                 <!--   Photo Upload button  -->
                                                                     <button class="importar" type="submit">UPDATE PHOTO</button>

                                                             </footer>
                                                         </div>
                                                    </form>
                                            </div>
                                        </div>
                                  </div>
                                  <!--/.Content-->
                                </div>
                            </div>
                              <!--MODAL END-->
                              <!--MODAL END-->
                              <!--MODAL END-->
                              <!--MODAL END-->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!--USER INFO-->
                <!--USER INFO-->
                <!--USER INFO-->
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NSU ID</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $user->nsu_id }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $user->name }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $user->email }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $user->phone_num }}
                        </div>
                      </div>
                    
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                            <!--   EDIT MODAL START  -->
                            <!--   EDIT MODAL START-->

                              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalCart">Edit</button>

                              <!-- Modal: modalCart -->
                              <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">

                                      
                                      <h4 class="modal-title" id="myModalLabel">Edit Information</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">

                                      <form action="/profile/{{ $user->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <div class="form-group">
                                             <label for="exampleFormControlSelect1">NSU ID</label>
                                             <input class="form-control" type="text" name="nsu_id" value="{{ $user->nsu_id }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="exampleFormControlSelect1">Full Name</label>
                                             <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="exampleFormControlInput1">Email address</label>
                                             <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{ $user->email }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="exampleFormControlSelect1">Phone</label>
                                             <input class="form-control" type="text" name="phone_num" value="{{ $user->phone_num }}">
                                           </div>

                                      
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                      <button class="btn btn-outline-info" data-dismiss="modal">Close</button>
                                      <button class="btn btn-info" type="submit">Submit</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- Modal: modalCart -->

                            
                             <!--   EDIT MODAL END -->
                             <!--   EDIT MODAL END -->  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
                  <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Events Following</i></h6>

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Clubs Following</i></h6>

                        </div>
                      </div>
                    </div>
                  </div>
    
            </div>
        </div>

    @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/profileScript.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>