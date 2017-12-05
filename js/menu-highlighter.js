function currentFile() {
	currentURL = window.location.href;
	fileNameIndex = currentURL.lastIndexOf("/") + 1;
	currentFileName = currentURL.substr(fileNameIndex);
	return currentFileName;
}

thisFile = currentFile();

if ( thisFile == "" ) {
	thisFile = "index.php"
}

$("nav a").each( function() {
	if (this.href.indexOf(thisFile) > 0) {
		$(this).addClass("highlight");
	}
});