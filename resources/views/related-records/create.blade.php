@extends('layouts.app')

@section('title', 'Create Related Record')
@section('page-heading', 'Create New Related Record')

@section('content')
<div class="container">
    <form action="{{ route('related-records.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Horizontal Navigation Tabs -->
        <ul class="nav nav-tabs" id="formTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="organization-tab" data-bs-toggle="tab" data-bs-target="#organization" type="button" role="tab">Organization</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kepaniitiaan-tab" data-bs-toggle="tab" data-bs-target="#kepaniitiaan" type="button" role="tab">Kepaniitiaan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="magang-tab" data-bs-toggle="tab" data-bs-target="#magang" type="button" role="tab">Magang</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tridharma-tab" data-bs-toggle="tab" data-bs-target="#tridharma" type="button" role="tab">Tridharma</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="lomba-tab" data-bs-toggle="tab" data-bs-target="#lomba" type="button" role="tab">Lomba</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="ukm-tab" data-bs-toggle="tab" data-bs-target="#ukm" type="button" role="tab">UKM</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="bukti-tab" data-bs-toggle="tab" data-bs-target="#bukti" type="button" role="tab">Bukti</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="formTabsContent">
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
                    <label for="kepaniitiaan_id">Kepaniitiaan</label>
                    <select name="kepaniitiaan_id" id="kepaniitiaan_id" class="form-control">
                        <option value="">Select Kepaniitiaan</option>
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
            <div class="tab-pane fade" id="bukti" role="tabpanel">
                <div class="form-group">
                    <label for="bukti_file">Upload Bukti (PDF, JPG, PNG, max 2MB)</label>
                    <input type="file" name="bukti_file" id="bukti_file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                </div>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('related-records.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<script>
    // Optional: Add navigation buttons if needed
    // For now, using Bootstrap tabs for horizontal navigation
</script>
@endsection
