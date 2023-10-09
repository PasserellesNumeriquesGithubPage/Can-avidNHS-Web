@extends('dashboard.sidebar')

@section('sub-content')
    <div class="tables-administer">
        <a href="{{ route('events.index') }}" class="btn btn-info btn-lg" style="background-color: green; margin-bottom:3%">Go
            Back</a>
        <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="events">Event Title</label>
                <input type="text" class="form-control @error('events') is-invalid @enderror" name="events"
                    value="{{ $event->events }}">
            </div>
            <div class="form-group">
                <label for="events_description">Events Description:</label>
                <input type="text" class="form-control @error('events_description') is-invalid @enderror"
                    name="events_description" value="{{ $event->events_description }}">
            </div>
            <div class="form-group ">
                <label for="status">Status:</label>
                <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                    <option value="Posted" {{ old('status', $event->status) === 'Posted' ? 'selected' : '' }}>
                        Posted
                    </option>
                    <option value="Registrar Verified"
                        {{ old('status', $event->status) === 'Registrar Verified' ? 'selected' : '' }}>
                        Registrar Verified
                    </option>
                    <option value="Pending" {{ old('status', $event->status) === 'Pending' ? 'selected' : '' }}>
                        Pending
                    </option>
                </select>

                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="events_started">Events Started:</label>
                <input type="date" class="form-control @error('events_started') is-invalid @enderror"
                    name="events_started" value="{{ $event->events_started }}">
            </div>
            <div class="form-group">
                <label for="events_end">Events End:</label>
                <input type="date" class="form-control @error('events_end') is-invalid @enderror" name="events_end"
                    value="{{ $event->events_end }}">
            </div>
            @if ($event->events_images)
                @foreach (json_decode($event->events_images) as $mediaUrl)
                    @if (Str::contains($mediaUrl, ['.jpg', '.jpeg', '.png', '.gif']))
                        <img src="{{ asset('storage/' . $mediaUrl) }}" alt="Image"
                            style="height:100px; width:100px; border-radius:50%;">
                    @else
                        <video controls>
                            <source src="{{ asset('storage/' . $mediaUrl) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                @endforeach
            @endif
            <input type="file" name="media_files[]" accept="image/*, video/*" multiple>
            <div class="form-group text-center">
                <br>
                <button type="submit" class="btn btn-primary btn-block" style="background-color: green">Submit</button>
            </div>
        </form>
    </div>
@endsection
