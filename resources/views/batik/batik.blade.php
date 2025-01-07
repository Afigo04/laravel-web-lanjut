@include("layouts.header")
<!-- Navigation -->
  <nav class="bg-black text-white">
    <div class="container mx-auto flex justify-end items-center py-4 px-6">
      <ul class="flex space-x-8 text-lg font-bold">
        <li><a class="hover:text-yellow-500" href="/">HOME</a></li>
        <li><a class="hover:text-yellow-500" href="/umkm">UMKM</a></li>
        <li><a class="hover:text-yellow-500" href="/kuliner">KULINER</a></li>
        <li><a class="hover:text-yellow-500 active" href="/batik">BATIK</a></li>
      </ul>
    </div>
  </nav>
<main>
    <!-- hero Section -->
      <section class="relative">
       <img alt="A vibrant display of various coffee beans" class="w-full h-72 object-cover" height="300" src="{{asset('assets/img/dummyImage1.jpg')}}" width="1920"/>
       <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <h1 class="text-4xl text-yellow-500 font-bold">
         SIPAPO
        </h1>
       </div>
      </section>
    <!-- hero section end -->

    <!-- Breadcrumb -->
    <div class="container mx-auto py-4 px-4">
        <nav class="text-sm text-gray-600" id="breadcrumb">
            <a class="hover:underline" href="#">
            Home
            </a>
            /
            <span>
            Batik 
            </span>
        </nav>
    </div>
    <!-- breadcrumb end -->

    <!-- main content -->
    <main class="container mx-auto py-8">
        <div class="flex flex-col lg:flex-row lg:space-x-8">
            <!-- Sidebar -->
            <aside class="w-full lg:w-1/4 mb-8 lg:mb-0">
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-4">
                    Cari Produk
                    </h2>
                    <div class="relative mb-4">
                        <input class="w-full p-2 border border-gray-300 rounded-lg" id="searchInput" placeholder="Cari Produk..." type="text"/>
                        <button class="absolute right-2 top-2 text-gray-500" title="Search">
                        <i class="fas fa-search">
                        </i>
                        </button>
                    </div>
                    <h2 class="text-xl font-bold mb-4">
                    Kategori Wilayah
                    </h2>
                    <div class="relative">
                        <label class="sr-only" for="kategori-wilayah">
                            Kategori Wilayah
                        </label>
                        <select class="w-full p-2 border border-gray-300 rounded-lg" id="kategori-wilayah">
                                <option value="">
                                </option>
                        </select>
                    </div>
                </div>
            </aside>
            <!-- Product List -->
            <div class="w-full lg:w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @if($batiks->isEmpty())
                        <p class="text-center text-3xl">Tidak ada Batik</p>
                    @else
                        @foreach($batiks as $batik)
                            <div class="border rounded-lg overflow-hidden shadow-lg product-item flex flex-col">
                                <img alt="{{$batik->business_name}}" class="w-full h-48 object-cover mb-4" height="200" src="{{asset('storage/img/'. $batik->image)}}" width="200"/>
                                <div class="p-4 flex-1">
                                    <h2 class="text-xl font-bold mb-2 product-name">
                                    {{$batik->business_name}} 
                                    </h2>
                                    <p class="text-yellow-500 mb-2">
                                    {{$batik->area}} 
                                    </p>
                                    <p class="mb-2">
                                    Kategori:
                                    <a class="text-yellow-900" href="#">
                                    Batik 
                                    </a>
                                    </p>
                                    <p class="bg-yellow-500 text-black py-2 px-4 rounded-lg w-56"><a href="{{ route('batik.batikDetail', $batik->id)}}">LIHAT DETAIL PRODUK</a></p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div> 
                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <ul class="flex space-x-2">
                        <li>
                            <a class="px-3 py-1 border border-gray-300 rounded-lg" href="#">
                            Sebelumnya
                            </a>
                        </li>
                        <li>
                            <a class="px-3 py-1 border border-gray-300 rounded-lg" href="#">
                            1
                            </a>
                        </li>
                        <li>
                            <a class="px-3 py-1 border border-gray-300 rounded-lg" href="#">
                            2
                            </a>
                        </li>
                        <li>
                            <a class="px-3 py-1 border border-gray-300 rounded-lg" href="#">
                            3
                            </a>
                        </li>
                        <li>
                            <a class="px-3 py-1 border border-gray-300 rounded-lg" href="#">
                            Selanjutnya
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <!-- Thanks Section -->
    <section class="bg-yellow-100 py-8">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">
            Terima Kasih Telah Berkunjung
            </h2>
        </div>
  </section>
</main>
@include("layouts.footer")