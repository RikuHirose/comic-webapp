@php
  $white_stars = 5 - $comic->rating;
@endphp

@for ($i = 1; $i <= $comic->rating; $i++)
  <span class="fa-star-yellow star-icon"></span>
@endfor
@for ($i = 1; $i <= $white_stars; $i++)
  <span class="fa-star-gray star-icon"></span>
@endfor