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
            <section class="small-section bg-dark-alfa-50 bg-scroll light-content" style="background-color: #32a8a6"
                id="home">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wow fadeInUpShort" data-wow-delay=".1s">
                                <h1 class="hs-line-7 mb-20 mb-xs-10">Paso 3</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Home Section -->


            <!-- Section -->
            <section class="page-section bg-dark light-content">
                <form action="" method="post" action="{{ route('generador.paso3.store') }}">
                    @csrf
                    <div class="container relative">
                        @if ($errors->any())
                            <div style="color: #32a8a6 ;background-color: black" class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">Habilidades y Rasgos</h2>
                        </div>

                        <!-- Row -->
                        <div class="row">

                            <!-- Col -->

                            <div class="col-md-10 mb-40">

                                <!-- Form -->
                                <form method="post" action="{{ route('generador.paso2.store') }}" id="form"
                                    class="form">
                                    @csrf
                                    <div class="container relative">
                                        <!-- Row -->
                                        <div class="row">                                           
                                            <div class="col-sm-4 mb-40">
                                                
                                                <div class="mb-20 mb-md-10">
                                                    <!-- Name -->
                                                    <label for="name">Objetivo Profesional</label>
                                                    <textarea name="objetivo_profesional" id="objetivo_profesional"
                                                        cols="30" rows="5"
                                                        style="resize:none;width: -webkit-fill-available;"></textarea>
                                                    
                                                    <label for="name">Otros Datos de interes</label>
                                                    <textarea name="datos_interes" id="datos_interes"
                                                        cols="30" rows="5"
                                                        style="resize:none;width: -webkit-fill-available;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-40">

                                                
                                                <div class="mb-20 mb-md-10">
                                                    <table style="width:-webkit-fill-available;border-spacing:0 10px;"
                                                        id="Lenguajes">
                                                        <tr>
                                                            <th>Lenguajes que maneja</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr style="padding-bottom: 20em;">
                                                            <td style="padding-bottom: 5px">
                                                                <select style="width: -webkit-fill-available;height: 2rem;"
                                                                    name="lenguajes[0][nombre]" id="lenguajes[0]">
                                                                    <option value="Ingles">Ingles</option>
                                                                    <option value="Espanol">Español</option>
                                                                    <option value="Portuges">Portuges</option>
                                                                    <option value="Frances">Frances</option>
                                                                    <option value="Chino">Chino</option>
                                                                    <option value="Aleman">Aleman</option>
                                                                </select>
                                                            </td>
                                                            <td style="padding-bottom: 5px">
                                                                <button type="button" name="add"
                                                                    id="Agregar_lenguajes_button"
                                                                    style="border-color:#32a8a6 ;color: #32a8a6"
                                                                    class="btn btn-outline-primary">+</button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <table style="width:-webkit-fill-available;border-spacing:0 10px;"
                                                    id="Rasgos">
                                                    <tr>
                                                        <th>Rasgos de personalidad</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr style="padding-bottom: 20em;">
                                                        <td style="padding-bottom: 5px">
                                                            <select style="width: -webkit-fill-available;height: 2rem;"
                                                                name="rasgos[i][nombre]" id="rasgos[i]">
                                                                <option value="Extrovertido">Extrovertido</option>
                                                                <option value="Introvertido">Introvertido</option>
                                                                <option value="Amable">Amable</option>
                                                                <option value="Sensible">Sensible</option>
                                                                <option value="Amistoso">Amistoso</option>
                                                                <option value="Inteligente">Inteligente</option>
                                                            </select>
                                                        </td>
                                                        <td style="padding-bottom: 5px">
                                                            <button type="button" name="add" id="Agregar_Rasgos_button"
                                                                style="border-color:#32a8a6 ;color: #32a8a6"
                                                                class="btn btn-outline-primary">+</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br>
                                            </div>

                                            <h3>Otros Estudios</h3>
                                                <div class="mb-20 mb-md-10">
                                                    <table style="width:-webkit-fill-available;border-spacing:0 10px;"
                                                        id="otros_estudios">
                                                        <tr>
                                                            <th>Otros Estudios</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr style="padding-bottom: 20em;">
                                                            <td style="padding-bottom: 5px">
                                                                <select style="width: -webkit-fill-available;height: 2rem;"
                                                                    name="otros_estudios[0][nombre]" id="otros_estudios[0]">
                                                                    <option value="Python">Python</option>
                                                                    <option value="Excel">Excel</option>
                                                                    <option value="PHP">PHP</option>
                                                                    <option value="Laravel">Laravel</option>
                                                                </select>

                                                            </td>
                                                            <td style="padding-bottom: 5px">
                                                                <button type="button" name="add"
                                                                    id="Agregar_otros_estudios_button"
                                                                    style="border-color:#32a8a6 ;color: #32a8a6"
                                                                    class="btn btn-outline-primary">+</button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <div>
                                <div style="width: 100%;text-align: center">
                                    <button class="btn btn-outline-secondary">Generar CV</button>
                                </div>
                                

                                <a href="{{ route('generador.paso2.create') }}">Volver</a>
                            </div>
                        </div>
                </form>
            </section>
        </main>



    </div>
    <!-- End Page Wrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        $("#Agregar_Rasgos_button").click(function() {
            ++i;
            $("#Rasgos").append(
                '<tr style="padding-bottom: 20rem;"><td style="padding-bottom: 5px"><select style="width: -webkit-fill-available;height: 2rem;" name="rasgos[' +
                i + '][nombre]" id="rasgos[' + i +
                ']"><option value="Extrovertido">Extrovertido</option><option value="Introvertido">Introvertido</option><option value="Amable">Amable</option><option value="Sensible">Sensible</option><option value="Amistoso">Amistoso</option><option value="Inteligente">Inteligente</option></select></td></td><td style="padding-bottom: 5px"><button type="button" class="btn btn-outline-danger remove-input-field">Quitar</button></td></tr>'
            );
        });

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });

        var j = 0;
        $("#Agregar_lenguajes_button").click(function() {
            ++j;
            $("#Lenguajes").append(
                '<tr style="padding-bottom: 20rem;"><td style="padding-bottom: 5px"><select style="width: -webkit-fill-available;height: 2rem;" name="lenguajes[' +
                j + '][nombre]" id="lenguajes[' + j +
                ']"><option value="Ingles">Ingles</option><option value="Espanol">Español</option><option value="Portuges">Portuges</option><option value="Frances">Frances</option><option value="Chino">Chino</option><option value="Aleman">Aleman</option></select></td></td><td style="padding-bottom: 5px"><button type="button" class="btn btn-outline-danger remove-input-field">Quitar</button></td></tr>'
            );
        });

        var k = 0;
        $("#Agregar_otros_estudios_button").click(function() {
            ++k;
            $("#otros_estudios").append(
                '<tr style="padding-bottom: 20rem;"><td style="padding-bottom: 5px"><select style="width: -webkit-fill-available;height: 2rem;" name="otros_estudios[' +
                 k + '][nombre]" id="otros_estudios[' + k +
                 ']"><option value="Python">Python</option><option value="Excel">Excel</option><option value="PHP">PHP</option><option value="Laravel">Laravel</option></select></td></td><td style="padding-bottom: 5px"><button type="button" class="btn btn-outline-danger remove-input-field">Quitar</button></td></tr>'
            );
        }); 

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>

@endsection
