// Dom7
var $$ = Dom7;

// Framework7 App main instance
var app  = new Framework7({
  root: '#app', // App root element
  id: 'io.framework7.testapp', // App bundle ID
  name: 'Framework7', // App name
  theme: 'auto', 

  // App routes
  routes: routes,
});

// Init/Create main view
var mainView = app.views.create('.view-main', {
  url: '/'
});
	
$$(document).on('page:init', '.page[data-name="makeappointment"]', function () {

var currentdate = new Date();

	var datetime = currentdate.getDate()+ "/" + (currentdate.getMonth() + 1) + "/" + currentdate.getFullYear();

     $$('#currentDate').append(datetime);

     var today = new Date();

var calendarDisabled = app.calendar.create({
    inputEl: '#to',
    dateFormat: 'dd MM yyyy',
    disabled: {
      from: 2000,
      to: today
    }
});


})

$$(document).on('page:init', '.page[data-name="makingappointment"]', function () {

var currentdate = new Date();

	var datetime = currentdate.getDate()+ "/" + (currentdate.getMonth() + 1) + "/" + currentdate.getFullYear();

     $$('#currentDate').append(datetime);

     var today = new Date();

var calendarDisabled = app.calendar.create({
    inputEl: '#to',
    dateFormat: 'dd MM yyyy',
    disabled: {
      from: 2000,
      to: today
    }
});


})