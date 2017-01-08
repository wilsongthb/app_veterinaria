@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ayuda</h1>
    <h2>Ciclo estral y celo en vacas</h2>
    <p><strong>Reproducción animal</strong>: Ciclo estral en bovinos</p>
    <p><em>Las vacas son hembras poliestricas típicas, es decir, presentan su ciclo estral durante todo el año. El ciclo estral de las vacas se repite cada 21 días,  el celo dura de 6 a 30 horas y la parte más fértil del celo es la segunda mitad del celo.</em></p>

    <div id="content_body">
    <p>Las vacas son hembras poliestricas típicas, es decir,&nbsp;presentan su ciclo estral durante todo el año.</p> <p>La madurez fisiológica o pubertad habilita al animal para la producción de gametos, de tal manera que una hembra que llega a la pubertad está fisiológicamente en capacidad de reproducirse, sin embargo, no debe hacerlo hasta tanto no haya alcanzado la madurez zootécnica, es decir, el peso y edad propicios según la raza. </p> <p>Muchos animales alcanzan la pubertad sin estar en la condición corporal ideal para sobrellevar con éxito la monta o servicio, la gestación, el parto y la lactancia.</p> <p>El ciclo estral de las vacas se repite cada 21 días, &nbsp;el celo dura de 6 a 30 horas y la parte más fértil del celo es la segunda mitad del celo.</p> <p>En las vacas el celo presenta cuatro fases o períodos:</p> <ol> <li><span style="font-weight: bold;">Proestro</span>: Tiene una duración de 3 a 4 días.&nbsp; Aquí se inicia la regresión del cuerpo luteo y empieza la secreción de limo.</li> <li><span style="font-weight: bold;">Estro o celo</span>: Abunda el limo claro y vistoso, la hembra se deja montar del macho y se presentan los signos característicos del celo.</li> <li><span style="font-weight: bold;">Metaesto</span>: Se inicia la formación del cuerpo luteo, la hembra rechaza al macho y disminuye el flujo de limo.</li> <li><span style="font-weight: bold;">Diestro</span>: El cuerpo lúteo completa su desarrollo y el utero se prepara para recibir al embrión, en caso de no presentar preñez se repite el ciclo.</li> </ol><p>Para mayor información revisar: <a href="http://mundo-pecuario.com/tema167/pubertad_animales/ciclo_estral-821.html">El ciclo estral en los animales</a></p>
    </div>
    <a href="http://mundo-pecuario.com/tema252/reproduccion_bovinos/ciclo_estral_bovinos-1497.html">fuente</a>
    <h3>README.MD</h3>
</div>
<pre class="container">
{{ file_get_contents('../readme.md') }}
</pre>
@endsection