<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Informações básicas ') }}
        </h2>
    </header>

    <div class="card">
        <div class="card-status-start bg-dark"></div>
        <div class="ribbon bg-blue">Contato</div>
        <div class="card-body">
            <h3 cass="text-muted">{{ $championship->email }}</h3>
        </div>
    </div>
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
