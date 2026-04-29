<div>
    @php
        $info = "hi, kaise ho tum sab";

        $info = \Illuminate\Support\Str::of($info)
                    ->ucfirst()
                    ->replaceFirst("hi", "hello");
    @endphp

    {{ $info }}
</div>