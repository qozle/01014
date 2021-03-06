// const ws = new WebSocket("ws://10.6.150.160:1337");
const ws = new WebSocket("wss://01014.org/wss");

ws.addEventListener("open", () => {
	console.log("We are connected");
	ws.send("How are you?");
});

ws.addEventListener("message", function (event) {
	let json_data = JSON.parse(event.data);
	console.log("We got some twitter data from the server =)");
	console.log(json_data.data);

	let boxes = [];

	json_data.data.forEach((img) => {
		//  pick a random box we haven't picked yet
		do {
			var rdm_box = Math.floor(Math.random() * 9 + 1);
		} while (boxes.includes(rdm_box) == true);

		//  add result to array so next loop can check against it
		boxes.push(rdm_box);

		//  replace current image in box with new image
		// $(`#col_${rdm_box}`).empty();
		$(`#col_${rdm_box} a`).prop('href', `${img}`);
		$(`#col_${rdm_box} a img`).prop('src', `${img}`);
		// $(`#col_${rdm_box}`).append(
		// 	`<a class="cat_a portfolio-thumb-link" rel="portfolio" href="${img}"><img class="cat_pic" src="${img}"></a>`
		// );
	});
});
