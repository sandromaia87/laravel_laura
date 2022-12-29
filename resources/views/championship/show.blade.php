<x-app-layout>
    <x-slot name="header">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
              {{ __('Campeonato') }}
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $championship->name }}</h2>
          </div>
          <!-- Page title actions -->
          <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
              <button form="delete-camp" onclick="return confirm('Você tem certeza disso?');" type="submit" class="btn btn-danger btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <line x1="5" y1="12" x2="19" y2="12"></line>
               </svg>
              </button>
              <form method="POST" class="form" id="delete-camp" action="{{ route('championship.destroy', $championship->id) }}">
                @csrf
                @method('DELETE')
              </form>
            </div>
          </div>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
              @include('championship.showpartials.info-championship')
            </div>
          </div>

          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
              @include('championship.showpartials.info-date-championship')
            </div>
          </div>
      </div>
</x-app-layout>