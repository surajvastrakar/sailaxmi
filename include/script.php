<!--bootstrap javascript-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!--AOS javascript-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
  window.addEventListener('scroll', function () {
    let nav = document.querySelector('nav');
    let windowPosition = window.scrollY ;
     nav.classList.toggle('scrolling-active', windowPosition);
  })
</script>

<!-- menu icon toggle class -->
<script>
    function myFunction(x) {
      x.classList.toggle("change");
      
      navbar = document.getElementById('na');
      navbar.classList.toggle("yel");
    }
</script>

<script>
  // scroll to navigation change
  window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active' , windowPosition);
        })
</script>

<script>
  //scroll to top

  var toTop = document.querySelector(".gotop");

  window.addEventListener('scroll', ()=>{
    if(window.scrollY > 100){
      toTop.classList.add('clickTop');
    }else{
      toTop.classList.remove("clickTop");
    }
  })
</script>

<!--sending form data to whatsapp-->
<script>
function gotowhatsapp() {
    
    var name = document.getElementById("name").value;
    var mobile = document.getElementById("mobile").value;
    var car = document.getElementById("car").value;
    var plan = document.getElementById("plan").value;
    var pickUp = document.getElementById("pick-up").value;
	var dropUp = document.getElementById("Drop-up").value;
	var pickDate = document.getElementById("pick-up-date").value;
	var pickTime = document.getElementById("pick-up-time").value;
	var dropDate = document.getElementById("drop-up-date").value;
	var dropTime = document.getElementById("drop-up-time").value;
	
    var url = "https://wa.me/+918770532739?text=" 
    + "Name: " + name + "%0a"
    + "Mobile No: " + mobile + "%0a"
    + "Car Type: " + car + "%0a"
    + "Package Type: " + plan + "%0a"  
	+ "Enter Pick-up: " + pickUp + "%0a"
	+ "Enter drop-up: " + dropUp + "%0a"
	+ "Pick-up-date: " + pickDate + "%0a"
	+ "Pick-up-time: " + pickTime + "%0a"
	+ "drop-up-date: " + dropDate + "%0a"
	+ "drop-up-time: " + dropTime;
	
    window.open(url).focus();
}
</script>