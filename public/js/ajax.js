/*
var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
ourRequest.onload = function()
{
    var ourData = JSON.parse(ourRequest.responseText);
    console.log(ourData[0]);
};
ourRequest.send();

*/
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = handleStateChange; // Implemented elsewhere.
xhr.open("GET", chrome.extension.getURL('/config_resources/config.json'), true);
xhr.send();

var xhr = new XMLHttpRequest();
xhr.open("GET", "http://eportal.mycomsys.com/posapi_json/api/group?cid=70288&lcode=001&from=2000-01-01T00:00:00&to=2100-01-01T00:00:00", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
        // JSON.parse does not evaluate the attacker's scripts.
        var resp = JSON.parse(xhr.responseText);
        console.log(resp[0]);
    }
}
xhr.send();