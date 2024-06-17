<div>
    <form class="my-5">
        <div class="flex flex-col gap-2 px-6 text-gray-700">
            <label class="text-lg font-semibold"> Question Form </label>
            <textarea class="border-2 border-gray-300 rounded-md p-2" cols="20" rows="5"> </textarea>
        </div>

        <div class="flex gap-4 px-8 my-4">  
            <button class="bg-gray-600 text-white p-2 rounded-md hover:bg-gray-800"> Ask question </button>
            <button @click="qopen = false"> Cancel </button>
        </div>
    </form>
</div>
