@php
$i = 1;
@endphp

@php
  
@endphp

@while($i <= 10) 
  <h{{ $i }}>{{ $i }}番目です</h{{ $i }}>
  @php
  $i++;
  @endphp
@endwhile
