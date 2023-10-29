<h1>{{ $heading }}</h1>
@unless (count($listings) == 0)
    @foreach ($listings as $listing)
        <h2><a href="/listings/{{ $listing['id'] }}">{{ $listing['name'] }}</a></h2>
        <p>{{ $listing['age'] }}</p>
        <p>{{ $listing['breed'] }}</p>
        <p>{{ $listing['organization'] }}</p>
        <p>{{ $listing['location'] }}</p>
        <p>{{ $listing['contact'] }}</p>
    @endforeach
@else
    <p>No listings found</p>
@endunless
