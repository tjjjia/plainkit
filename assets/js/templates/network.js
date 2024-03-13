const display = document.querySelector("#display");
const links = document.querySelectorAll(".modal-links");

links.forEach(link => {
	link.addEventListener("click", function(event){
		event.preventDefault();
		const endpoint = link.getAttribute("href") + ".json";

		fetch(endpoint)
			.then( response => response.json() )
			.then( data => {
				// console.log( data );

				display.innerHTML = data.html;
				document.body.classList.add("modal-open");
			})
			.catch( error => console.error("Error: ", error) )
	})
});