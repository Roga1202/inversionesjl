<factura>
    <div class="well well-sm">
        <div class="row">
            <div class="col-xs-2">
                <input id="cliente" class="form-control typeahead" type="text" placeholder="Cliente" />
            </div>
            <div class="col-xs-2">
                <input class="form-control" type="text" placeholder="Apellido" readonly value="{apellido}" />
            </div>
            <div class="col-xs-2">
                <input class="form-control" type="text" placeholder="Cedula" readonly value="{cedula}" />
            </div>
            <div class="col-xs-2">
                <input class="form-control" type="text" placeholder="Dirección" readonly value="{direccion}" />
            </div>
            <div class="col-xs-2">
                <input class="form-control" type="text" name="estado" id="estado" placeholder="Estado" readonly value="{estado}" />
            </div>
            <div class="col-xs-2">
                <input class="form-control" type="text" name="ciudad" name="ciudad" placeholder="Ciudad" readonly value="{ciudad}" />
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-7">
            <input ref="producto" id="producto" class="form-control" type="text" placeholder="Nombre del producto" />
        </div>
        <div class="col-xs-2">
            <input ref="cantidad" id="cantidad" class="form-control" type="text" placeholder="Cantidad" />
        </div>
        <div class="col-xs-2">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">S/.</span>
                <input class="form-control" type="text" placeholder="Precio" value="{precio}" readonly />
            </div>
        </div>
        <div class="col-xs-1">
            <button onclick={__addProductoToDetail} class="btn btn-primary form-control" id="btn-agregar">
                <i class="glyphicon glyphicon-plus"></i>
            </button>
        </div>
    </div>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width:40px;"></th>
            <th>Producto</th>
            <th style="width:100px;">Cantidad</th>
            <th style="width:100px;">P.U</th>
            <th style="width:100px;">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr each={detalles}>
            <td>
                <button onclick={__removeProductFromDetail} class="btn btn-danger btn-xs btn-block">X</button>
            </td>
            <td>{nombre}</td>
            <td class="text-right">{cantidad}</td>
            <td class="text-right">$ {precio}</td>
            <td class="text-right">$ {total}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" class="text-right"><b>IVA</b></td>
            <td class="text-right">$ {iva.toFixed(2)}</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"><b>Sub Total</b></td>
            <td class="text-right">$ {subTotal.toFixed(2)}</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"><b>Total</b></td>
            <td class="text-right">$ {total.toFixed(2)}</td>
        </tr>
        </tfoot>
    </table>

    <button onclick={__save} class="btn btn-default btn-lg btn-block">
        Guardar
    </button>

    <script>
        var self = this;

        self.detalles = [];
        self.iva = 0;
        self.subTotal = 0;
        self.total = 0;


        self.on('mount',function(){
            __clienteautocomplete();
            __productoautocomplete();
        })

        __removeProductFromDetail(e) {
            var item = e.item,
                index = this.detalles.indexOf(item);

            this.detalles.splice(index, 1);
            __calculate();
        }

        __addProductoToDetail(){
            var validacion= validar_cuerpo(self.PR_ID,self.nombre_producto);
            if(validacion){
                self.detalles.push({
                    id : self.PR_ID,
                    nombre : self.nombre_producto,
                    cantidad :  parseInt(self.refs.cantidad.value),
                    precio : parseFloat(self.precio),    
                    total : parseFloat(self.refs.cantidad.value * self.precio)
                });

            self.PR_ID = '';
            self.precio = '';
            self.refs.cantidad.value = '';
            self.nombre_producto = '';
            console.log(self.detalles);
            __calculate();
            document.getElementById("producto").value = "";
            }
        }

        __save() {
            var validacion= validar_cliente(self.CL_ID,self.nombre_cliente);
            if(validacion){
                $.post(baseUrl('factura/crear'), {
                    client_id: self.CL_ID,
                    iva: self.iva,
                    subTotal: self.subTotal,
                    total: self.total,
                    detail: self.detalle
                }, function(r){
                    if(r.response) {
                        window.location.href = baseUrl('factura');
                    } else {
                        alert('Ocurrio un error');
                    }
                }, 'json')
            }
        }

        function __calculate(){
            var total= 0

            self.detalles.forEach(function(e){
                total +=  e.total;
            });

            self.total = total;
            self.subTotal = parseFloat(total/ 12);
            self.iva = parseFloat(total - self.subTotal);
        }



        function __clienteautocomplete(){
            var cliente = $("#cliente"),
                options = {
                    url: function(q){
                        return baseUrl('factura/findCliente?q=' + q);
                    },
                getValue : "CL_primer_nombre",
                list: {
                    onClickEvent: function() {
                        var e = cliente.getSelectedItemData();
                        self.CL_ID = e.CL_ID;
                        self.nombre_cliente = e.PR_nombre;
                        self.apellido = e.CL_primer_apellido;
                        self.cedula = e.CL_CI;
                        self.direccion = e.CL_direccion;
                        self.estado = getestado(e.CL_estado);
                        self.ciudad = getciudad(e.CL_ciudad);
                        self.update();
                    }
                }
            };

            function getestado($id){
                $.ajax({
                    url: '/estado/'+$id,
                    type: 'GET',
                    async: false,
                    dataType: 'json',
                    success: function(data){
                        $.each(data, function(key,value){
                            nombre = data.ES_nombre;
                        });
                    }
                });
                return nombre;
            }

            
            function getciudad($ciudad){
                $.ajax({
                    url: '/ciudad/'+$ciudad,
                    type: 'GET',
                    async: false,
                    dataType: 'json',
                    success: function(data){
                        $.each(data, function(key,value){
                            nombre = data.CI_nombre;
                        });
                    }
                });
                return nombre;
            }

            $("#cliente").easyAutocomplete(options);
        }

        function __productoautocomplete(){

            var producto = $("#producto"),
                options = {
                    url: function(q){
                        return baseUrl('factura/findProducto?q=' + q);
                    },
                getValue : "PR_nombre",
                list: {
                    onClickEvent: function() {
                        var e = producto.getSelectedItemData();
                        self.PR_ID = e.PR_ID;
                        self.nombre_producto = e.PR_nombre;
                        self.presentacion = e.PR_presentacion;
                        self.unidad = e.PR_unidad;
                        self.precio = e.PR_precio;
                        self.update();
                    }
                }
            };
            $("#producto").easyAutocomplete(options);
        }

        

        function validar_cuerpo($id,$nombre){

            var producto,cantidad;
            cantidad = document.getElementById("cantidad").value;
            producto = document.getElementById("producto").value;

            expresion_string = /\w/;
            expresion_numeros = /\d/;
            //producto
            if(producto === ""){
                alert("El campo producto es Obligatorio");
                return false;
            }
            if(producto.lenght>20){
                alert("El campo producto es muy largo");
            }
            validacion_producto= validar_producto($id,$nombre);
            if(validacion_producto != producto){
                alert("El Producto no se encuentra registado");
                return false;
            }
            //cantidad
            if(cantidad === ""){
                alert("El campo cantidad es Obligatorio");
                return false;
            }else{
                if(!expresion_numeros.test(cantidad)){
                    alert("El campo solo puede tener numeros")
                    return false;
                }
            }
            return true;

        }

        function validar_producto($id,$nombre){
            $.ajax({
                url: '/producto/'+$id,
                type: 'GET',
                async: false,
                dataType: 'json',
                success: function(data){
                    $.each(data, function(key,value){
                        if($nombre == data.PR_nombre){
                            $nombre = data.PR_nombre;
                        }
                    });
                }
            });
            return $nombre;
        }

        function validar_cliente($id,$nombre){
            var cliente;

            cliente = document.getElementById("cliente").value;

            expresion_string = /\w/;
            //cliente
            if(cliente === ""){
                alert("El campo cliente es Obligatorio");
                return false;
            }else{
                if(!expresion_string.test(cliente)){
                    alert("El campo cliente solo puede tener letras")
                    return false;
                }
                validacion_cliente= validar_cliente_bsd($id,$nombre);
                if(validacion_cliente != cliente){
                    alert("El Cliente no se encuenta registrado");
                    return false;
                }
            }
            if(cliente.lenght>20){
                alert("El campo cliente es muy largo");
            }
            
        }


        function validar_cliente_bsd($id,$nombre){
            $.ajax({
                url: '/cliente/'+$id,
                type: 'GET',
                async: false,
                dataType: 'json',
                success: function(data){
                    $.each(data, function(key,value){
                        if($nombre == data.CL_nombre){
                            $nombre = data.CL_nombre;
                        }
                    });
                }
            });
            return $nombre;
        }

    </script>   
</factura>