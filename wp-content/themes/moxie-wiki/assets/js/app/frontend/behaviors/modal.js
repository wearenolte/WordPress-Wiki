// -------------------------------------------
//   Modal
// -------------------------------------------

Wiki.Behaviors.ModalOpen = Wiki.Behaviors.Base.extend({

	events: {
		"click .js-open-modal": "openModal",
	},

	openModal: function(){
		$('.modal').addClass('is-visible');
	}
});

Wiki.Behaviors.ModalClose = Wiki.Behaviors.Base.extend({

	events: {
		"click .js-close-modal": "closeModal",
	},

	closeModal: function(){
		$('.modal').removeClass('is-visible');
	}
});

