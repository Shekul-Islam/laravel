<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
    @layer utilities {
      .container{
        @apply px-10 mx-auto;
      }
      .btn{
       @apply bg-green-600 text-white rounded py-2 px-4
      }
    }
  </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="flex justify-between" >
        <h2 class="text-red-500">Home</h2>
<a href="/insert" class="btn">Add New Post</a>
        </div>
       @if (@session('success'))

       <h2 class="text-green-600" py-5 mx-auto>{{session('success')}}</h2>

       @endif

       <div class="">
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead>
                    <tr>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">image</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($products as $product)
                    <tr class="odd:bg-white even:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"> {{$product->id}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$product->name}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$product->description}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><img src="images/{{$product->image}}" width="80px" alt=""></td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a href="{{route('edit', $product->id)}}" class="btn"> Edit </a>
                        <a href="{{route('delete', $product->id)}}" class="btn"> Delete </a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
       </div>
    </div>
</body>
</html>
