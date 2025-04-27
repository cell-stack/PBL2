<div id="editUserModal" tabindex="-1" class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden flex justify-center items-center bg-gray-900 bg-opacity-50">
    <div class="relative p-4 w-full max-w-md">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold text-gray-900">
                    Edit User
                </h3>
                <button type="button" onclick="closeEditModal()" class="text-gray-400 hover:text-gray-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form class="p-4 space-y-4">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="edit-name" class="input input-bordered w-full">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="edit-email" class="input input-bordered w-full">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Telephone</label>
                    <input type="text" id="edit-telephone" class="input input-bordered w-full">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input type="text" id="edit-username" class="input input-bordered w-full">
                </div>

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" onclick="closeEditModal()" class="btn btn-outline">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
