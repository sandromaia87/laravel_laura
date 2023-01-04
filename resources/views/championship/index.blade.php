<x-app-layout>
  <x-slot name="header">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title
            <div class="page-pretitle">
              Overview
            </div>-->
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Campeonatos') }}
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="{{ route('championship.create') }}" class="btn btn-primary btn-icon">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
            </a>
            <a href="{{ route('championship.create') }}" class="btn btn-primary d-sm-none btn-icon">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="row row-deck">

            @foreach ($championships as $championship )

            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-header bg-slate-400">
                  <div class="col">
                    <h3 class="card-title">{{ $championship->name}}</h3>
                    <div class="page-pretitle">
                      @if ($championship->type == 1)
                      <h5 class="text-muted">Crossfit</h5>
                      @elseif ($championship->type == 2)
                      <h5 class="text-muted">Corrida</h5>
                      @elseif ($championship->type == 3)
                      <h5 class="text-muted">Futevolei</h5>
                      @endif
                    </div>
                    
                  </div>
                  <div class="card-actions btn-actions">
                    <a href="{{ route('championship.show', $championship->id) }}" class="btn-action">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="2"></circle>
                        <path
                          d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                        </path>
                      </svg>
                    </a>
                    <form method="POST" class="form" action="{{ route('championship.edit', $championship->id) }}">
                      @csrf
                      @method('GET')
                      <button type="submit" class="btn-action" id="{{ $championship->name.$championship->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                          <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                          <path d="M16 5l3 3"></path>
                        </svg>
                      </button>
                    </form>
                    @livewire('confirm-alert', ['champsId' => $championship->id])
                  </div>
                </div>
                <div class="card-body">
                  <div class="card">
                    <div class="card-status-start bg-dark"></div>
                    <div class="ribbon bg-blue">Contato</div>
                    <div class="card-body">
                      <h5 cass="text-muted">{{ $championship->email }}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>