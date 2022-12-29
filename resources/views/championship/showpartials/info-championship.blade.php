<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Informações básicas ') }}
        </h2>
    </header>

    <div class="card">
        <div class="card-status-top bg-blue"></div>
        <div class="ribbon ribbon-start bg-blue">Contato</div>
        <div class="card-body ml-12">
            <h3 class="text-muted ml-12">{{ $championship->email }}</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-status-top bg-blue"></div>
        <div class="ribbon ribbon-start bg-blue">Tipo do Evento</div>
        <div class="card-body ml-12">
            @if ($championship->type == 1)
                <h3 class="text-muted ml-12">Crossfit</h3>
            @elseif ($championship->type == 2)
                <h3 class="text-muted ml-12">Corrida</h3>
            @elseif ($championship->type == 3)
                <h3 class="text-muted ml-12">Futevolei</h3>
            @endif
        </div>
    </div>
</section>
