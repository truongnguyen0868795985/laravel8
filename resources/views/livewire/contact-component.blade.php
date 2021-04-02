<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
        <div class="flex items-center">
            <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                <img class="w-full h-full rounded-full"
                    src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                    alt="" />
            </div>
            <div class="ml-3">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{ $contact['id'] }} -
                    {{ $contact['name'] }}
                </p>
            </div>
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap text-center">
            {{ $contact['email'] }}
        </p>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap text-center">
            {{ $contact['phone'] }}
        </p>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
        <div class="flex items-center float-right">
            <div class="mr-3">
                <p class="text-gray-900 whitespace-no-wrap text-right">
                    <button wire:click="delete">Delete</button>
                </p>
            </div>
        </div>
    </td>
</tr>
