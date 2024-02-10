<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #8e2d2da1;">
    <div class="flex justify-center items-center w-screen h-screen bg-white">
        <!-- COMPONENT CODE -->
        <div class="container mx-auto my-4 px-4 lg:px-20">

            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                <div class="flex">
                    <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
                </div>
                <form action="{{ route('company.store') }}" class="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <div>
                             <input type="file" name="image" accept="image/*" value="{{ old('image') }}" 
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="file" placeholder="Logo*" />
                        @error('image')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                        </div>
                        <div>
                             <input name="slogan" value="{{ old('slogan') }}"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Slogan*" />
                            @error('slogan')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                        </div>
                       <div>
                         <input name="industry" value="{{ old('industry') }}"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Industry*" />
                            @error('industry')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror

                       </div>
                       <div>
                        <input name="phone" value="{{ old('phone') }}"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Phone*" />
                            @error('phone')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                       </div>
                       
                        

                    </div>
                    <div class="my-4">
                        <textarea placeholder="Description*" value="" name="description"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                   
                        </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button type="submit" name="submit"
                            class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            {{-- <div
				class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl">
				<div class="flex flex-col text-white">
					<h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
					<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
						tincidunt arcu diam,
						eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
					</p>

					<div class="flex my-4 w-2/3 lg:w-1/2">
						<div class="flex flex-col">
							<i class="fas fa-map-marker-alt pt-2 pr-2" />
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl">Main Office</h2>
              <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
            </div>
          </div>
          
          <div class="flex my-4 w-2/3 lg:w-1/2">
            <div class="flex flex-col">
              <i class="fas fa-phone-alt pt-2 pr-2" />
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl">Call Us</h2>
              <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
              <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
            </div>
          </div>
          
          <div class="flex my-4 w-2/3 lg:w-1/2">
            <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
              <i class="fab fa-facebook-f text-blue-900" />
            </a>
            <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
              <i class="fab fa-linkedin-in text-blue-900" />
            </a>
          </div>
        </div>
      </div> --}}
        </div>
        <!-- COMPONENT CODE -->
    </div>

    <!-- BUY ME A PIZZA AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a pizza" href="https://www.buymeacoffee.com/Dekartmc" target="_blank"
                class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://img.icons8.com/emoji/48/000000/pizza-emoji.png" />
            </a>
        </div>
    </div>
</body>

</html>
