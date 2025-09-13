@extends('layouts.app')

@section('title', 'User Management')
@section('page-heading', 'User Management')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Users</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                    Add User
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="usersTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>NPM</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>Angkatan</th>
                            <th>Nomor Telpon</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->npm }}</td>
                            <td>{{ $user->fakultas }}</td>
                            <td>{{ $user->prodi }}</td>
                            <td>{{ $user->angkatan }}</td>
                            <td>{{ $user->nomor_telpon }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning edit-btn" data-id="{{ $user->id }}">Edit</button>
                                <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $user->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Create User Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="createUserForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" required>
                    </div>
                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="fakultas" name="fakultas" required>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" required>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="number" class="form-control" id="angkatan" name="angkatan" min="1900" max="{{ date('Y') + 10 }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" id="nomor_telpon" name="nomor_telpon" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUserForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="editUserId" name="id">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editNpm" class="form-label">NPM</label>
                        <input type="text" class="form-control" id="editNpm" name="npm" required>
                    </div>
                    <div class="mb-3">
                        <label for="editFakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="editFakultas" name="fakultas" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProdi" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="editProdi" name="prodi" required>
                    </div>
                    <div class="mb-3">
                        <label for="editAngkatan" class="form-label">Angkatan</label>
                        <input type="number" class="form-control" id="editAngkatan" name="angkatan" min="1900" max="{{ date('Y') + 10 }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editNomorTelpon" class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" id="editNomorTelpon" name="nomor_telpon" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Password (leave blank to keep current)</label>
                        <input type="password" class="form-control" id="editPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="editPasswordConfirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="editPasswordConfirmation" name="password_confirmation">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Create User
    $('#createUserForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("user.store") }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#createUserModal').modal('hide');
                Swal.fire('Success!', 'User created successfully.', 'success');
                location.reload();
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = 'An error occurred.';
                if (errors) {
                    errorMessage = Object.values(errors).flat().join('\n');
                }
                Swal.fire('Error!', errorMessage, 'error');
            }
        });
    });

    // Edit User
    $('.edit-btn').on('click', function() {
        var userId = $(this).data('id');
        $('#editUserModal').modal('show');
        $.get('{{ url("users") }}/' + userId, function(data) {
            $('#editUserId').val(data.id);
            $('#editName').val(data.name);
            $('#editNpm').val(data.npm);
            $('#editFakultas').val(data.fakultas);
            $('#editProdi').val(data.prodi);
            $('#editAngkatan').val(data.angkatan);
            $('#editNomorTelpon').val(data.nomor_telpon);
            $('#editEmail').val(data.email);
            // Clear password fields on edit
            $('#editPassword').val('');
            $('#editPasswordConfirmation').val('');
        }).fail(function(xhr) {
            $('#editUserModal').modal('hide');
            var errorMessage = 'Failed to load user data.';
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            Swal.fire('Error!', errorMessage, 'error');
        });
    });

    $('#editUserForm').on('submit', function(e) {
        e.preventDefault();
        var userId = $('#editUserId').val();
        var formData = $(this).serializeArray();

        // Remove password and password_confirmation if password is empty
        var passwordField = formData.find(field => field.name === 'password');
        if (passwordField && passwordField.value === '') {
            formData = formData.filter(field => field.name !== 'password' && field.name !== 'password_confirmation');
            // Explicitly add empty password_confirmation to avoid mismatch
            formData.push({name: 'password_confirmation', value: ''});
        }

        console.log('Edit form data:', formData); // Debug log

        $.ajax({
            url: '{{ url("users") }}/' + userId,
            method: 'POST',
            data: $.param(formData),
            success: function(response) {
                $('#editUserModal').modal('hide');
                Swal.fire('Success!', 'User updated successfully.', 'success');
                location.reload();
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = 'An error occurred.';
                if (errors) {
                    errorMessage = Object.values(errors).flat().join('\n');
                }
                Swal.fire('Error!', errorMessage, 'error');
            }
        });
    });

    // Delete User
    $('.delete-btn').on('click', function() {
        var userId = $(this).data('id');
        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: '{{ url("users") }}/' + userId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function(response) {
                    location.reload();
                }
            });
        }
    });
});
</script>
@endpush
