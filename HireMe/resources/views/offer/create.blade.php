@extends('layouts.style')

@section('form')
<div class="max-w-4xl mx-auto mt-10 font-[sans-serif] text-[#333] p-6 border border-bleu shadow bg-white rounded">
    <form action="{{ route('offer.store') }}" method="POST" id="offer-form">
        @csrf
        <div class="grid sm:grid-cols-2 gap-y-7 gap-x-12">
            <!-- Other input fields -->
            <!-- Company Name -->
            <div>
                <label class="text-sm mb-2 block">Company Name</label>
                <input name="company_name" type="text" value="{{ old('company_name') }}"
                    class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500"
                    placeholder="Enter company name" />
                @error('company_name')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Title -->
            <div>
                <label class="text-sm mb-2 block">Title</label>
                <input name="title" type="text" value="{{ old('title') }}"
                    class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500"
                    placeholder="Enter title" />
                @error('title')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type of Contract -->
            <div>
                <label class="text-sm mb-2 block">Type of Contract</label>
                <select name="type_contrat"
                    class="bg-gray-50 border border-gray-600 py-3.5 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Choose a type</option>
                    <option value="remote">Remote</option>
                    <option value="hybrid">Hybrid</option>
                    <option value="full-time">Full time</option>
                </select>
                @error('type_contrat')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Location -->
            <div>
                <label class="text-sm mb-2 block">Location</label>
                <input name="location" type="text" value="{{ old('location') }}"
                    class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500"
                    placeholder="Enter location" />
                @error('location')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label class="text-sm mb-2 block">Description</label>
                <textarea name="desc" id="about"
                    class="pt-2 border mt-1 rounded px-4 w-full bg-gray-50" rows="4"
                    placeholder="Enter description">{{ old('desc') }}</textarea>
                @error('desc')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Skills -->
            <div class="md:col-span-2">
                <label class="text-sm mb-2 block">Skills</label>
                <div id="skills-container">
                    <div>
                        <input name="skills[]" type="text"
                            class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500"
                            placeholder="Enter skill" />
                        <button type="button" class="remove-skill">Remove</button>
                    </div>
                </div>
                <button type="button" id="add-skill">Add Skill</button>
            </div>

        </div>
        <div class="!mt-10 w-full">
            <button type="submit"
                class="w-1/2 min-w-[150px] py-3 px-4 text-sm font-semibold rounded text-white bg-bleuc hover:bg-bleuc focus:outline-none">
                Add
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
