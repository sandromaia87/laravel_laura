<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $championship->name }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <form class="card" action="{{ route('date_championship.store') }}" method="POST">
          @csrf
          <div class="card-header">
            <h3 class="card-title">Data do Campeonato</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Data</label>
              <div>
                <input type="date" class="form-control" id="data" name="data">
                <input type="hidden" class="form-control" id="idchamps" name="idchamps" value="{{ $championship->id }}">
                <small class="form-hint">Esta data estará visível para os participantes</small>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Horário</label>
              <div>
                <input type="time" step="1" class="form-control" id="hora" name="hora">
                <small class="form-hint">Este horário estará visível para os participantes</small>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="pointer-events-auto rounded-md bg-indigo-600 py-2 px-3 text-[0.8125rem] font-semibold leading-5 text-white hover:bg-indigo-500 ml-4 btn btn-primary">Vincular data</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</x-app-layout>