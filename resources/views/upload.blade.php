@extends('layouts.app')

@section('title', 'Related Records Management')
@section('page-heading', 'Manage Related Records')

@section('content')
<div class="container">
    <a href="{{ route('related-records.create') }}" class="btn btn-primary mb-3">Create New Related Record</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($relatedRecords as $record)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Record ID: {{ $record->id }}</h5>
                    
                    <div class="row">
                        <div class="col-6">
                            <p><strong>User:</strong><br>{{ $record->user->name ?? '-' }}</p>
                        </div>
                        @if($record->organization_id)
                        <div class="col-6">
                            <p><strong>Organization:</strong><br>{{ $record->organization->name ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->kepaniitiaan_id)
                        <div class="col-6">
                            <p><strong>Kepanitiaan:</strong><br>{{ $record->kepaniitiaan->name ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->magang_id)
                        <div class="col-6">
                            <p><strong>Magang:</strong><br>{{ $record->magang->company_name ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->tridharma_id)
                        <div class="col-6">
                            <p><strong>Tridharma:</strong><br>{{ $record->tridharma->title ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->lomba_id)
                        <div class="col-6">
                            <p><strong>Lomba:</strong><br>{{ $record->lomba->title ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->fakultas_id)
                        <div class="col-6">
                            <p><strong>Fakultas:</strong><br>{{ $record->fakultas->name ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->prodi_id)
                        <div class="col-6">
                            <p><strong>Prodi:</strong><br>{{ $record->prodi->name ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->ukm_id)
                        <div class="col-6">
                            <p><strong>UKM:</strong><br>{{ $record->ukm->name ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->semester)
                        <div class="col-6">
                            <p><strong>Semester:</strong><br>{{ $record->semester ?? '-' }}</p>
                        </div>
                        @endif
                        @if($record->durasi)
                        <div class="col-6">
                            <p><strong>Durasi:</strong><br>{{ $record->durasi ?? '-' }} <strong>Menit</strong></p>
                        </div>
                        @endif
                        
                        @if($record->bukti_file)
                        <div class="col-12">
                            <p><strong>Bukti File:</strong><br><a href="{{ Storage::url($record->bukti_file) }}" target="_blank">View File</a></p>
                        </div>
                        @endif
                        
                        <div class="col-6">
                            <p><strong>Verified:</strong><br>
                                <span class="badge {{ $record->is_verified ? 'bg-success' : 'bg-warning' }}">
                                    {{ $record->is_verified ? 'Verified' : 'Not Verified' }}
                                </span>
                            </p>
                        </div>
                        
                        @if($record->verified_by)
                        <div class="col-6">
                            <p><strong>Verified By:</strong><br>{{ $record->verifiedBy->name ?? '-' }}</p>
                        </div>
                        @endif
                        
                        @if($record->verified_at)
                        <div class="col-12">
                            <p><strong>Verified At:</strong><br>{{ $record->verified_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                        @endif
                    </div>
                    
                    <div class="mt-3 d-flex flex-wrap gap-2">
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
        </div>
        @endforeach
    </div>
</div>

<style>
    .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-title {
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    .row .col-6, .row .col-12 {
        margin-bottom: 10px;
    }
    .badge {
        font-size: 0.85em;
    }
    .btn-group {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }
</style>

<script>
    // Konfirmasi penghapusan data
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Are you sure you want to delete this record?')) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection