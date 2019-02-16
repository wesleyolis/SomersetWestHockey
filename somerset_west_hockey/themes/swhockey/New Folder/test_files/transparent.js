
var tables = parent.document.getElementsByTagName('div');
var len = tables.length ;
if(tables!=null & true)
for(var i=0;i<tables.length & i<30;i++)
	{var table = tables[i];
		if(table.id.indexOf('trans_block')>=0)
		{
		table.id = "";
		trans_block(table);
		
		}
	}

function trans_block(obj)
{
	obj.className = rep(obj.className,'semi_trans',' semi_trans_enhanced ');
	cont = obj.innerHTML;
	obj.innerHTML = '<div class="cont" >'+ cont +'</div><div class="blck"><div class="expaned">'+ cont +'</div></div>' ;
}

function rep(str,token,re)
{
	i = str.indexOf(token);
	t = token.length;
	return str.substring(0,i) + re + str.substring((i+t),str.length-i+t)
}



var tables = parent.document.getElementById('semi_trans');
trans_block2(tables);
/*
var len = tables.length ;
alert(len);
if(tables!=null & true)
for(var i=0;i<tables.length & i<30;i++)
	{
		trans_block2(table);

	}*/

function trans_block2(obj)
{
	obj.id = rep(obj.id,'semi_trans',' semi_trans_enhanced ');
	cont = obj.innerHTML;
	obj.innerHTML = '<div id="cont" >'+ cont +'</div><div id="blck"><div id="expaned">'+ cont +'</div></div>' ;
}
