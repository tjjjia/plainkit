// import { f } from "./ruben.js";
import { loadMember, loadNetwork } from "./network.js";


// run page-specific functions
const currentPage = window.location.pathname;
console.log("📍 Currently browsing", currentPage);

switch (currentPage.toLowerCase()) {
	case "/":
	// homepage
		break;
	case "/calendar":
	// calendar
		break;
	case "/network":
	// network
		const links = document.querySelectorAll("#index li a");

		links.forEach(link => {
			link.addEventListener("click", function(event) {
				event.preventDefault();

				const href = new URL(link.href);
				loadMember( href.pathname );
			})
		})

		loadNetwork();
		break;
	default:
		break;
}
