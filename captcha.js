var allah1 = Math.floor(Math.random() * 10000);


var allah2 = Math.floor(Math.random() * 1000);

var allah3 = String.fromCharCode(Math.floor(Math.random() * 26) + 65)

var allah4 = String.fromCharCode(Math.floor(Math.random() * 26) + 65)

var allah5 = allah1 +  allah2 + allah3 + allah4;

   
    function create() {


		document.write("<center><h1 style='color: #ffffff; font-family:verdana'>"+ allah5+"</h1></center>");
	

	}

	var x2 = document.getElementById("box2");

	var x1 = document.getElementById("box");

    function check() {


		if (document.getElementById("adanax").value == allah5) {
			divsil("box");
		  } else {
			  alert("Yanlış Oorspu");
			var ses2 = new Audio('https://cdn.discordapp.com/attachments/904340339907760128/950014747544281088/2022-03-06_15-56-24.mp3');
			ses2.play();
		  }
		
		
		
		}


		function href(link) {

			window.location.href = link;


			
			
			
			}


			

		function divsil(divid) {


			const box = document.getElementById(divid);
	           box.style.display="none";
           console.log("Başarılı Bir Şekilde Giriş Yapıldı");
			
			
			
			}







		




        



	
	create();
