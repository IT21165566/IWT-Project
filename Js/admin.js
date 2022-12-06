/*var addDocButton = document.querySelector('.adddobtn');
var addoccontainer = document.querySelector('.addoccontainer');

addDocButton.addEventListener('click', function () {
addoccontainer.classList.add('bg-active');
});*/


document.getElementById("adlogoutbutton").addEventListener("click", function(){
document.querySelector(".bg-modal").style.display = "flex";
})

document.querySelector(".adlogoutcancel").addEventListener("click", function(){
  document.querySelector(".bg-modal").style.display = "none";
});


document.getElementById("adddobtn").addEventListener("click", function(){
  document.querySelector(".addoccontainer").style.display = "flex";
})

document.querySelector(".addoccancelbtn").addEventListener("click", function(){
  document.querySelector(".addoccontainer").style.display = "none";
});

document.getElementById(".addpabtn").addEventListener("click", function(){
  document.querySelector(".addpatcontainer").style.display = "flex";
})

document.querySelector(".adpatcancelbtn").addEventListener("click", function(){
  document.querySelector(".addpatcontainer").style.display = "none";
});