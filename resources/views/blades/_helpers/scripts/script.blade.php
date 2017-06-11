<script type="text/javascript" src="{{ asset('jquery/jquery-1.11.1.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('jquery/jquery-ui.min.js') }}" ></script>
{{--<script type="text/javascript" src="{{ asset('impromptu/jquery-impromptu.js') }}" ></script>--}}
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}" ></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/carousel.js') }}" ></script>

<script type="text/javascript" src="{{ asset('jquery-ui-master/ui/core.js') }}" ></script>
<script type="text/javascript" src="{{ asset('jquery-ui-master/ui/widget.js') }}" ></script>
<script type="text/javascript" src="{{ asset('jquery-ui-master/ui/datepicker.js') }}" ></script>
<script type="text/javascript" src="{{ asset('jquery-ui-master/ui/position.js') }}" ></script>
<script type="text/javascript" src="{{ asset('jquery-ui-master/ui/menu.js') }}" ></script>
<script type="text/javascript" src="{{ asset('jquery-ui-master/ui/autocomplete.js') }}" ></script>

<script>

	$(function() {
		$( "#datepicker-1" ).datepicker();
		$( "#datepicker-2" ).datepicker();
	});
</script>


{{--Auto complete plugin--}}

<script>
	$.widget( "custom.catcomplete", $.ui.autocomplete, {
		_create: function() {
			this._super();
			this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
		},
		_renderMenu: function( ul, items ) {
			var that = this,
				currentCategory = "";
			$.each( items, function( index, item ) {
				var li;
				if ( item.category != currentCategory ) {
					ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
					currentCategory = item.category;
				}
				li = that._renderItemData( ul, item );
				if ( item.category ) {
					li.attr( "aria-label", item.category + " : " + item.label );
				}
			});
		}
	});
	</script>
	<script>
	$(function() {
		var data = [

@if(isset($location))

@foreach($location as $dest)
                        { label: "{{ $dest->location }}({{ $dest->abbreviation }})", category: "" },
@endforeach

@endif
		];

		$( ".search" ).catcomplete({
			delay: 0,
			source: data
		});
	});
	</script>

	<script>

	    $(document).ready(function(){

        		$(".one #mode").click(function(){
        			$("#roundlabel").hide();
        		});

        		$(".round #mode").click(function(){
        			$("#roundlabel").show();
        		});
        });
	</script>