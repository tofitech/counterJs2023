<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Counter JS</title>
</head>
<body>
    
    <header>
        <nav>
            <a href="index.html">Counter JS</a>
        </nav>
        
      </header>
     

<br>
      <div class="main-container">
        <div class="child-container">
            <div><h1 id="numCount"></h1></div>
            
            <div>
                <span><button class="my-button-reset" id="btnReset">RESET</button></span>
                <span><button class="my-button-start" id="btnStart">START</button></span>
                <span><button class="my-button-stop" id="btnStop">STOP</button></span>
                <span><button class="my-button-logs" id="btnLogs">LOGS</button></span>
                <span><button class="my-button-clear-logs" id="btnClearLogs">CLEAR LOGS</button></span>
            </div>
        </div>
      </div>

      <div class="logs-container">
        <h3>Logs</h3>
        <ul id="myLogs">
            
        </ul>
      </div>

    
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <footer>
        <p>&copy; 2023 My Counter JS. All rights reserved.</p>
      </footer>



      <script defer>

        let numCount = document.getElementById("numCount");

        const btnReset = document.getElementById("btnReset");
        const btnStart = document.getElementById("btnStart");
        const btnStop = document.getElementById("btnStop");
        const btnLogs = document.getElementById("btnLogs");
        const btnClearLogs = document.getElementById("btnClearLogs"); 
        
        // initial states & values
        btnStop.style.display = 'none';
        numCount.textContent = 0;
        let count = 0;
        let intervalID; 
        btnClearLogs.style.display = 'none';

        let myLogs = document.getElementById("myLogs");

        // btnStart
        btnStart.addEventListener('click', () => {

            // hide the btnStop and hide btnStart
            btnStop.style.display = 'inline';

            intervalID = setInterval(() => {
                count++;
                numCount.textContent = count;
              }, 1000);
              
              btnStart.style.display = 'none';
            
        }); // end of btnStart

        
        // btnStop
        btnStop.addEventListener('click', () => {
            btnStart.style.display = 'inline';
            clearInterval(intervalID);
            btnStop.style.display = 'none';

        }); // end of btnStop


        // btnReset 
        btnReset.addEventListener('click', () => {
            count = 0;
            numCount.textContent = count;
            clearInterval(intervalID);

            btnStop.style.display = 'none';
            btnStart.style.display = 'inline';
            btnClearLogs.style.display = 'none';
            myLogs.innerHTML = '';

        }); // end of btnReset

        
       // btnLogs 
        btnLogs.addEventListener('click', () => {
            
            if(count === 0) {
                alert('Sorry cannot log 0 seconds.');
            } else {
                let newLiLogs = document.createElement("li");
                const btnDel =  document.createElement("button");
                newLiLogs.textContent = `Log count = ${count}`;
                myLogs.appendChild(newLiLogs);
                
                btnClearLogs.style.display = 'inline';
            }
        }); // end of btnLogs

        // btnClearLogs 
        btnClearLogs.addEventListener('click', () => {
            myLogs.innerHTML = '';
        }); // end of btnClearLogs  

      </script>
</body>
</html>


<?php 
    echo "hello from php!";
?>
