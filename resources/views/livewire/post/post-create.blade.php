<main
      class="container max-w-xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
      <!-- Profile Edit Form -->


      <form wire:submit="save">

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-xl font-semibold leading-7 text-gray-900">
              Create Post
            </h2>
            <!-- Create Post Card Top -->
        <div>
          <div class="flex items-start /space-x-3/">
            <!-- User Avatar -->
<!--            <div class="flex-shrink-0">-->
<!--              <img-->
<!--                class="h-10 w-10 rounded-full object-cover"-->
<!--                src="https://avatars.githubusercontent.com/u/831997"-->
<!--                alt="Ahmed Shamim" />-->
<!--            </div>-->
            <!-- /User Avatar -->

            <!-- Content -->
            <div class="text-gray-700 font-normal w-full">
              <textarea
                wire:model="body"
                class="block w-full p-2 pt-2 text-gray-900 rounded-lg border-none outline-none focus:ring-0 focus:ring-offset-2 outline-black mt-4 "
                name="barta"
                rows="5"
                placeholder="What's on your mind?"></textarea>
                @error('body')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
          </div>
        </div>


          </div>
        </div>





        <div class="mt-6 flex items-center justify-end gap-x-6">

          <button
            type="submit"
            class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
            Save
          </button>
        </div>
      </form>
      <!-- /Profile Edit Form -->
    </main>
