$('.form').find('input, textarea').on('keyup blur focus', function (e) {
var $this = $(this),
    label = $this.prev('label');
    if (e.type === 'keyup') {
        if ($this.val() === '') {
        label.removeClass('active highlight');
    } else {
        label.addClass('active highlight');
    }
} else if (e.type === 'blur') {
    if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
        } else {
        label.removeClass('highlight');   
        }   
} else if (e.type === 'focus') {
    if( $this.val() === '' ) {
        label.removeClass('highlight'); 
        } 
    else if( $this.val() !== '' ) {
        label.addClass('highlight');
        }
}
});
$('.tab a').on('click', function (e) {
e.preventDefault();
$(this).parent().addClass('active');
$(this).parent().siblings().removeClass('active');
target = $(this).attr('href');
$('.tab-content > div').not(target).hide();
$(target).fadeIn(600);
});
// Add Asterisk On Required Field
$('input').each(function () {
    if ($(this).attr('required') === 'required') {
        $(this).before('<span class="asterisk">*</span>');
    }
});
// Convert Password Field To Text Field On Hover
var passField = $('.showpass');
var passField_2 = $('.showpass-2');
$('.show-pass').hover(function () {
    passField.attr('type', 'text');
}, function () {
    passField.attr('type', 'password');
});
$('.show-pass-2').hover(function () {
    passField_2.attr('type', 'text');
}, function () {
    passField_2.attr('type', 'password');
});
//validator
var focus, length ;
function validte(focus, length) {
    if (focus.val().length < length ) {
        focus.css('border-bottom', '2px solid #f00').parent().find('.custom_alert').fadeIn(200);
    } else {
        focus.css('border-bottom', '2px solid #080').parent().find('.custom_alert').fadeOut(200);
    }
}
$('.username').blur(function () {
    validte($('.username'), 4); 
});
$('.email').blur(function () {
    validte($('.email'), 4); 
});
$('.password').blur(function () {
    validte($('.password'), 6); 
});
$('.password2').blur(function () {
    validte($('.password2'), 4); 
});
$('.phone').blur(function () {
    validte($('.phone'), 8); 
});
$('.username_login').blur(function () {
    validte($('.username_login'), 4); 
});
$('.password_login').blur(function () {
    validte($('.password_login'), 6); 
});
$('.comment').blur(function () {
    validte($('.comment'), 8); 
});