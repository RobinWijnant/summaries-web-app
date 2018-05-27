<div class="container py-5">
    <div class="row">
    
    @forelse ($summaries as $summary)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-img-top summaryImg" style="background-image:url('{{ asset('img/thumbs/'.$summary->user->id.'/'.$summary->id.'_'.$summary->name.'.jpg') }}')" alt="Thumbnail {{ $summary->name }}">
                </div>
                <div class="card-body">
                <p class="card-title font-weight-bold">{{ $summary->name }}</p>
                <p class="card-subtitle"><i class="fas fa-chalkboard"></i> {{ $summary->course->name }}</p>
                <p class="card-subtitle"><i class="fas fa-graduation-cap"></i> {{ $summary->course->education->name }}</p>
                <p class="card-subtitle"><i class="fas fa-school"></i> {{ $summary->course->education->school->name }}</p>
                <p class="card-text">
                    <span class="badge badge-secondary">Java</span>
                    <span class="badge badge-secondary">MySQL</span>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="/summaries/{{ $summary->id }}">Bekijken</a>
                    <small class="text-muted">{{ Carbon\Carbon::parse($summary->created_at)->diffForHumans() }}</small>
                </div>
                </div>
            </div>
        </div>
    @empty
        <p>No summaries found</p>
    @endforelse
    
    </div>
</div>