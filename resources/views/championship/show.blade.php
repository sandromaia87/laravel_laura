<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informações do campeonato') }}
        </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $championship->name }}
            </h3>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label required">Nome</label>
                <div>
                  <input type="text" class="form-control" id="name" name="name">
                  <small class="form-hint">Este nome estará visível para os participantes</small>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Tipo</label>
                <div>
                  <select class="form-select" id="type" name="type">
                    <option value="1">Crossfit</option>
                    <option value="2">Corrida</option>
                    <option value="3">Futevolei</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
