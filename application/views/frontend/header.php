<div id="bigmap">
	<div id="map_canvas"></div>
</div>
<div class="row search-box-wrapper">
		<div class="large-12 columns search-box">
			<select name="s_postcode" id="s_postcode">
				<option value="4101">4101</option>
				<option value="4000">4000</option>
			</select>
			
			<select name="s_country" id="s_country">
				<option value="au">Australia</option>
				<option value="uk">United Kingdom</option>
				<option value="us">United States</option>
			</select>
			
			<input type="text" placeholder="Search for location" name="s_keyword" id="s_keyword">
			<a href="#" class="button expand search-btn tiny" id="search_map_btn">SEARCH</a>
		</div>
	</div>
<script>
	function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          scrollwheel: false,
          navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>