<div class="container my-5">
    <div class="row">
    
        @foreach ($summaries as $summary)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <?php $thumbnailPath = \App\Helpers\Pdf::getThumbPath($summary); ?>
                    <a href="{{ route('summaries.show', ['id' => $summary->id]) }}">
                        <div class="card-img-top summaryImg" style="background-image:url('{{ $thumbnailPath }}')" alt="Thumbnail {{ $summary->name }}">
                        </div>
                    </a>
                    <div class="card-body">
                        <p class="card-title font-weight-bold">
                            <a href="{{ route('summaries.show', ['id' => $summary->id]) }}" class="text-dark">
                                {{ $summary->name }}
                            </a>
                        </p>
                        <p class="card-subtitle"><i class="fas fa-chalkboard"></i> {{ $summary->course->name }}</p>
                        <p class="card-subtitle"><i class="fas fa-graduation-cap"></i> {{ $summary->course->education->name }}</p>
                        <p class="card-subtitle"><i class="fas fa-school"></i> {{ $summary->course->education->school->name }}</p>
                        <p class="card-text">
                            <span class="badge badge-secondary">Java</span>
                            <span class="badge badge-secondary">MySQL</span>
                        </p>
                        <div>
                            @if (Route::currentRouteName() == 'summaries.index')
                                @can('summary.update', $summary)
                                    <a class="btn btn-sm btn-outline-primary d-inline-block" href="{{ route('summaries.edit', ['id' => $summary->id]) }}">Bewerken</a>                            
                                @endcan
                                @can('summary.delete', $summary)
                                    {!! Form::open(['route' => ['summaries.destroy', $summary->id], 'method' => 'DELETE', 'class' => 'd-inline-block']) !!}
                                        {{ Form::submit('Verwijderen', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                    {!! Form::close() !!}
                                @endcan
                            @endif                             
                        </div>
                        <small class="text-muted">{{ Carbon\Carbon::parse($summary->created_at)->diffForHumans() }}</small>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

    <div class="clearfix mb-5">
        <div class="float-right">
            @if($summaries instanceof \Illuminate\Pagination\Paginator)
                {{ $summaries->links() }}
            @endif
        </div>
        
    </div>
    
    
    @if(count($summaries) === 0)
        <p>Er zijn geen samenvattingen gevonden.</p>
    @endif

</div>