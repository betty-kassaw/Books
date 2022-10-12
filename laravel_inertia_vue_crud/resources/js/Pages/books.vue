<template>
<AppLayout>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="py-3 pl-2 flex justify-between">
                <div class="relative max-w-xs">
                    <label for="search" class="sr-only"> Search </label>
                    <input
                        type="text"
                        name="search"
                        class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="Search..."
                    />
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                        </svg>
                    </div>
                </div>
                <div class="flex mx-7 border rounded bg-green-700 px-3 ">
                    <button @click="openForm()" class="text-white"> Create New Book</button>
                </div>
            </div>

            <div class="p-7 md:w-full  inline-block align-middle">
                <div class="overflow-hidden border rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 pl-4">
                                    <div class="flex items-center h-5">
                                        <input
                                            id="checkbox-all"
                                            type="checkbox"
                                            class="text-blue-600 border-gray-200 rounded focus:ring-blue-500"
                                        />
                                        <label for="checkbox" class="sr-only">
                                            Checkbox
                                        </label>
                                    </div>
                                </th>
                                <th
                                    scope="col"
                                    class="flex items-center px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase"
                                >
                                    ID
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 text-gray-500"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6"
                                        />
                                    </svg>
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase"
                                >
                                    <span class="inline-flex items-center">
                                        title
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12"
                                            />
                                        </svg>
                                    </span>
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase"
                                >
                                    <span class="inline-flex items-center">
                                        author
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 text-gray-500"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M17 13l-5 5m0 0l-5-5m5 5V6"
                                            />
                                        </svg>
                                    </span>
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase"
                                >
                                    Edit
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase"
                                >
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr v-for="item in data.data">
                                <td class="py-3 pl-4">
                                    <div class="flex items-center h-5">
                                        <input
                                            type="checkbox"
                                            class="text-blue-600 border-gray-200 rounded focus:ring-blue-500"
                                        />
                                        <label for="checkbox" class="sr-only">
                                            Checkbox
                                        </label>
                                    </div>
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap"
                                >
                                    {{item.id}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"
                                >
                                    {{item.title}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"
                                >
                                    {{item.author}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap"
                                >
                                    <button
                                        @click="openForm(item)"
                                        class="text-green-500 hover:text-green-700"
                                        href="#"
                                    >
                                        Edit
                                    </button>
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap"
                                >
                                    <button
                                        @click="deleteItem(item)"
                                        class="text-red-500 hover:text-red-700"
                                        href="#"
                                    >
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <pagination :links="data.links"></pagination>
                    <book-form :isOpen="isFormOpen" :isEdit="isFormEdit" :form="formObject" @formsave="saveItem" @formclose="closeModal" ></book-form>
                </div>
            </div>
        </div>
    </div>
</AppLayout>
</template>
<script>
const defaultFormObject = {
    title:null, author:null, description:null, image:null
};
import AppLayout from '@/Layouts/AppLayout.vue';
import pagination from '@/Components/pagination.vue';
import BookForm from '@/Components/Book/form.vue';

export default{
    props: ["data"],
    components: { AppLayout, pagination,BookForm},
    data(){
        return{
            isFormOpen: false,
            isFormEdit: false,
            formObject: defaultFormObject
        }
    },
    methods:{
        saveItem(item){
            let url = '/books';
            if(item.id){
                url = '/books/'+item.id;
                item._method = 'PUT';

            }
            this.$inertia.post(url,item, {
                onError:()=>{

                },
                onSuccess:()=>{
                    this.closeModal();
                }
            });
        },
        closeModal(){
            this.isOpen = false;
        },
        openForm(item){
            this.isFormOpen = true;
            this.isFormEdit = !!item;
            this.formObject = item ? item : defaultFormObject;
        },
        deleteItem(item){
            if(window.confirm('are you sure?')){
                this.$inertia.post('/books/'+item.id, {
                    _method: 'DELETE'
                });
            }
        }

    }
}
</script>

