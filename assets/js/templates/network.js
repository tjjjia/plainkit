// based on calendar.js

// fetch first project
function fetchFirstProject() {
  const links = project_div.querySelectorAll("a");
  const randomNo = parseInt(Math.random() * links.length);
  const randomURL = links[randomNo].href;
  fetchProject(randomURL, false);
}

// init
//
function init() {
  // fetchFirstProject();
}
init();
