<?php include('head.php') ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('https://jessydfaundez.github.io/Prueba-24-04/img/header.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Visualizaciones</h1>
                        <hr class="small">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <?php
              // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
              $csv = array_map('str_getcsv', file('data/vis.csv'));
              // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
              // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
              for($a = 0; $a < $total = count($csv); $a++){?>

              <?php };?>

              <article class="row">
                <hr>
                <div class="col-sm-12">
                  <h3>Combarbalá vs La Serena</h3>
                  <p> <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1040_RC04/embed_loader.js"></script> <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"/m/0cxmyz","geo":"","time":"2017-05-15 2017-06-05"},{"keyword":"/m/045y17","geo":"","time":"2017-05-15 2017-06-05"}],"category":0,"property":""}, {"exploreQuery":"date=2017-05-15%202017-06-05&q=%2Fm%2F0cxmyz,%2Fm%2F045y17","guestPath":"https://trends.google.es:443/trends/embed/"}); </script>
                  </p>

                  <p>Interés en Combarbalá y La Serena desde el 15 de mayo al 5 de junio.</p>

                  <p><a href="https://trends.google.es/trends/explore?date=2017-05-15%202017-06-05&q=%2Fm%2F0cxmyz,%2Fm%2F045y17">Datos</a></p>


                <h3>Combarbalá según TripAdvisor</h3>
                <p><img src="vis/tripadvisor.svg" class="img-responsive"></p>

                <p>Cosas que tiene Combarbalá según las categorías de TripAdvisor</p>

                <p><a href="https://www.tripadvisor.cl/Tourism-g1675374-Combarbala_Coquimbo_Region-Vacations.html">Datos</a></p>

                <h3>Observatorios en Chile</h3>
                <p><img src="vis/observatorios.svg" class="img-responsive"></p>

                <p>Lista de observatorios astronómicos de Chile por región y ciudad.</p>

                <p><a href="http://primerfoton.cl/2016/11/15/observatorios-astronomicos-que-puedes-visitar-en-chile/">Datos</a></p>

              </div>
              </article>

                </div>
            </div>
        </div>
  <?php include('footer.php') ?>
