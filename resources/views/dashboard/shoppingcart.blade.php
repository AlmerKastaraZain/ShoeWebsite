<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Cart') }}
        </h2>
    </x-slot>
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
          <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
            <div class="space-y-6">
              <x-shopping-cart />
            </div>
            <div class="hidden xl:mt-8 xl:block">
              <h3 class="text-2xl font-semibold text-gray-900 ">People also bought</h3>
              <div class="mt-6 grid grid-cols-3 gap-4 sm:mt-8">
                <div class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm ">
                  <a href="#" class="overflow-hidden rounded">
                    <img class="mx-auto h-44 w-44" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="imac image" />
                  </a>
                  <div>
                    <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline ">iMac 27”</a>
                    <p class="mt-2 text-base font-normal text-gray-500 ">This generation has some improvements, including a longer continuous battery life.</p>
                  </div>
                  <div>
                    <p class="text-lg font-bold text-gray-900 ">
                      <span class="line-through"> $399,99 </span>
                    </p>
                    <p class="text-lg font-bold leading-tight text-red-600 ">$299</p>
                  </div>
                  <div class="mt-6 flex items-center gap-2.5">
                    <button data-tooltip-target="favourites-tooltip-1" type="button" class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"></path>
                      </svg>
                    </button>
                    <div id="favourites-tooltip-1" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 ">
                      Add to favourites
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button type="button" class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 ">
                      <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                      </svg>
                      Add to cart
                    </button>
                  </div>
                </div>
                <div class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm ">
                  <a href="#" class="overflow-hidden rounded">
                    <img class="mx-auto h-44 w-44" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ps5-dark.svg" alt="imac image" />
                  </a>
                  <div>
                    <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline ">Playstation 5</a>
                    <p class="mt-2 text-base font-normal text-gray-500 ">This generation has some improvements, including a longer continuous battery life.</p>
                  </div>
                  <div>
                    <p class="text-lg font-bold text-gray-900">
                      <span class="line-through"> $799,99 </span>
                    </p>
                    <p class="text-lg font-bold leading-tight text-red-600 ">$499</p>
                  </div>
                  <div class="mt-6 flex items-center gap-2.5">
                    <button data-tooltip-target="favourites-tooltip-2" type="button" class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-10">
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"></path>
                      </svg>
                    </button>
                    <div id="favourites-tooltip-2" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 ">
                      Add to favourites
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button type="button" class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                      <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                      </svg>
                      Add to cart
                    </button>
                  </div>
                </div>
                <div class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm ">
                  <a href="#" class="overflow-hidden rounded">
                    <img class="mx-auto h-44 w-44" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-dark.svg" alt="imac image" />
                  </a>
                  <div>
                    <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline ">Apple Watch Series 8</a>
                    <p class="mt-2 text-base font-normal text-gray-500 ">This generation has some improvements, including a longer continuous battery life.</p>
                  </div>
                  <div>
                    <p class="text-lg font-bold text-gray-900 ">
                      <span class="line-through"> $1799,99 </span>
                    </p>
                    <p class="text-lg font-bold leading-tight text-red-600 ">$1199</p>
                  </div>
                  <div class="mt-6 flex items-center gap-2.5">
                    <button data-tooltip-target="favourites-tooltip-3" type="button" class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"></path>
                      </svg>
                    </button>
                    <div id="favourites-tooltip-3" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 ">
                      Add to favourites
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
    
                    <button type="button" class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                      <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                      </svg>
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
              <p class="text-xl font-semibold text-gray-900 ">Order summary</p>
    
              <div class="space-y-4">
                <div class="space-y-2">
                  <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500 ">Original price</dt>
                    <dd class="text-base font-medium text-gray-900 ">$7,592.00</dd>
                  </dl>
    
                  <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500 ">Savings</dt>
                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                  </dl>
    
                  <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500 ">Store Pickup</dt>
                    <dd class="text-base font-medium text-gray-900 ">$99</dd>
                  </dl>
    
                  <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500 ">Tax</dt>
                    <dd class="text-base font-medium text-gray-900 ">$799</dd>
                  </dl>
                </div>
    
                <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 ">
                  <dt class="text-base font-bold text-gray-900 ">Total</dt>
                  <dd class="text-base font-bold text-gray-900 ">$8,191.00</dd>
                </dl>
              </div>
    
              <a href="#" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Proceed to Checkout</a>
    
              <div class="flex items-center justify-center gap-2">
                <span class="text-sm font-normal text-gray-500 "> or </span>
                <a href="#" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline ">
                  Continue Shopping
                  <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                  </svg>
                </a>
              </div>
            </div>
    
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm  sm:p-6">
              <form class="space-y-4">
                <div>
                  <label for="voucher" class="mb-2 block text-sm font-medium text-gray-900 "> Do you have a voucher or gift card? </label>
                  <input type="text" id="voucher" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="" required />
                </div>
                <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium bg-gray-900 text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Apply Code</button>
              </form>
            </div>
          </div>
        </div>
      </div>

</x-app-layout>
