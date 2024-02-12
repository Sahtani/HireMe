<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com"></script>
<div class="font-[sans-serif] text-[#333] mt-4 p-4 relative">
    <div class="max-w-md w-full mx-auto relative z-50">
      <div class="flex items-center justify-center mb-8 ">
       <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-40 ">
      </div>
      <div class="border border-gray-300 bg-white rounded-md p-8">
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
            <button type="submit" name="submit" class="w-full py-3 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
              Add Language
            </button>
          </div>
        </form>
      </div>
    </div>
   
  </div>