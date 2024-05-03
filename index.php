<!DOCTYPE html>

<html>
  <head>
    <title>NoDD</title>
    <link rel="icon" type="image/x-icon" href="/img/hasan.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.3.0/math.min.js></script>

<script>
   
			var numRecords;

			function getRandomInt(min, max) {
			    min = Math.ceil(min);
			    max = Math.floor(max);
			    return Math.floor(Math.random() * (max - min + 1)) + min;
			} // from MDN
			
			window.addEventListener("load", () => {
				fetch("recordsQuery.php", { method: "POST" })
					.then(res => res.json())
					.then(res => {
					    numRecords = res;
					})
					.then(() => {
					var problem = getRandomInt(1, numRecords); // me when I 1-index
					getProblem(problem);
               createTable(problem);
					});
			//	fetch("problemQuery.php", { method: "POST" })
			//		.then(res => res.text())
			//		.then(txt => document.getElementById("problem-stmt").innerHTML = txt);

			});



			function getProblem(pid){
				const xmlhttp = new XMLHttpRequest();
				console.log(pid);
				xmlhttp.onload = function() {
					document.getElementById("problem-stmt").innerHTML = this.responseText;
				}
				xmlhttp.open("GET", "./getproblem.php?p=" + pid);
				xmlhttp.send();
			}


         function createTable(pid){
            const xmlhttp = new XMLHttpRequest();
				console.log(pid);
				xmlhttp.onload = function() {
					document.getElementById("myTable").innerHTML = this.responseText;
				}
				xmlhttp.open("GET", "./getdependency.php?p=" + pid);
				xmlhttp.send();
         }
         
    </script>




  </head>
  <body>

  <table class = "table table-bordered table-sm col-md-2" id="problem-stmt">
      <!-- js puts things here LOL -->
    </table>


    <table class="table col-8 table-bordered" id="myTable">
    
    </table>




    

    <a href="teacher.php" class="btn btn-primary">Teacher view</a>




  </body>
</html>
