<form action="{{ route('Truck_Trucker.store') }}" method="POST">
    @csrf
    <label for="trucker_id">Trucker:</label>
    <select name="trucker_id" required>
        @foreach($truckers as $trucker)
            <option value="{{ $trucker->id }}">{{ $trucker->name }}</option>
        @endforeach
    </select>
    <label for="truck_id">Truck:</label>
    <select name="truck_id" required>
        @foreach($trucks as $truck)
            <option value="{{ $truck->id }}">{{ $truck->model }}</option>
        @endforeach
    </select>
    <button type="submit">Associate Truck with Trucker</button>
</form>
