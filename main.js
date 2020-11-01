fetch('fetchjson.php').then((res)=> res.json())
.then(response => {
	console.log(response);
	let output='';
	for(let i in response)
	{
		output += `<tr>
			<td>${response[i].id}</td>
			<td>${response[i].name}</td>
			<td>${response[i].mobileno}</td>
			<td>${response[i].address}</td>
			<td>${response[i].dob}</td>
			<td>${response[i].tourtype}</td>
			<td>${response[i].traveltype}</td>
			<td>${response[i].amount}</td>
			<td>${response[i].email}</td>
			</tr>`;
	}
	document.querySelector('.tbody').innerHTML = output;
}).catch(error =>console.log(error));