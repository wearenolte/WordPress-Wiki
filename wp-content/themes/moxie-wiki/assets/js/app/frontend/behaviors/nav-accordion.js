// -------------------------------------------
//   Accordion
// -------------------------------------------

Wiki.Behaviors.Accordion = Wiki.Behaviors.Base.extend({

	events: {
		"click .js-accordion-trigger": "toggleAccordion",
	},

	toggleAccordion: function(e){
		var currentTarget = e.currentTarget.closest('.item-accordion');
		$('.item-accordion').not($(currentTarget)).removeClass('is-active');
		$('.item-accordion .sub').not($(currentTarget).find('.sub')).slideUp();
		$(currentTarget).find('.sub').slideToggle();
		$(currentTarget).toggleClass('is-active');
	},
});
