document.addEventListener('DOMContentLoaded', function() {
		 	M.AutoInit();
		   var elems = document.querySelectorAll('.sidenav');
		   var options = {};
		   var instances = M.Sidenav.init(elems, options);
		   var modal = document.querySelectorAll('.modal');
		   var modal_options = {};
		   var modal_intances = M.Modal.init(modal, modal_options);
		 });