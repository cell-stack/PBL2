@props(['user'])

<tr class="bg-white border-b hover:bg-gray-50">
    <td class="px-6 py-4">{{ $user->name }}</td>
    <td class="px-6 py-4">{{ $user->email }}</td>
    <td class="px-6 py-4">{{ $user->telephone }}</td>
    <td class="px-6 py-4">{{ $user->username }}</td>
    <td class="px-6 py-4 flex space-x-2">
        <button type="button" 
            class="font-medium text-red-600 hover:underline flex items-center space-x-1">
            <i class="fas fa-trash"></i><span>Delete</span>
        </button>

        <button type="button" 
            class="font-medium text-yellow-500 hover:underline flex items-center space-x-1">
            <i class="fas fa-edit"></i><span>Edit</span>
        </button>
    </td>
</tr>
