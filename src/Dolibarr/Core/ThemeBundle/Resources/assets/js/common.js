
// require jQuery normally
var $ = require('jquery');

// create global $ and jQuery variables
global.$ = global.jQuery = $;

//// require DataTables normally
//var dt = require('datatables.net')( window, $ );