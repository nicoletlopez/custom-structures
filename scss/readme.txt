Sass syntax https://sass-guidelin.es/

@@@@@@@@Sample VARIABLES@@@@@@@@
$variable = "aw";
$variable = 2px;
@@@@@@@Lists@@@@@@@
$list = (a,b,c);
$list = (a:"1",b:"2");

@@@@@@@@Sample Function/Functions@@@@@@@@
@function dummy($condition) {
    @if $condition {
        @return true;
    }

    @return false;
}

@@@@@@@@NOTES: Conditional statement notes@@@@@@@@
@@@@@@@Conditions@@@@@@@
    not index($list, $item)

@@@@@@@@IF ELSE STATEMENT@@@@@@@@
@if $support-legacy {
  // …
} @else {
  // …
}

@@@@@@@@Sample Mixin/Mixins@@@@@@@@
@mixin clearfix {
  &::after {
    content: '';
    display: table;
    clear: both;
  }
}

@mixin size($width, $height: $width) {
  width: $width;
  height: $height;
}


@@@@@@@@CALL Mixin/Mixins@@@@@@@@
.foo {
  @include center;
}
