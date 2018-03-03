'use strict';

const http = require('http');

const handler = () => {
    const urlToCall = "http://ec2-34-245-178-155.eu-west-1.compute.amazonaws.com/";
    console.log('start request to ' + urlToCall);

    http.get(urlToCall, function(res) {
        console.log("Got response:" + res.statusCode, urlToCall);
        // callback(null, {response: 'formal', statusCode: res.statusCode});
        // context.succeed();
    }).on('error', function(e) {
        console.log("Got error: " + e.message);
        // context.done(null, 'FAILURE');
    });
    console.log('end request to ' + urlToCall);
};

handler();
