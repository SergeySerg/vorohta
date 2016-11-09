var pageHash = window.location.hash.substr(1);

$(function(){

	 $("#webstudio-slider").unitegallery({
		 gallery_theme: "slider",
		 tiles_justified_space_between:0,
		 gallery_width:'100%',							//gallery width
		 gallery_height:400,								//gallery height
		 gallery_max_height: 300,
		 slider_control_zoom: false,
		 slider_enable_text_panel: true,			 		//true,false - enable the text panel
		 slider_textpanel_always_on: true,				//true,false - text panel are always on, false - show only on mouseover
		 slider_textpanel_text_valign: "middle",			//middle, top, bottom - text vertical align
		 slider_textpanel_padding_top:10,				//textpanel padding top
		 slider_textpanel_padding_bottom:20,				//textpanel padding bottom
		 slider_textpanel_height: null,					//textpanel height. if null it will be set dynamically
		 slider_textpanel_padding_title_description: 5,	//the space between the title and the description
		 slider_textpanel_padding_right: 11,				//cut some space for text from right
		 slider_textpanel_padding_left: 11,				//cut some space for text from left
		 slider_textpanel_fade_duration: 200,			//the fade duration of textpanel appear
		 slider_textpanel_enable_title: true,			//enable the title text
		 slider_textpanel_enable_description: true,		//enable the description text
		 slider_textpanel_enable_bg: true,				//enable the textpanel background
		 slider_textpanel_bg_color:"#000000",			//textpanel background color
		 slider_textpanel_bg_opacity: 0.4,
		 slider_enable_bullets: false,
	 });

	 $('.webstudio-gallery').each(function(){
		 $(this).unitegallery({
			 gallery_theme: "tiles",
			 tiles_type: "justified",
		 });
	 });


	$(window).on('scroll', function(){
		 var scrollPosition = $(this).scrollTop();
		 if(scrollPosition > 100){
			 if(!$('.navbar').hasClass('navbar-fixed-top')){
				 $('.navbar').addClass('navbar-fixed-top');
				 $('.navbar').hide(0);
				 $('.navbar').fadeIn(500);
			 }
		 }else{
			 $('.navbar').removeClass('navbar-fixed-top');
		 }

	 });

	 $('.navbar').hover(
		 function(){
			 if($('.navbar').hasClass('navbar-fixed-top')){
				 $(this).animate({opacity: 1});
			 }
		 },
		 function(){
			 if($('.navbar').hasClass('navbar-fixed-top')){
				 $(this).animate({opacity: 0.9});
			 }
		 }
	 );

	$('.col-md-8').find('#' + pageHash);


 });
