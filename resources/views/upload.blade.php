@extends('layouts.app')

@section('title', 'Related Records Management')
@section('page-heading', 'Manage Related Records')

@section('content')
<div class="container">
    <a href="{{ route('related-records.create') }}" class="btn btn-primary mb-3">Create New Related Record</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Organization</th>
                <th>Kepaniitiaan</th>
                <th>Magang</th>
                <th>Tridharma</th>
                <th>Lomba</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>UKM</th>
                <th>Bukti File</th>
                <th>Verified</th>
                <th>Verified By</th>
                <th>Verified At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($relatedRecords as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->user->name ?? '-' }}</td>
                <td>{{ $record->organization->name ?? '-' }}</td>
                <td>{{ $record->kepaniitiaan->name ?? '-' }}</td>
                <td>{{ $record->magang->company_name ?? '-' }}</td>
                <td>{{ $record->tridharma->title ?? '-' }}</td>
                <td>{{ $record->lomba->title ?? '-' }}</td>
                <td>{{ $record->fakultas->name ?? '-' }}</td>
                <td>{{ $record->prodi->name ?? '-' }}</td>
                <td>{{ $record->ukm->name ?? '-' }}</td>
                <td>
                    @if($record->bukti_file)
                        <a href="{{ Storage::url($record->bukti_file) }}" target="_blank">View File</a>
                    @else
                        -
                    @endif
                </td>
                <td>{{ $record->is_verified ? 'Verified' : 'Not Verified' }}</td>
                <td>{{ $record->verifiedBy->name ?? '-' }}</td>
                <td>{{ $record->verified_at ? $record->verified_at->format('Y-m-d H:i:s') : '-' }}</td>
                <td>
                    <a href="{{ route('related-records.edit', $record->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('related-records.destroy', $record->id) }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    @if(!$record->is_verified)
                        <form action="{{ route('related-records.verify', $record->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">Verify</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
