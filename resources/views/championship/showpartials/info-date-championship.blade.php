<section>
    <header>
        <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title
                <div class="page-pretitle">
                  Overview
                </div>-->
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __( 'Datas do evento') }}
              </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <a href="{{ route('championship.create') }}" class="btn btn-primary btn-icon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                   </a>
                  <a href="{{ route('championship.create') }}" class="btn btn-primary d-sm-none btn-icon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  </a>
                </div>
              </div>
            </div>
        </div>
    </header>
    <br>
    <div class="card">
        <div class="card-status-start bg-dark"></div>
        <div class="ribbon bg-blue">Tipo do Evento</div>
        <div class="card-body">
            @if ($championship->type == 1)
                <h3 cass="text-muted">Crossfit</h3> 
            @elseif ($championship->type == 2)
                <h3 cass="text-muted">Corrida</h3>
            @elseif ($championship->type == 3)
                <h3 cass="text-muted">Futevolei</h3>
            @endif
        </div>
    </div>
</section>
