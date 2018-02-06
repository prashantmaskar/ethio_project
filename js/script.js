/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function ($) {
"use strict";
        $('select').material_select();
        $('.slider').slider({full_width: true});
        $(".button-collapse").sideNav();
        $('.featured_slider, .owl-controls').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
        $('.featured_slider, .owl-controls').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
});
        $('.upper_slider').owlCarousel({
loop: true,
        margin: 10,
        autoplay: true,
        nav: false,
        responsive: {
        0: {
        items: 1
        },
                600: {
                items: 1
                },
                1000: {
                items: 1
                }
        }
});





        $('.featured_slider').owlCarousel({
loop: true,
        margin: 10,
        autoplay: true,
        nav: true,
        responsive: {
        0: {
        items: 1
        },
                600: {
                items: 4
                },
                1000: {
                items: 4
                }
        }


});

 $('.success-close').click(function(){

$('.message.flash').hide();

});

 $(document).ready(function() {
$('.datepicker').pickadate({
         selectMonths: true, 
         selectYears:true,
         format: 'yyyy-mm-dd',
                })
});
