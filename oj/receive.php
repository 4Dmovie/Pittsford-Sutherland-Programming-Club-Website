<html lang="en">
<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
 #editor { 
 position: absolute;
 top: 0;
 right: 0;
 bottom: 0;
 left: 0;
 }
</style>
</head>
<body>
 
function foo(items) {
 var x = "All this is syntax highlighted";
 return x;
}
 
/ace-builds/src-noconflict/ace.js
 
 var editor = ace.edit("editor");
 editor.setTheme("ace/theme/monokai");
 editor.getSession().setMode("ace/mode/javascript");
 
</body>
</html>