<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirmación de Pedido</title>
  </head>
  <body>
      Hola! <br>
      Recientemente realizaste una cotización en <a href="http://pecerasgratis.com">Mi Pecera</a>

      <h3>Resumen de tu cotización:</h3>
      <ul>
          @if (isset($session['liters']))
            <li>Litros: {{ $session['liters'] }}</li>
            <li>Agua: {{ $session['water']->name }}</li>
          @else
              <li>Pecera: {{ $session['tank']->name }}</li>
              <li>Agua: {{ $session['water']->name }}</li>
              @if (!isset($session['package']))
                  @if (isset($session['floor']))
                    <li>Suelo: {{ $session['floor']->name }}</li>
                  @else
                    <li>Suelo: -</li>
                  @endif
                  @if (isset($session['decoration']))
                  <li>Decoracion: {{ $session['decoration']->name }}</li>
                  @else
                    <li>Plantas: -</li>
                  @endif
                  @if (isset($session['ornament']))
                    <li>Adornos: {{ $session['ornament']->name }}</li>
                  @else
                    <li>Adornos: -</li>
                  @endif
                  @if (isset($session['fish']))
                    <li>Paquete de Peces: {{ $session['fish']->name }}</li>
                  @else
                    <li>Paquete de Peces: -</li>
                  @endif
              @else
                  <li>Paquete: {{ $session['package']->name }}</li>
              @endif
          @endif
      </ul>
      @if (isset($session['liters']))
        @if (isset($session['price_id']))
          <h3>Mantenimiento</h3>
          <ul>
              <li>${{ number_format($session['price']->maintenance) }} de mantenimiento mensuales.</li>
          </ul>
          @else
            <h3>Mantenimiento</h3>
              <ul>
                  <li>Nuestro equipo se pondrá en contacto contigo para el mantenimiento de tu pecera.</li>
              </ul>
          @endif
      @else
          <h3>Venta</h3>
          <ul>
              <li>Inversión inicial de ${{ number_format($session['price']->sale) }} + ${{ number_format($session['price']->maintenance) }} de mantenimiento mensuales.</li>
          </ul>
          <ul>
              <li>Se incluye reposición de peces aumentando el 10% de la mensualidad</li>
          </ul>

          <h3>Renta</h3>
          <ul>
              <li>${{ number_format($session['price']->rent) }} de mensualidad que incluye mantenimiento.</li>

          </ul>
          <ul>
              <li>Traslado de Acuario (otro piso, otro espacio, cambio de lugar)</li>
              <li>Reposición de Equipo</li>
              <li>Reposición de Peces</li>
          </ul>

          <h3>Además incluye:</h3>
          <ul>
              <li>Mueble</li>
              <li>Acuario con Equipo de Filtración, Tapa e Iluminación</li>
              <li>Decoración</li>
              <li>Peces</li>
              <li>Alimento</li>
              <li>Garantizamos el equilibrio biológico del acuario</li>
              <li>Visita de emergencia por teléfono o si es necesario de manera física</li>
          </ul>
      @endif

  </body>
</html>
