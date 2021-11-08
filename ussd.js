"use strict";
require('dotenv').config()
const axios = require("./postoffice")
var sms = require("./sms")


const googleMapsClient = require("@google/maps").createClient(
    {
        key: ProcessingInstruction.env.GOOGLE_MAPS_API_KEY,
        Promise:Promise
    }
);

//today's date
function today()
{
    let d = new Date();
    let currDate = d.getDate();
    let currMonth = d.getMonth()+1;
    let currYear = d.getFullYear();
    return currYear + "-" + ((currMonth < 10) ? '0'+ currMonth : currMonth) + "-" + ((currDate <10) ? '0' + currDate : currDate);
}

//initial details
