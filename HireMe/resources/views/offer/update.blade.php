@extends('layouts.style')

@section('form')
<div class="max-w-4xl mx-auto mt-10 font-[sans-serif] text-[#333] p-6 border border-bleu shadow bg-white rounded">
    <form action="{{ route('offer.update',$joboffer->id) }}" method="POST" id="offer-form">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-2 gap-y-4 gap-x-8">
            <div class="lg:col-span-1" >
                <label class="text-sm mb-2 block">Title</label>
                <input name="title" type="text" value="{{ $joboffer->title }}"
                    class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500 border-bleu"
                    placeholder="Enter title" />
                @error('title')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type of Contract -->
            <div class="lg:col-span-1">
                <label class="text-sm mb-2 block">Type of Contract</label>
                <select name="type_contrat"
                    class="bg-gray-100   border border-bleu py-3.5 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    <option selected disabled >{{ $joboffer->type_contrat }}</option>
                    <option value="remote">Remote</option>
                    <option value="hybrid">Hybrid</option>
                    <option value="full-time">Full time</option>
                </select>
                @error('type_contrat')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Location -->
            <div class="lg:col-span-2 mt-0">
                <label class="text-sm mb-2 block">Location</label>
                <input name="location" type="text" value="{{ $joboffer->location }}"
                    class="bg-gray-100 w-full border-bleu text-sm px-4 py-3.5 rounded-md outline-blue-500"
                    placeholder="Enter location" />
                @error('location')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label class="text-sm mb-2 block">Description</label>
                <textarea name="desc" id="about"
                    class="pt-2 border border-bleu mt-1 rounded px-4 w-full bg-gray-100" rows="4"
                    placeholder="Enter description">{{ $joboffer->desc }}</textarea>
                @error('desc')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Skills -->
            <div class="md:col-span-2">
                <label class="text-sm mb-2 block">Skills</label>
                <div id="skills-container">
                    <div>
                        {{-- <input name="skills[]" type="text" 
                            class="bg-gray-100 w-full text-sm border-bleu px-4 py-3.5 rounded-md outline-blue-500"
                            placeholder="Enter skill" />
                             @if ($errors->has('skills'))
                        @foreach ($errors->get('skills') as $error)
                            <div class="text-sm text-red-500">{{ $error }}</div>
                        @endforeach
                    @endif --}}
                   
                        @foreach($skills as $skill)
        
                            <input name="skills[]" type="text"  value="{{ $skill->name  }}"
                            class="bg-gray-100 w-full text-sm border-bleu px-4 py-3.5 rounded-md outline-blue-500 mb-2"
                            placeholder="Enter skill" />
                        @endforeach
                  
                    
                    
                        <button type="button" class="remove-skill">Remove</button>
                       
                    </div>
                </div>
                <button type="button" id="add-skill">Add Skill</button>
            </div>

        </div>
        <div class="!mt-10 w-full">
            <button type="submit"
                class="w-full min-w-[150px] py-3 px-4 text-sm font-semibold rounded text-white bg-bleuc hover:bg-bleuc focus:outline-none">
               Update
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('add-skill').addEventListener('click', function () {
        const skillsContainer = document.getElementById('skills-container');
        const newInput = document.createElement('div');
        newInput.innerHTML = `
            <input name="skills[]" type="text"
                class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500"
                placeholder="Enter skill" />
            <button type="button" class="remove-skill">Remove</button>
        `;
        skillsContainer.appendChild(newInput);
    });

    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-skill')) {
            event.target.parentElement.remove();
        }
    });
</script>
@endsection
