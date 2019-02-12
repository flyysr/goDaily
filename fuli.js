function fuli(u, n, l){
	var sum = 0;
	
		for(var j=n; j>=1; j--){
			var p=j; var b = 1;
			while(p>=1){
				b *= l;
				p--;
			}
			sum += u*b;
			//console.log(sum);
		}
	
	return sum;
}
function list(u, n, l){
	var arr=[];
	for(var i =1; i<=n; i++){
		//console.log(parseInt(sum(u, i)));
		arr.push(parseInt(fuli(u, i, l)));
	}
	console.log(arr.toString());
}
list(3000, 20, 1.05);
