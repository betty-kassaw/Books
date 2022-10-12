<template>
   <div v-if="isOpen" class="modal fixed w-full h-full top-14 left-0 flex items-center justify-center">
   <div  class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50">
   <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div  class="modal-content py-4 text-left px-6">
      <div class="flex justify-center items-center pb-3">
                    <p class="text-2xl font-bold text-center">Add New Book</p>
                </div>
      <form>
      <div class="mb-4 px-2 w-full">
    <label class="block mb-1 text-sm" for="input1">Title:</label>

    <input id="input1"
    v-model="form.title"
    class="w-full border px-4 py-2 rounded-full focus:border-blue-500 focus:shadow-outline outline-none outline-none" type="text" placeholder="Full name..." />
  </div>
  <div class="mb-4 px-2 w-full">
    <label class="block mb-1 text-sm" for="input1">Author:</label>

    <input id="input1" 
    v-model="form.author"
    class="w-full border px-4 py-2 rounded-full focus:border-blue-500 focus:shadow-outline outline-none outline-none" type="text" placeholder="Full name..." />
  </div>
  <div class="mb-4 px-2 w-full">
    <label class="block mb-1 text-sm" for="textarea1">Textarea</label>

    <textarea id="textarea1" 
    v-model="form.description"
    class="w-full border px-4 py-2 rounded focus:border-blue-500 focus:shadow-outline outline-none" rows="5" placeholder="Textarea placeholder..."></textarea>
  </div>
  <div class="m-4">
              <label class="inline-block mb-2 text-gray-500">Upload
                  Image(jpg,png,svg,jpeg)</label>
              <div class="flex items-center justify-center w-full">
                  <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                      <div class="flex flex-col items-center justify-center pt-7">
                          <svg xmlns="http://www.w3.org/2000/svg"
                              class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                              fill="currentColor">
                              <path fill-rule="evenodd"
                                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                  clip-rule="evenodd" />
                          </svg>
                          <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                              Select a photo</p>
                      </div>
                      <input type="file" class="opacity-0" />
                  </label>
              </div>
          </div>
  <div class="mb-4">
      <button v-show="!isEdit" @click="$emit('formsave',form)" class="mx-2 px-4 py-2 text-sm rounded text-white bg-blue-500 focus:outline-none hover:bg-blue-400">Save</button>
      <button v-show="isEdit" @click="$emit('formsave',form)" class="mx-2 px-4 py-2 text-sm rounded text-white bg-blue-500 focus:outline-none hover:bg-blue-400">update</button>
      <button @click="$emit('formclose')" class="mx-2 px-4 py-2 text-sm rounded text-white bg-red-500 focus:outline-none hover:bg-red-400">cancel</button>
    </div>
  </form>
    </div>
  </div>
</div>
</div>
</template>

<script>
export default {
props:['form','isOpen','isEdit']
}
</script>

<style>

</style>