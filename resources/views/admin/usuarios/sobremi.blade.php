@extends('layouts.app') {{-- heredo todo lo de y me trae todo la q hay y q se este invocando al tocar el esa vista layouts/app.blade.php --}}

{{-- @section se utiliza para modificar el @yield 'title' es el nombre q se le puso al @yield--}}

@include('includes.login-modal')
@section('content')

   <section class="mbr-section mbr-section-hero news" id="news1-7" data-rv-view="14" style="background-color: rgb(255, 255, 255); padding-top: 100px; padding-bottom: 100px;">



    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">


           <h3> El blog </h3>
En 2020 comencé con este blog, el blog surge de mi propia curiosidad, siempre que aprendo algo me gusta apuntarlo para que no se me olvide, tener una referencia por si lo quiero utilizar en un futuro y además para también publicar contenido que no hay en Internet o que no está claro y así compartir, aportar y ayudar a los demás.

Básicamente este blog es mi bloc de notas online y el lugar donde está todo aquello que a mí me gustaría encontrar.
La idea es hacer constantes aportes para que no solo me sirva a mi sino a cualquiera que este interesado en aprender y aportar lo que sabe,
ya que el fin es aprender todo de todos.
<h3>La formación online</h3>
Mi idea es aprender para luego impartir mis conocimientos desde este blog y en la famosa plataforma Udemy.

        Me encanta programar y todo lo relacionado con internet y las nuevas tecnologias crear cosas enseñar a los demas y aprender de los demas constantemente.
He aprendido un monton desde intenet de forma autodidacta y quiero compartirlo con los demas.

       <h3>Los estudios</h3>
Odiaba estudiar cosas que me parecían inútiles, esa es la sensación que llevaba arrastrando años atrás, pese a ello siempre fui un buen alumno, el típico de 7.

Estaba estudiando Comercial, me parecía aburrido, solamente tenía la motivación de acabarlo rápido .

Cuando acabé estudié un año para administracion de empresas y lo dejé, no tenia idea que hacer hasta que un dia me harte de llevar la pc al tecnico y decidi aprender reparacion de pc,
y descubrí mi pasion por la informatica luego de terminar el curso decidí entrar a un ciclo formativo decidiendome por ser analista de sistemas. Fue una buena decisión. A partir de aquí no e podido parar de aprender informatica.


       Luego de terminar mi formacion e estado aprendiedo constantemente de forma autodidacta para desempeñarme en el desarrollo web.
        </div>
    </div>
</div>


</section>



@endsection

@if($errors->any())
  @section('include-login-modal')
  <script src="{{ asset('js/login-modal.js') }}"></script>
  @endsection
@endif