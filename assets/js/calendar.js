// variables
const render = document.getElementById("render");
const links = document.querySelectorAll(".events ul li");

const linkHandler = function (event) {
  event.preventDefault();
  const url = event.target.href;
  const json = `${url}.json`;

  fetchProject(json);
};

links.forEach(function (elem) {
  elem.addEventListener("click", linkHandler);
});

const renderResult = function (data) {
  render.innerHTML = "";
  const html = `
  <div class="event">
  <div class="header">
      <h1>${data.title}</h1>
      <h2><em>${data.subhead}</em></h2>
  </div>
  <div class="cover">
      <img src="${data.cover} ?>" alt="">
  </div>  
  <div class="time">
      <time>Date from: ${data.datefrom}</time>
      <time>Date to: ${data.datefrom}</time>
      <time>Time from: ${data.timefrom}</time>
      <time>Time to: ${data.timeto}</time>
  </div>
  <div class="organisation">
      <div>Organisation: ${data.organisation}</div>
      <div>Location: ${data.location}</div>
      <a href="<div>${data.ticketvendorurl}</div>"><div>${data.ticketvendor}</div></a>
  </div>
  <div class="content"><div>${data.description}</div></div>
  <div class="gallery">
  <?php foreach($page->gallery()->toFiles() as $image): ?>
      <figure>
          <a href="<?= $image->url() ?>">
              <img src="<?= $image->url() ?>" alt="">
          </a>
      </figure>
  <?php endforeach ?>
  </div>
</div>
  `;
  render.insertAdjacentHTML("beforeend", html);
};

const fetchProject = async (json) => {
  try {
    const response = await fetch(json);
    const data = await response.json();

    renderResult(data);
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

function fetchFirstProject() {
  const firstLink = links[0].firstElementChild;
  const firstURL = firstLink.href;
  const firstJSON = `${firstURL}.json`;

  fetchProject(firstJSON);
}

// Export at least one function?
export function f() {
  return;
}
f();

// 4. Function for Uncaught errors
//
window.addEventListener("unhandledrejection", function (event) {
  // the event object has two special properties:
  alert(event.promise); // [object Promise] - the promise that generated the error
  alert(event.reason); // Error: Whoops! - the unhandled error object
});

function init() {
  fetchFirstProject();
}
init();
