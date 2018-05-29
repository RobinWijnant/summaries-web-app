<div class="container my-5">
    <div class="row">
    
        @foreach ($summaries as $summary)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <?php $thumbnailPath = asset('storage/summaries/'.$summary->user->id.'/thumbs/'.$summary->id.'.jpg'); ?>
                    <div class="card-img-top summaryImg" style="background-image:url('{{ $thumbnailPath }}')" alt="Thumbnail {{ $summary->name }}">
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
                            <div>
                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('summaries.show', ['id' => $summary->id]) }}">Bekijken</a>                            
                                @can('summary.update', $summary)
                                    <a class="btn btn-sm btn-outline-primary" href="{{ route('summaries.edit', ['id' => $summary->id]) }}">Bewerken</a>                            
                                @endcan
                                @can('summary.delete', $summary)
                                    {!! Form::open(['route' => ['summaries.destroy', $summary->id], 'method' => 'DELETE']) !!}
                                        {{ Form::submit('Verwijderen', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                    {!! Form::close() !!}
                                @endcan                                
                            </div>
                            <small class="text-muted">{{ Carbon\Carbon::parse($summary->created_at)->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
    
    @if(count($summaries) === 0)
        <p>No summaries found</p>
    @endif

</div>