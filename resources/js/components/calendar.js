const calModule = require('calendar');
const cal = new calModule.Calendar();
let dateObj = new Date();

let month = cal.monthDates(2020, dateObj.getMonth());
console.log(month);