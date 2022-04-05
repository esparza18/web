
@extends('plantilla')
@section('content')


    <div class="container">
        <main>
          <div class="py-5 text-center">
          
            <p class="lead">Te solicitaremos unos datos para poder continuar con tu tramite para viajar</p>
          </div>
      
          <div class="row g-5">
            
            <div class="col-md-7 col-lg-12">
              <h4 class="mb-3">Tramite de viaje</h4>
              <form class="needs-validation" novalidate="">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-3">
                    <label for="lastName" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <label for="lastName" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
      
                  
      
                  <div class="col-12">
                    <label for="email" class="form-label">Correo electronico </label>
                    <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com">
                    <div class="invalid-feedback">
                      Ingrese una dirección de correo electrónico válida para mantenerte informado de tu tramite.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Direccion <span class="text-muted">(Calle, numero exterior, colonia)</span></label>
                    <input type="text" class="form-control" id="address" placeholder="Calle vallereal #149 col.tabitas" required="">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                 
                  <div class="col-md-3">
                    <label for="address" class="form-label">Pais de origen </label>
                    <input type="text" class="form-control" id="address" placeholder="Especifica un nombre de pais valido" required="">
                    <div class="invalid-feedback">
                      Especifica un nombre de pais valido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="address" class="form-label">Ciudad de origen </label>
                    <input type="text" class="form-control" id="address" placeholder="Especifica un nombre de ciudad valido" required="">
                    <div class="invalid-feedback">
                      Especifica un nombre de ciudad valido.
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="address" class="form-label">Pais de destino </label>
                    <input type="text" class="form-control" id="address" placeholder="Especifica un nombre de pais valido" required="">
                    <div class="invalid-feedback">
                      Especifica un nombre de pais valido
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="address" class="form-label">Ciudad de destino </label>
                    <input type="text" class="form-control" id="address" placeholder="Especifica un nombre de ciudad valido" required="">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="state" class="form-label">Reservar hospedaje en hotel</label>
                    <select class="form-select" id="state" required="">
                      <option value="">Seleccionar...</option>
                      <option>Hotel California</option>
                      <option>Hotel La brisa</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="state" class="form-label">Numero de cuarto <span class="text-muted">(Disponibles)</span></label>
                    <select class="form-select" id="state" required="">
                      <option value="">Seleccionar...</option>
                      <option>13</option>
                      <option>14</option>
                      <option>35</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
      
                  
                </div>
      
                <hr class="my-4">
      
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="same-address">
                  <label class="form-check-label" for="same-address">La dirección que especifico es la misma a la que se generará facturación</label>
                </div>
      
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="save-info">
                  <label class="form-check-label" for="save-info">Guardar esta informacion para la siguiente vez</label>
                </div>
      
                <hr class="my-4">
      
                <h4 class="mb-3">Tipo de pago</h4>
      
                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                    <label class="form-check-label" for="credit">Tarjeta de credito</label>
                  </div>
                  <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="debit">Tarjeta de debito</label>
                  </div>
                  <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="paypal">PayPal</label>
                  </div>
                </div>
      
                <div class="row gy-3">
                  <div class="col-md-6">
                    <label for="cc-name" class="form-label">Nombre de la tarjeta</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                    <small class="text-muted">Especifica el nombre completo como se muestra en la tarjeta</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="cc-number" class="form-label">Numero de la tarjeta</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
      
                  <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Fecha de vencimiento</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
      
                  <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
      
                <hr class="my-4">
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total a pagar</span>
                  
                </li>
                <br>
                
                <button class="w-100 btn btn-primary btn-lg" type="submit">Confirmar viaje</button>
              </form>
            </div>
          </div>
        </main>

      <br>
        
      </div>
      @endsection