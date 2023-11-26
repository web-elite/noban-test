<?php includeWithVariables('template/header.php', array('title' => $product['name'])); ?>
<div class="border-b antialiased">
  <div class="py-6">
    <!-- Breadcrumbs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center space-x-2 text-gray-400 text-sm">
        <a href="#" class="hover:underline hover:text-gray-600">صفحه اصلی</a>
        <span>
          <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
          </svg>
        </span>
        <a href="#" class="hover:underline hover:text-gray-600">فروشگاه</a>
      </div>
    </div>
    <!-- ./ Breadcrumbs -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
      <div class="flex flex-col md:flex-row -mx-4">
        <div class="md:flex-1 px-4">
          <div x-data="{ image: 1 }" x-cloak>
            <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
              <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                <span class="text-5xl">1</span>
              </div>

              <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                <span class="text-5xl">2</span>
              </div>

              <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                <span class="text-5xl">3</span>
              </div>

              <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                <span class="text-5xl">4</span>
              </div>
            </div>

            <div class="flex -mx-2 mb-4">
              <template x-for="i in 4">
                <div class="flex-1 px-2">
                  <button x-on:click="image = i" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                    <span x-text="i" class="text-2xl"></span>
                  </button>
                </div>
              </template>
            </div>
          </div>
        </div>
        <div class="md:flex-1 px-4">
          <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl"><?= $product['name'] ?></h2>
          <p class="text-gray-500 text-sm">By <a href="#" class="text-indigo-600 hover:underline"><?= $product['author'] ?></a></p>

          <div class="flex items-center space-x-4 my-4">
            <div>
              <div class="rounded-lg bg-gray-100 items-center flex py-2 px-3">
                <span class="font-bold text-indigo-600 text-3xl">250</span>
                <span class="text-indigo-400 mr-1 mt-1">تومان</span>
              </div>
            </div>
          </div>

          <p class="text-gray-500"><?= $product['short_desc'] ?></p>

          <div class="flex py-4 space-x-4 space-x-reverse">
            <div class="relative">
              <div class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">Qty</div>
              <select class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>

              <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
              </svg>
            </div>

            <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
              خرید محصول
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div  class="p-6">
  <h4 class="text-2xl">توضیحات:</h4>
  <p><?= $product['description'] ?></p>
</div>
<?php include 'template/footer.php'; ?>