@extends('layouts.layout')

@section('content')

{{--content--}}
<div class=" bg-gray-200 ">
  <h1 class="hero-content flex-col lg:flex-row text-3xl font-extralight">Bagikan resep masakan Anda di Cookpad <br>dan bantu orang lain membuat hidangan lezat!</h1>
</div>

{{--button create--}}

@csrf
<div class="flex bg-gray-200 justify-center">
<button type="submit"  class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg" onclick="location.href='{{ route('create')}}'" >create</button>
</div>
{{-- akhir button create--}}

<div class=" flex bg-gray-200 grid  grid-cols-3 grid-rows-3 justify-center">
    @php
    $i = 1;
    @endphp

    @foreach ($reseps as $resep)
{{--resep 1--}}
  <div class="flex-col card card-compact w-96 bg-base-100 shadow-xl p-2.5 m-3">
  
  @if($resep->image)
  <div style="max-height : 310px; max-weight : 180px; overflow:hidden;">
  <img src="{{ asset('storage/post-image/.$resep->image')}}" alt="">
  </div>
  @endif

        <div class="card-body">
          <h2 class="card-title ">{{ $resep->nama_resep}}!</h2>
        <span class="text-sm text-slate-400">{{ $resep->tanggal }}</span>
          
        
        <div class="flex gap-3 justify-center">
          {{-- button Details--}}

          <div class="card-actions justify-center" data-tip="Detail">
            <button type="submit" class="btn btn-primary">Details</Details></button>
          </div>

          {{-- akhir button Details--}}

          {{-- button Edit --}}
          <div class="card-actions justify-center" data-tip="Edit">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
          {{-- akhir button Edit --}}

          
          {{-- button Delete --}}
          <div class="card-actions justify-center" data-tip="Delete">
            <button type="submit" class="btn btn-primary" onclick="tombol_{{ $i }}.showModal()" >Delete</button>
          </div>
          {{-- akhir button Delete --}}

        </div>
      
       {{--akhir resep 1--}}
       {{-- Modal --}}
    <dialog id="tombol_{{ $i }}" class="modal">
      <div class="modal-box">
        <h3 class="font-bold text-3xl text-center">Done With This Task?</h3>
        <p class="py-4 text-red-400 text-center">You Will Remove <span class="font-bold">"{{ $resep->resep }}"</span> From
          Your List</p>
        <form action="/deleteResep/{{ $resep->id }}" method="POST" class="flex justify-center">
          @method('DELETE')
          @csrf
          <button class="btn btn-sm btn-success" onclick="my_modal_2.showModal()">Done</button>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
    {{-- akhir Modal --}}
    @php
    $i++;
    @endphp
      </div>
      
  </div>
  {{--akhir resep --}}

  @endforeach
</div>
{{--akhir content--}}
    

</div>
@endsection

