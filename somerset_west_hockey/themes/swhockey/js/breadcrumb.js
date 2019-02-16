function printVersion(style)
{
data = parent.document.getElementById('main').innerHTML;
stylesheet = data.split('|');
style='';
for(i=0;i<stylesheet.length-1;i++)
if(stylesheet[i] !='')
style+=("<style type='text/css'>@import '"+stylesheet[i]+"';</style>");
data=style+data;

parent.document.write(data);
parent.document.close();
alert("Please not that you may need to set-up your browser print margins.\nClick Cancel to the print window, goto print preview, then change the margins acourdingly");

parent.window.print();



/*
printwin = window.open (parent.document.location,"Print Version","");

for(i=0;parent.document.StyleSheet.length;i++)
alert(parent.document.StyleSheet[i].href);

printwin.document.write("<style type='text/css' media='all'>@import 'themes/bluemarine/print.css';</style>");
printwin.document.write(data);
printwin.document.close();
printwin.window.print();
*/

}