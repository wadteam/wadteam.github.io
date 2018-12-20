
   <!----> <div class="text-center">
    <h1>Perfil Personal</h1>              
</div>
<div class="text-center">
      <img src="/img/mona.jpg" alt="150" width="350" class="rounded-circle">
     
</div>

<div class="text-center">
    <input type="file" name="foto" id="">              
</div>
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->


<div class="container shadow-lg p-3 xs-5 bg-white rounded">

  <div class="col-xs-4"></div>
<div class="col-xs-7 col-md-10 col-sm-12">
  

      
    <div class="form-group">
      <label for="formGroupExampleInput">Nombre Completo</label>
      <input
        type="text"
        class="form-control"
        id="formGroupExampleInput"
        value="Carlos Rojas"
        style="width: 60rem;"
        readonly="readonly";
      />
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Correo personal</label>
      <input
        type="text"
        class="form-control"
        id="formGroupExampleInput2"
        value="LeGustaLaEstefi@hotmail.com"
        style="width: 60rem;"
        
      />
    </div>
    <div class="form-row">
          <div class="col-xs-4 xs-3">
            <label for="validationTooltip01">Edad</label>
            <input type="text" class="form-control" id="validationTooltip01" value="45" readonly="readonly";>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>

          <div class="col-xs-4 xs-3  ">
                  <div>
                      <label>Genero
                      </label>
                      <select id="ctlGenero" class="form-control" name="ctlGender">
                          <option value="" selected>Masculino</option>
                          <option value="">Femenino</option>
                          <option value="">Otro</option>

                      </select>
                  </div>
              </div>

         
      
          <div class="col-xs-4 xs-3">
            <label for="validationTooltipUsername">Usuario</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
              </div>
              <input type="text" class="form-control" id="validationTooltipUsername" value="Laruda" aria-describedby="validationTooltipUsernamePrepend" readonly="readonly";>
              <div class="invalid-tooltip">
                
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-xs-4 xs-4">
            <label for="validationTooltip03">Cantidad de cursos</label>
            <input type="text" class="form-control" id="validationTooltip03" value="3" readonly="readonly";>
            <div class="invalid-tooltip">
              Please provide a valid city.
            </div>
          </div>
         <!--------------------------------------------->
    
          <div class="col-xs-4 xs-4 ">
                  <div>
                      <label>Pais
                      </label>
                      <select id="Pais" class="form-control" name="Pais">
                          <option value="1" selected>Chile</option>

                      </select>
                  </div>
              </div>
          <!--------------------------->
         
          <div class="col-xs-4 xs-4 ">
                  <div>
                      <label>Ciudad
                      </label>
                      <select id="Ciudad" class="form-control" name="Ciudad">
                          <option value="1" selected>Los Flaquitos</option>
                          <option value="2">Los Gorditos</option>
                          <option value="3">Los Palillos</option>

                      </select>
                  </div>
              </div>

          <!----------------------->
        </div>
        
        <br>
        <button class="btn btn-primary col-md-4 md-4" type="submit" style="width : 20rem"  >Guardar</button>
        <button class="btn btn-danger col-md-4 md-4" type="submit" style="width : 20rem"  >Cancelar</button>
  </form>
</div>
<div class="col-xs-2"></div>

</div>
