 <div class="d-flex justify-content-center">
            <div class="card col-lg-12 my-3 ">
                
                <div class="d-flex justify-content-between">
  <div class="mr-auto p-2"><center><legend>Registro de Reservas</legend></center></div>

  <div class="p-2 col-lg-2"><input type="date" class="form-control" name="fecha" value=""></div>
</div>
                <hr>
                <div class="card-body">
                <div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="Piscina" checked>
  <label for="tab1">Piscina</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="Gym">
  <label for="tab2">Gym</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="canchas">
  <label for="tab3">Cancha de Futbol</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab4" aria-controls="Functional">
  <label for="tab4">Functional</label>
  
  <div class="tab-panels">
    <section id="Piscina" class="tab-panel">
     <table class="table">
         <tr><th>Turno</th>
            <th>Carril 1</th>
            <th>Carril 2</th>
            <th>Carril 3</th>
            <th>Carril 4</th>
            <th>Carril 5</th>
            <th>Carril 6</th>
            <th>Carril 7</th>
            <th>Carril 8</th>
            <th>Carril 9</th>
            <th>Carril 10</th>
        </tr>
         <tr><th>6:00 a 6:50</th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
        </tr>
          <tr><th>7:00 a 7:50</th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
        </tr>
          <tr><th>8:00 a 8:50</th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
            <th><input type="checkbox"></th>
        </tr>
     </table>    
  </section>

  
  </div>
  
</div>


                </div>
            </div>
        </div>
   
<style>
    .tabset > input[type="radio"] {
  position: absolute;
  left: -200vw;
}

.tabset .tab-panel {
  display: none;
}

.tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
.tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
.tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
.tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
.tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
.tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
  display: block;
}

/*
 Styling
*/
body {
  font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
  color: #333;
  font-weight: 300;
}

.tabset > label {
  position: relative;
  display: inline-block;
  padding: 15px 15px 25px;
  border: 1px solid transparent;
  border-bottom: 0;
  cursor: pointer;
  font-weight: 600;
}

.tabset > label::after {
  content: "";
  position: absolute;
  left: 15px;
  bottom: 10px;
  width: 22px;
  height: 4px;
  background: #8d8d8d;
}

.tabset > label:hover,
.tabset > input:focus + label {
  color: #06c;
}

.tabset > label:hover::after,
.tabset > input:focus + label::after,
.tabset > input:checked + label::after {
  background: #06c;
}

.tabset > input:checked + label {
  border-color: #ccc;
  border-bottom: 1px solid #fff;
  margin-bottom: -1px;
}

.tab-panel {
  padding: 30px 0;
  border-top: 1px solid #ccc;
}

/*
 Demo purposes only
*/
*,
*:before,
*:after {
  box-sizing: border-box;
}



</style>