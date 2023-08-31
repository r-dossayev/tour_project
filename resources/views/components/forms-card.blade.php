<div>
    <div class="card">
        <div class="card-header">
            {{$title}}
        </div>
        <div class="card-body">
            <form action="{{ $action }}" method="POST">
                @csrf
                {{ $slot}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
