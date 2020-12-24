<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Task') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50 text-center">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Task') }}
        </h2>
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <!-- <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Ready to dive in?</span>
      <span class="block text-indigo-600">Start your free trial today.</span>
    </h2> -->
    <div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
      <form action="gettask" method="POST">
        @csrf
      <div class="ml-3 inline-flex rounded-md shadow">
          <select name="userid" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                  <option value="">select employee</option>
                  @foreach($data as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
          </select>
      </div>
      <div class="ml-3 inline-flex rounded-md shadow">
      <textarea name="description" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50" placeholder="Enter Task here........"></textarea>
    </div>
      <div class="inline-flex rounded-md shadow">
        <button type="submit" name="submit" value="submit" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
          Assign Task
        </button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--list view-->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <h2 class="text-center">Tasks</h2>
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                S.NO
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Task
              </th>
            </tr>
          </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      @php $i=1;@endphp
      @foreach($dat as $row)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">{{$i++}}
                  </div>
                </div>
               </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">{{$row->name}}
                  </div>
                </div>
               </td>
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0">{{$row->taskdescription}}
                  </div>
                </div>
               </td>
             </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<!--list view-->

</div>
</div>
</div>
</x-app-layout>