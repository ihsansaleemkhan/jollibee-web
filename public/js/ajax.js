var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'http://eportal.mycomsys.com/posapi_json/api/subgroup?cid=70288&lcode=001&from=1-1-2000&to=1-1-2100');
ourRequest.onload = function()
{
    var ourData = JSON.parse(ourRequest.responseText);
    console.log(ourData[0]);
};
ourRequest.send();