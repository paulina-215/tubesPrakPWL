@extends('layouts.layout')

@section('content')
{{--content--}}



<form method="POST" action="/tambahResep" enctype="multipart/form-data" >
@csrf
  <label class=" bg-gray-200 ">
    <h1 class="hero-content flex-col lg:flex-row text-3xl font-extralight">upload resep kamu</h1>
  </label>

  <div tabindex="0" class="collapse collapse-close border border-base-500 bg-base-100 flex-col grid-cols-1 justify-center"> 
    <div class="collapse-title text-xl font-medium ">
   
     
  <label for="nama_resep" >Nama Makanan
  <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="nama_resep" id="nama_resep"/>
  </label>


  <label for="resep">
      <h3>Resep</h3>
      <textarea id="" cols="30" rows="10"  class="input input-bordered w-full max-w-xs text-black-300 " name="resep"></textarea>
  </label>
<br>
    <label for="gambar">
      <h3>gambar</h3>
      <input type="file" name="gambar" id="gambar">
    </label>
  {{-- button add --}}
  <button type="submit" class="btn btn-accent" onclick="location.href='{{ route('create')}}'"  >upload</button>
  {{-- akhir button add --}}
  </div>


</form>


{{--akhir content--}}
@endsection