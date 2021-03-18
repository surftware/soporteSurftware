@extends('layouts.plantilla')

@section('content')

    <h3>Ingrese datos para realizar pedido:</h3>

    <form method="post" action ="conexion.php">

        <div>
            <label for="ap_Paterno" > Paterno: </label>
            <input type="text" name="paterno" autofocus="autofocus" placeholder="Apellido Paterno" value="" required>
        </div>
        <br>
        <div>
            <label for="ap_Materno"> Materno: </label>
            <input type="text" name="materno" placeholder="Apellido Materno" value="" required>
        </div>
        <br>
        <div>
            <label for="nombre"> Nombre: </label>
            <input type="text" name="nombre" placeholder="Nombre" value="" required>
        </div>
        <br>
        <div>
            <label for="celular"> Celular: </label>
            <input type="text" name="celular" Placeholder="Celular" value="" required>
        </div>
        <br>
        <div>
            <label for="telefono"> Teléfono: </label>
            <input type="text" name="telefono" Placeholder="Teléfono" value="" required>
        </div>
        <br>
        <div>
            <label for="correo"> E-mail: </label>
            <input  type="email" name="correo" placeholder="Correo" value="" required>
        </div>
        <br>
        <hr>

        <h3>Direccion</h3>

        <div>
            <label for="delegacion"> Delegacion: </label>
            <input type="text" name="delegacion" Placeholder="Delegacion" value="" required>
        </div>
        <br>
        <div>
            <label for="colonia"> Colonia: </label>
            <input type="text" name="colonia" Placeholder="Colonia" value="" required>
        </div>
        <br>
        <div>
            <label for="calle"> Calle: </label>
            <input type="text" name="calle" Placeholder="Calle" value="" required>
        </div>
        <br>
        <div>
            <label for="numero"> N° Exterior: </label>
            <input type="text" name="numero" Placeholder="Numero." value="" size="5" required>
        </div>
        <br>
        <div>
            <label for="codigoPostal"> C.P: </label>
            <input type="text" name="codigoPostal" Placeholder="Codigo Postal" value="" size="5" required>
        </div>
        <br>
        <hr>
        <h3>Equipo a revisar</h3>
        <div>
            <input type="radio" id="pc" name="computadora" value="pc">
            <label for="pc">PC</label><br>
            <input type="radio" id="laptop" name="computadora" value="laptop">
            <label for="laptop">Laptop</label><br>
        </div>
        <br>
        <div>
            <label for="marca"> Marca: </label>
            <input type="text" name="marca" Placeholder="Marca" value="">
        </div>
        <br>        
        <div>
            <label for="modelo"> Modelo: </label>
            <input type="text" name="modelo" Placeholder="Modelo" value="">
        </div>
        <br>
        <div>
            <label for="ram"> Cantidad de RAM: </label>
            <input type="text" name="ram" Placeholder="RAM" value="">
        </div>
        <br>
        <div>
            <label for="tipoRam"> Tipo de RAM: </label>
            <input type="text" name="tipoRam" Placeholder="RAM" value="">
        </div>
        <br>
        <div>
            <label for="discoDuro"> Cantidad Disco Duro: </label>
            <input type="text" name="discoDuro" Placeholder="Disco Duro" value="">
        </div>
        <br>
        <div>
            <label for="descripcionFalla"> Describir Falla: </label><br><br>
            <textarea name="descripcionFalla" rows="10" cols="40"> </textarea>
        </div>           
        <br>
        <button type="submit">
            Ordenar 
        </button>

    </form>
@endsection
