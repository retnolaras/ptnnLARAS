stepcarousel.setup({
	galleryid: 'root_slider', //id of carousel DIV
	beltclass: 'contenthol', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'con', //class of panel DIVs each holding content
	autostep: {enable:false, moveby:1, pause:3000},
	panelbehavior: {speed:500, wraparound:true, persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/go-previous.png', 750, 210], rightnav: ['images/go-next.png', -90, 210]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
})
