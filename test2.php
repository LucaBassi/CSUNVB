$http({
url: "",
method: "GET",
headers: {
"Content-type": "application/pdf"
},
responseType: "arraybuffer"
}).success(function (data, status, headers, config) {
var pdfFile = new Blob([data], {
type: "application/pdf"
});
var pdfUrl = URL.createObjectURL(pdfFile);
//window.open(pdfUrl);
printJS(pdfUrl);
//var printwWindow = $window.open(pdfUrl);
//printwWindow.print();
}).error(function (data, status, headers, config) {
alert("Sorry, something went wrong")
});