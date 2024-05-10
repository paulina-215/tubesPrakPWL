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

<div class=" flex bg-gray-200 p-4 grid-cols-3 justify-center">
    @php
    $i = 1;
    @endphp

    @foreach ($reseps as $resep)
{{--resep 1--}}
  <div class="card card-compact w-96 bg-base-100 shadow-xl p-2.5 m-3">
    <figure>{{ $resep->gambar}}</figure>
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
            <button type="submit" class="btn btn-primary">Delete</button>
          </div>
          {{-- akhir button Delete --}}

        </div>
       


       {{--akhir resep 1--}}
      </div>
      
  </div>
  {{--akhir resep --}}

  @endforeach
</div>
{{--akhir content--}}
    

</div>
@endsection

