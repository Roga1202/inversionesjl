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
            <input id="product" class="form-control" type="text" placeholder="Nombre del producto" />
        </div>
        <div class="col-xs-2">
            <input id="quantity" class="form-control" type="text" placeholder="Cantidad" />
        </div>
        <div class="col-xs-2">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">S/.</span>
                <input class="form-control" type="text" placeholder="Precio" value="" readonly />
            </div>
        </div>
        <div class="col-xs-1">
            <button onclick={__addProductToDetail} class="btn btn-primary form-control" id="btn-agregar">
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
        <tr each={detail}>
            <td>
                <button onclick={__removeProductFromDetail} class="btn btn-danger btn-xs btn-block">X</button>
            </td>
            <td></td>
            <td class="text-right"> </td>
            <td class="text-right"></td>
            <td class="text-right"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" class="text-right"><b>IVA</b></td>
            <td class="text-right"></td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"><b>Sub Total</b></td>
            <td class="text-right"></td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"><b>Total</b></td>
            <td class="text-right"></td>
        </tr>
        </tfoot>
    </table>

    <button  class="btn btn-default btn-lg btn-block">
        Guardar
    </button>

    <script>
        var self = this;

        self.on('mount',function(){
            __clienteautocomplete();
        })

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
                        self.id = e.CL_ID;
                        self.apellido = e.CL_primer_apellido;
                        self.cedula = e.CL_CI;
                        self.direccion = e.CL_direccion;
                        estado = getciudad(e.CL_estado);
                        self.ciudad = e.CL_ciudad;
                        self.update();
                    }
                }
            };

            function getciudad($id){
            var resultado;
                $.ajax({
                    url: '/estado/'+$id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        var resultado = $.each(data, function(key,value){
                            var resultado = value;
                            return resultado;
                        });
                    }
                });
             }
            $("#cliente").easyAutocomplete(options);
        }
    </script>
</factura>