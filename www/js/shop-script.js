// JavaScript Document
$(document).ready(function() {
	"use strict";
  $('#newsticker').jCarouselLite({
	hoverPause: true,
    vertical: true,
    btnNext: '#news-next',
    btnPrev: '#news-prev',
    auto: 2000,
    visible: 3,
    speed: 800
  });
});