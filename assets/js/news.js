parser = new DOMParser();
function loadFile(filePath) {
    var result = null;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", filePath, false);
    xmlhttp.send();
    if (xmlhttp.status==200) {
      result = xmlhttp.responseText;
    }
    return result;
}
xml = loadFile("api_news.xml");
news = parser.parseFromString(xml,"text/xml");
document.querySelector("#news_header").innerHTML = news.getElementsByTagName("title");
document.querySelector("#news_content").innerHTML = news.getElemetsByTagName("content");