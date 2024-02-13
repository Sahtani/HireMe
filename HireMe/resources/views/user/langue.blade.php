

@extends('layouts.style')

@section('from')
  
<div class="font-[sans-serif] text-[#333] mt-4 p-4 relative">
  <div class="max-w-md w-full mx-auto relative z-50">
    <div class="flex items-center justify-center mb-8 ">
     <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-40 ">
    </div>
    <div class="border border-gray-300 bg-white rounded-md p-8">
      <a href="{{ route('user.show') }}">
        <div class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 102, 1);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
        </div>
     
    </a>
      <form class="w-full" action="{{ route('user.storelangue') }}" method="POST">
          @csrf
        <div class="space-y-6">
          <div>
            <label class="text-sm mb-2 block">Language</label>
            <div class="relative flex items-center">
              <input name="name" type="text" value="{{ old("name") }}" class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Enter name" />
          </div>
          <div>
              @error('name')
                  <p class="text-sm text-red-500">
                      {{ $message }}
                  </p>
              @enderror
          </div>
          </div>
          <div class="mb-4">
            <label class="text-sm mb-2 block">Level</label>
            <div class="relative flex items-center">
              <input name="level" type="text" value="{{ old("level") }}" class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Enter level" />
             
          </div>
          <div>
              @error('level')
                  <p class="text-sm text-red-500">
                      {{ $message }}
                  </p>
              @enderror
          </div>
          </div>
        </div>
        <div class="!mt-10">
          <button type="submit" name="submit" class="w-full py-3 px-4 text-sm font-semibold rounded text-bleuc bg-bleu hover:bg-bleuc hover:text-white focus:outline-none">
            Add Language
          </button>
        </div>
      </form>
    </div>
  </div>
 
</div>

@endsection

