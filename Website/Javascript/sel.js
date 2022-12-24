const formMarkup = `<form class="date" action=""">
<input name= CID type=text class = text placeholder=ID> <input name=PPIC type=file class = img > <input name= PNAME type=text class = text placeholder=Name> `;

function GetSelectedValue() {
  var e = document.getElementById("passengersSelector");
  var numberOfPassengers = e.options[e.selectedIndex].value;
  var result = [];

  for (var i = 0; i < numberOfPassengers; i++) {
    result.push(formMarkup);
  }
  
  var outerContainer = document.getElementById("outside-container");

  outerContainer.innerHTML = result.join('');
}