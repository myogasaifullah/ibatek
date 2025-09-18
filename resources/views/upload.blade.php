@extends('layouts.app')

@section('title', 'Related Records Management')
@section('page-heading', 'Manage Related Records')

@section('content')
<div class="container">
    <a href="{{ route('related-records.create') }}" class="btn btn-primary mb-3">Create New Related Record</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($relatedRecords as $record)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Record ID: {{ $record->id }}</h5>
            <p><strong>User:</strong> {{ $record->user->name ?? '-' }}</p>
            @if($record->organization_id)
                <p><strong>Organization:</strong> {{ $record->organization->name ?? '-' }}</p>
            @endif
            @if($record->kepaniitiaan_id)
                <p><strong>Kepaniitiaan:</strong> {{ $record->kepaniitiaan->name ?? '-' }}</p>
            @endif
            @if($record->magang_id)
                <p><strong>Magang:</strong> {{ $record->magang->company_name ?? '-' }}</p>
            @endif
            @if($record->tridharma_id)
                <p><strong>Tridharma:</strong> {{ $record->tridharma->title ?? '-' }}</p>
            @endif
            @if($record->lomba_id)
                <p><strong>Lomba:</strong> {{ $record->lomba->title ?? '-' }}</p>
            @endif
            @if($record->fakultas_id)
                <p><strong>Fakultas:</strong> {{ $record->fakultas->name ?? '-' }}</p>
            @endif
            @if($record->prodi_id)
                <p><strong>Prodi:</strong> {{ $record->prodi->name ?? '-' }}</p>
            @endif
            @if($record->ukm_id)
                <p><strong>UKM:</strong> {{ $record->ukm->name ?? '-' }}</p>
            @endif
            
            @if($record->bukti_file)
                <p><strong>Bukti File:</strong> <a href="{{ Storage::url($record->bukti_file) }}" target="_blank">View File</a></p>
            @endif
            <p><strong>Verified:</strong> {{ $record->is_verified ? 'Verified' : 'Not Verified' }}</p>
            @if($record->verified_by)
                <p><strong>Verified By:</strong> {{ $record->verifiedBy->name ?? '-' }}</p>
            @endif
            @if($record->verified_at)
                <p><strong>Verified At:</strong> {{ $record->verified_at->format('Y-m-d H:i:s') }}</p>
            @endif
            <div>
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
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
