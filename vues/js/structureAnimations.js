function toggleLeftPanel(){
  document.getElementById("left-panel").classList.toggle('is-active');

  if(document.getElementById("left-panel").classList.contains("is-active")){
    document.getElementById("container").style.width = "92.5%";
  } else {
    document.getElementById("container").style.width = "100%";
  }
}
