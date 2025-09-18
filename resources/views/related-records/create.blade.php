@extends('layouts.app')

@section('title', 'Create Related Record')
@section('page-heading', 'Create New Related Record')

@section('content')
<div class="container">
    <form action="{{ route('related-records.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Semester Select for Display -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Filter Records by Semester</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="display_semester">Display Records for Semester</label>
                    <select id="display_semester" class="form-control">
                        <option value="all">All Semesters</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Horizontal Navigation Tabs -->
        <div class="card mb-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Select Record Type</h5>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-tabs" id="formTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="organization-tab" data-bs-toggle="tab" data-bs-target="#organization" type="button" role="tab">
                            <i class="fas fa-building me-1"></i> Organization
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kepaniitiaan-tab" data-bs-toggle="tab" data-bs-target="#kepaniitiaan" type="button" role="tab">
                            <i class="fas fa-users me-1"></i> Kepanitiaan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="magang-tab" data-bs-toggle="tab" data-bs-target="#magang" type="button" role="tab">
                            <i class="fas fa-briefcase me-1"></i> Magang
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tridharma-tab" data-bs-toggle="tab" data-bs-target="#tridharma" type="button" role="tab">
                            <i class="fas fa-graduation-cap me-1"></i> Tridharma
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="lomba-tab" data-bs-toggle="tab" data-bs-target="#lomba" type="button" role="tab">
                            <i class="fas fa-trophy me-1"></i> Lomba
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ukm-tab" data-bs-toggle="tab" data-bs-target="#ukm" type="button" role="tab">
                            <i class="fas fa-icons me-1"></i> UKM
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content p-3" id="formTabsContent">
                    <div class="tab-pane fade show active" id="organization" role="tabpanel">
                        <div class="form-group">
                            <label for="organization_id">Organization</label>
                            <select name="organization_id" id="organization_id" class="form-control">
                                <option value="">Select Organization</option>
                                @foreach($organizations as $org)
                                <option value="{{ $org->id }}">{{ $org->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kepaniitiaan" role="tabpanel">
                        <div class="form-group">
                            <label for="kepaniitiaan_id">Kepanitiaan</label>
                            <select name="kepaniitiaan_id" id="kepaniitiaan_id" class="form-control">
                                <option value="">Select Kepanitiaan</option>
                                @foreach($kepaniitiaans as $kep)
                                <option value="{{ $kep->id }}">{{ $kep->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="magang" role="tabpanel">
                        <div class="form-group">
                            <label for="magang_id">Magang</label>
                            <select name="magang_id" id="magang_id" class="form-control">
                                <option value="">Select Magang</option>
                                @foreach($magangs as $mag)
                                <option value="{{ $mag->id }}">{{ $mag->company_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tridharma" role="tabpanel">
                        <div class="form-group">
                            <label for="tridharma_id">Tridharma</label>
                            <select name="tridharma_id" id="tridharma_id" class="form-control">
                                <option value="">Select Tridharma</option>
                                @foreach($tridharmas as $tri)
                                <option value="{{ $tri->id }}">{{ $tri->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lomba" role="tabpanel">
                        <div class="form-group">
                            <label for="lomba_id">Lomba</label>
                            <select name="lomba_id" id="lomba_id" class="form-control">
                                <option value="">Select Lomba</option>
                                @foreach($lombas as $lom)
                                <option value="{{ $lom->id }}">{{ $lom->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ukm" role="tabpanel">
                        <div class="form-group">
                            <label for="ukm_id">UKM</label>
                            <select name="ukm_id" id="ukm_id" class="form-control">
                                <option value="">Select UKM</option>
                                @foreach($ukms as $ukm)
                                <option value="{{ $ukm->id }}">{{ $ukm->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="card mb-4">
            <div class="card-header bg-light">
                <h5 class="mb-0">Additional Information</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="semester" id="semester" class="form-control">
                                <option value="">Select Semester</option>
                                <option value="1" {{ old('semester') == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('semester') == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('semester') == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('semester') == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('semester') == '5' ? 'selected' : '' }}>5</option>
                                <option value="6" {{ old('semester') == '6' ? 'selected' : '' }}>6</option>
                                <option value="7" {{ old('semester') == '7' ? 'selected' : '' }}>7</option>
                                <option value="8" {{ old('semester') == '8' ? 'selected' : '' }}>8</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="durasi">Durasi (menit)</label>
                            <input type="number" name="durasi" id="durasi" class="form-control" min="0" value="{{ old('durasi') }}">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="bukti_file">Upload Bukti (PDF, JPG, PNG, max 2MB)</label>
                    <input type="file" name="bukti_file" id="bukti_file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                </div>
            </div>
        </div>

        <!-- Existing Records Table -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Your Existing Records</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="existing-records-table">
                        <thead class="table-dark">
                            <tr>
                                <th>Type</th>
                                <th>Name/Title</th>
                                <th>Semester</th>
                                <th>Durasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($relatedRecords as $record)
                            <tr class="record-row" data-semester="{{ $record->semester ?? '' }}">
                                <td>
                                    @if($record->organization_id) Organization
                                    @elseif($record->kepaniitiaan_id) Kepanitiaan
                                    @elseif($record->magang_id) Magang
                                    @elseif($record->tridharma_id) Tridharma
                                    @elseif($record->lomba_id) Lomba
                                    @elseif($record->ukm_id) UKM
                                    @else Other
                                    @endif
                                </td>
                                <td>
                                    @if($record->organization_id) {{ $record->organization->name ?? '-' }}
                                    @elseif($record->kepaniitiaan_id) {{ $record->kepaniitiaan->name ?? '-' }}
                                    @elseif($record->magang_id) {{ $record->magang->company_name ?? '-' }}
                                    @elseif($record->tridharma_id) {{ $record->tridharma->title ?? '-' }}
                                    @elseif($record->lomba_id) {{ $record->lomba->title ?? '-' }}
                                    @elseif($record->ukm_id) {{ $record->ukm->name ?? '-' }}
                                    @else -
                                    @endif
                                </td>
                                <td>{{ $record->semester ?? '-' }}</td>
                                <td>{{ $record->durasi ? $record->durasi . ' Menit' : '-' }}</td>
                                <td>
                                    <span class="badge {{ $record->is_verified ? 'bg-success' : 'bg-warning' }}">
                                        {{ $record->is_verified ? 'Verified' : 'Not Verified' }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-3 d-flex justify-content-between">
            <a href="{{ route('related-records.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to Records
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Create Record
            </button>
        </div>
    </form>
</div>

<style>
    .nav-tabs .nav-link {
        color: #495057;
        font-weight: 500;
        border-top: none;
        border-left: none;
        border-right: none;
        border-radius: 0;
    }
    .nav-tabs .nav-link.active {
        color: #0d6efd;
        border-bottom: 3px solid #0d6efd;
        background-color: transparent;
        font-weight: 600;
    }
    .nav-tabs .nav-link:hover {
        border-color: transparent;
        background-color: #f8f9fa;
    }
    .card {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        border: 1px solid rgba(0, 0, 0, 0.125);
    }
    .card-header {
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }
    .table th {
        background-color: #f8f9fa;
    }
    .badge {
        font-size: 0.85em;
        padding: 0.5em 0.75em;
    }
    #existing-records-table {
        font-size: 0.9rem;
    }
    #existing-records-table tr {
        transition: all 0.2s;
    }
    #existing-records-table tr:hover {
        background-color: #f8f9fa;
    }
</style>

<script>
    document.getElementById('display_semester').addEventListener('change', function() {
        var semester = this.value;
        var rows = document.querySelectorAll('#existing-records-table .record-row');
        
        rows.forEach(function(row) {
            if (semester === 'all' || row.getAttribute('data-semester') === semester) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Trigger on load for default
    window.addEventListener('load', function() {
        document.getElementById('display_semester').dispatchEvent(new Event('change'));
    });

    // Highlight the active tab with a more visible style
    document.querySelectorAll('.nav-link').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
@endsection