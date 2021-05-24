<ul class="footer-social">
    @if ($sett->facebook !==null)
        <li><a href="{{$sett->facebook}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
   @endif

   @if ($sett->twitter !==null)
   <li><a href="{{$sett->twitter}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
   @endif

   @if ($sett->instagram !==null)
    <li><a href="{{$sett->instagram}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
   @endif

   @if ($sett->youtube !==null)
   <li><a href="{{$sett->youtube}}" class="youtube"><i class="fa fa-youtube"></i></a></li>
   @endif

   @if ($sett->linkdin !==null)
   <li><a href="{{$sett->linkdin}}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
   @endif


</ul>
