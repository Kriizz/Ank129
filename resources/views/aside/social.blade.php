<div class="ak-column ak-container col-sm-4 col-md-12">
	@if (config('app.module.twitter'))
	<div class="ak-twitter-timeline">
  		<a class="twitter-timeline" height="350" href="{{ config('app.social.twitter') }}" data-widget-id="467199379187564544"> Tweets de  @DOFUSfr</a>
  		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	@endif
	@if (config('app.module.facebook'))
	<a class="ak-home-facebook" href="{{ config('app.social.facebook') }}" title="Nous suivre sur Facebook" target="_blank">
		Nous suivre<br />
		sur <span>Facebook</span>
	</a>
	@endif
    @if (config('app.module.youtube'))
	<a class="ak-home-youtube" href="{{ config('app.social.youtube') }}" title="Visiter la chaine Youtube" target="_blank">
		Visiter la chaine<br />
		Youtube <span>{{ config('app.name') }}</span>
    </a>
	@endif
</div>