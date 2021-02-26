
const tabs = document.querySelectorAll(".tabs");
const tab = document.querySelectorAll(".tab");
const panel = document.querySelectorAll(".tab-content");

function onTabClick(event) {

  // deactivate existing active tabs and panel

  for (let i = 0; i < tab.length; i++) {
    tab[i].classList.remove("active","border-b-2","font-medium");
  }

  for (let i = 0; i < panel.length; i++) {
    panel[i].classList.remove("active","border-b-2","font-medium");
  }


  // activate new tabs and panel
  event.target.classList.add('active','border-b-2','border-red-500','font-medium');
  let classString = event.target.getAttribute('data-target');
  console.log(classString);
  document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active","border-b-2","border-red-500","font-medium");
}

for (let i = 0; i < tab.length; i++) {
  tab[i].addEventListener('click', onTabClick, false);
}