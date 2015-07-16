// -------------------------------------------
//   Search
// -------------------------------------------

Wiki.Behaviors.SearchToggle = Wiki.Behaviors.Base.extend({

	events: {
		'click .js-search-toggle': 'toggleSearch',
	},

	toggleSearch: function(){
		$('.searchbox').toggleClass('searchbox-open');
	},
});
