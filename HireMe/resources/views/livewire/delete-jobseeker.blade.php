<div>
    <div class="flex flex-col mt-8 mx-10">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Title</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
    
                    <tbody class="bg-white">
                        @foreach ($all as $jobseeker ) 
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="{{ asset('storage/uploads/' . $jobseeker->image) }}"
                                            alt="" />
                                    </div>
    
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $jobseeker->user->name }}</div>
                                        <div class="text-sm leading-5 text-gray-500">{{ $jobseeker->user->email }}</div>
                                    </div>
                                </div>
                            </td>
    
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $jobseeker->post }}</div>
                                <div class="text-sm leading-5 text-gray-500">{{ $jobseeker->title }}</div>
                            </td>
    
                            
    
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                Jobseeker</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    @unless($jobseeker->trashed())
                                    <button  wire:click="deleteJobseeker({{ $jobseeker->id }})"
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Archive</button>
                               
                                        @endunless
                                        <button href="#" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">unarchive</button>
                                </td>      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>       
</div>
