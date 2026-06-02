<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white p-6 rounded">
                <h2 class="text-2xl font-bold mb-4">Halaman Admin</h2>

                <table class="table-auto border w-full">
                    <thead>
                        <tr>
                            <th class="border p-2">ID</th>
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Email</th>
                            <th class="border p-2">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="border p-2">{{ $user->id }}</td>
                            <td class="border p-2">{{ $user->name }}</td>
                            <td class="border p-2">{{ $user->email }}</td>
                            <td class="border p-2">{{ $user->role }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>