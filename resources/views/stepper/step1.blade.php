@extends('layout')
@section('contenido')

        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Cargando...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Saltar al contenido</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page bg-dark light-content" id="top">
            
            
        <main id="main">    
            
                <!-- Home Section -->
                <section class="small-section bg-dark-alfa-50 bg-scroll light-content" style="background-color: #32a8a6" id="home">
                    <div class="container relative">
                    
                        <div class="row">
                            
                            <div class="col-md-8">
                                <div class="wow fadeInUpShort" data-wow-delay=".1s">
                                    <h1 class="hs-line-7 mb-20 mb-xs-10">Paso 1</h1>
                                </div>
                                <div class="wow fadeInUpShort" data-wow-delay=".2s">
                                    <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                                        Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-30 wow fadeInUpShort" data-wow-delay=".1s">
                                <div class="mod-breadcrumbs text-end">
                                    <a href="#">Home</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<a href="#">Elements</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span>Forms</span>
                                </div>                                
                            </div>
                            
                        </div>
                    
                    </div>
                </section>
                <!-- End Home Section -->
                
                
                <!-- Section -->
                <section class="page-section bg-dark light-content">
                    <div class="container relative">
                        
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">Datos personales</h2>
                        </div>
                        
                        <!-- Row -->
                        <div class="row">
                            
                            <!-- Col -->
                            
                            <div class="col-sm-4 mb-40">
                                
                                <!-- Form -->
                                <form method="post" action="#" id="form" class="form">
                                    
                                    <h3>Informacion personal basica</h3>
                                    <div class="mb-20 mb-md-10">
                                        <!-- Name -->
                                        <label for="name">Nombre completo</label>
                                        <input type="text" autocomplete="off" name="name" id="name" class="input-md round form-control" maxlength="100">
                                    </div>

                                    <div class="mb-20 mb-md-10">
                                        <!-- Surname -->
                                        <label for="surname">Apellido</label>
                                        <input type="text" autocomplete="off" name="surname" id="surname" class="input-md round form-control" maxlength="100">
                                    </div>

                                    <div class="mb-20 mb-md-10">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <!-- Date-->
                                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="input-md round form-control">
                                    </div>

                                    <div class="mb-20 mb-md-10">
                                        <label for="adress">Direccion</label>
                                        <!-- Date-->
                                        <input type="text" autocomplete="off" name="adress" id="adress" class="input-md round form-control" maxlength="100">
                                    </div>
                                                                
                                </form>
    							<!-- End Form -->
                                
                            </div>
                            
                            <!-- End Col -->
                            
                            <!-- Col -->
                            
                            <div class="col-sm-4 mb-40">
                                
                                <h3>Informacion de Contacto</h3>
                                <div class="mb-20 mb-md-10">
                                    <!-- Email -->
                                    <label for="email">Email</label>
                                    <input type="email" autocomplete="off" name="email" id="email" class="input-md round form-control" maxlength="100">
                                </div>    
                                

                                <div class="mb-20 mb-md-10">
                                    <!-- Phone -->
                                    <label for="phone">Telefono</label>
                                    <input type="text" name="phone" id="phone" class="input-md round form-control" maxlength="100">
                                </div>
                                
                                <br>
                                <div class="mb-20 mb-md-10">
                                    <label style="font-size: medium" for="imagen">Imagen <small style="color: #32a8a6">*opcional</small></label>
                                    <br>
                                    <input type="file" id="imagen" name="imagen">
                                    
                                </div>
                            </div>
                            
                            <!-- End Col -->
                            
                            <!-- Col -->
                            <div style="padding-left:20px ;background-image: url('https://cdn.pixabay.com/photo/2017/07/25/14/54/rain-2538429_960_720.jpg')" class="col-sm-4 mb-40"></div>
                            <!-- End Col -->
                            
                        </div>
                        <!-- End Row -->
                        
                    </div>
                </section>
                <!-- End Section -->
                
            </main>
            
            
        
        </div>
        <!-- End Page Wrap -->
        
@endsection