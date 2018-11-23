<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.pn')}}g">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('img/sidebar-2.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="libro">
              <i class="material-icons">library_books</i>
              <p>Libros</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="estudiante">
              <i class="material-icons">school</i>
              <p>Estudiante</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="empleado">
              <i class="material-icons">person</i>
              <p>Empleado</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="prestamo">
              <i class="material-icons">local_library</i>
              <p>Préstamo</p>
            </a>
          </li>
          
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Libros</h4>
                  </div>
                  <div class="content">
                    <div class="row">
                      <div class="col col-sm-12">
                        {{-- <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-notebook"></i> Crear Libro</a> --}}
                      </div>
                      <div class="col col-sm-12" id="form0">
                        <hr>
                        <form method="POST" action="{{route('libroCrear')}}" accept-charset="UTF-8">
                          {{ csrf_field() }}
                          <div class="form-group col-md-4">
                            <label for="NombreLibro">Nombre del libro</label>
                            <input class="form-control" placeholder="Nombre del libro" required name="nombreLibro" type="text" id="NombreLibro">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="Editorial">Editorial</label>
                            <input class="form-control capitalaze" placeholder="Editorial" required name="editorial" type="text" id="Editorial">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="Año">Año</label>
                            <input class="form-control" placeholder="Año" required name="año" type="YEAR" id="Año">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="Ubicacion">Ubicación de la biblioteca</label>
                            <input class="form-control" placeholder="Ubicacion" required name="ubicacion" type="text" id="Ubicacion">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="Autor">Autor</label>
                            <input class="form-control" placeholder="Autor" required name="autor" type="text" id="Autor">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="Tipo">Tipo</label>
                            <select class="form-control" name="Tipo" required>
                              <option value="">Seleccione una opcion</option>
                              @foreach ($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="AreaConocimiento">Area de conocimiento</label>
                            <input class="form-control" placeholder="AreaConocimiento" required name="AreaConocimiento" type="text" id="AreaConocimiento">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="DiasPrestamo">Días de préstamo</label>
                            <input class="form-control" placeholder="Días de préstamo" required name="diasP" type="number" id="DiasPrestamo">
                          </div>
                          <div class="form-group col-md-12">
                            <button class="btn btn-success" type="submit"><i class="fa  fa-upload"></i> Crear</button>
                          </div>
                        </form>
                      </div>
                      {{-- <hr class="col-md-12">
                      @if ($libro->count() > 0)
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Autor</th>
                              <th>Dias prestamo</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($libro as $libro)
                              <tr class="odd gradeX">
                                <td>{{$libro->nombre}}</td>
                                <td>{{$libro->autor}}</td>
                                <td>{{$libro->diasP}}</td>
                                <td class="center">
                                  <a title="Editar" class="btn btn-warning" role="button" data-toggle="collapse" href="#form{{$libro->id}}" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-pen" aria-hidden="true"></i></a>
                                  <a title="Eliminar" href="{{route('libroBorrar',$libro->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger"><i class="pe-7s-close" aria-hidden="true"></i></a>
                                </td>
                              </tr>
                              <tr class="odd gradeX collapse"  id="form{{$libro->id}}">
                                <td COLSPAN=8>
                                  <form method="POST" action="{{route('libroEditar',$libro->id)}}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group col-md-4">
                                      <label for="nombreLibro">Nombre del libro</label>
                                      <input value="{{$libro->nombre}}" class="form-control" placeholder="Nombre del libro" required name="nombreLibro" type="text" id="NombreLibro">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="editorial">Editorial</label>
                                      <input value="{{$libro->editorial}}" class="form-control capitalaze" placeholder="Editorial" required name="editorial" type="text" id="Editorial">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="año">Año</label>
                                      <input value="{{$libro->año}}" class="form-control" placeholder="Año" required name="año" type="date" id="Año">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="ubicacion">Ubicación de la biblioteca</label>
                                      <input value="{{$libro->UbicacionBiblioteca}}" class="form-control" placeholder="Ubicacion" required name="ubicacion" type="text" id="Ubicacion">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="autor">Autor</label>
                                      <input value="{{$libro->Autor}}" class="form-control" placeholder="Autor" required name="autor" type="text" id="Autor">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="Tipo">Tipo</label>
                                      <select class="form-control" name="Tipo" required>
                                        <option value="">Seleccione una opcion</option>
                                        @foreach ($tipos as $tipo)
                                          <option {{($tipo->id == $libro->id_tipo) ? 'selected' : ''}} value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="AreaConocimiento">Area de conocimiento</label>
                                      <input value="{{$libro->AreaConocimineto}}" class="form-control" placeholder="AreaConocimiento" required name="AreaConocimiento" type="text" id="AreaConocimiento">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="diasP">Días de préstamo</label>
                                      <input value="{{$libro->diasP}}" class="form-control" placeholder="Días de préstamo" required name="diasP" type="number" id="DiasPrestamo">
                                    </div>
                                    <div class="form-group col-md-12">
                                      <button class="btn btn-warning" type="submit"><i class="pe-7s-pen"></i> Editar</button>
                                    </div>
                                  </form>
                                </td>
                              </tr>
                              <tr class="odd gradeX"></tr>
                            @endforeach
                          </tbody>
                        </table>
                        {!!$libro->render()!!}
                      @else
                        <div class="alert alert-info col-md-12">
                          <span>No hay planes creados</span>
                        </div>
                      @endif --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </div>


      
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('img/sidebar-1.jpg')}}" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('img/sidebar-2.jpg')}}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('img/sidebar-3.jpg')}}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('img/sidebar-4.jpg')}}" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  {{-- <!--   Core JS Files   -->
  <script src="assetjs/core/jquery.min.js"></script>
  <script src="assetjs/core/popper.min.js"></script>
  <script src="assetjs/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assetjs/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assetjs/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assetjs/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assetjs/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assetdemo/demo.js"></script> --}}
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>