<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end m-2 p-2">
          <a href="{{ route('admin.tables.create') }}" class="text-white px-4 bg-indigo-500 hover:bg-indigo-700 rounded-lg">New Table</a>
        </div>
        <div class="relative overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          Product name
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Color
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Category
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Price
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          Apple MacBook Pro 17"
                      </th>
                      <td class="px-6 py-4">
                          Sliver
                      </td>
                      <td class="px-6 py-4">
                          Laptop
                      </td>
                      <td class="px-6 py-4">
                          $2999
                      </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          Microsoft Surface Pro
                      </th>
                      <td class="px-6 py-4">
                          White
                      </td>
                      <td class="px-6 py-4">
                          Laptop PC
                      </td>
                      <td class="px-6 py-4">
                          $1999
                      </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          Magic Mouse 2
                      </th>
                      <td class="px-6 py-4">
                          Black
                      </td>
                      <td class="px-6 py-4">
                          Accessories
                      </td>
                      <td class="px-6 py-4">
                          $99
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
  </div>
</x-admin-layout>
