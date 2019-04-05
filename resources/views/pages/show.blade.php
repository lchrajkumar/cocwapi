<h2>Worship Verse </h2>
<p>	
	{{-- @foreach ($wverse as $wvrse) --}}
	{{ $wverse->chap_name }} || {{ $wverse->chap_number }} || {{ $wverse->verse_range }} || {{ $wverse->short_note }} || {{ $wverse->long_note }}
	{{-- @endforeach --}}
</p>

<h3>Worship Verse Belongs to</h3>

<ul>
    @foreach($wverse->worshipinfo as $wsf)
    <li>{{ $wsf->winfotime }}</li>
    @endforeach
</ul>