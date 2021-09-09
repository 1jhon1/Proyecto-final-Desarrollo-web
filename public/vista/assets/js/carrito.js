let total;

class Carrito {

    //AÃ±adir producto al carrito
    comprarProducto(e){
        e.preventDefault();
        //Delegado para agregar al carrito
        if(e.target.classList.contains('agregar-carrito')){
            const producto = e.target.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto);
         
        
            console.log("envio exitoso mario");
        }
    }

    //Leer datos del producto
    leerDatosProducto(producto){
        const infoProducto = {
            idTienda: producto.querySelector('small').textContent,
            idPro: producto.querySelector('a').getAttribute('data-id'),
            imagen : producto.querySelector('img').src,
            titulo: producto.querySelector('h4').textContent,
            precio: producto.querySelector('.precio span').textContent,
            id: producto.querySelector('a').getAttribute('data-id'),
            cantidad: 1,
            observacion:2
        }


             //validar que las tiendas
             let ValidarIdTienda;
             let aux=1;
             ValidarIdTienda = this.obtenerProductosLocalStorage();
             ValidarIdTienda.forEach(function (Tienda){
             
                        
                 if(Tienda.idTienda !== infoProducto.idTienda){
                     ValidarIdTienda = Tienda.idTienda;
                      aux=2;
                 }
             });
             console.log('auxiliar'+aux);
                console.log('localstora'+ValidarIdTienda);
                console.log('tienda formu'+infoProducto.idTienda);
             if(aux===2){
                 Swal.fire({
                     type: 'error',
                     title: 'Oops...',
                     text: 'Los Producto que tiene en el carrito no son de esta tienda',
                     showConfirmButton: false,
                     timer: 4000
                 })
             }

        let productosLS;
        let auxproducto=1;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (productoLS){
            
            if(productoLS.id === infoProducto.id){
                productosLS = productoLS.id;
                auxproducto=2;
            }
        });
       // if(productosLS === infoProducto.id){
            console.log('pro:  '+auxproducto);
        if(auxproducto===2){
            Swal.fire({
                type: 'info',
                title: 'Oops...',
                text: 'El producto ya esta agregado',
                showConfirmButton: false,
                timer: 2000
            })
        }
        console.log('lala'+ValidarIdTienda);
        console.log('lili'+infoProducto.idTienda);
        if(auxproducto===1 && aux===1){
            Swal.fire({
            type: 'success',
            title: 'Felicitaciones...',
            text: 'Producto agregado al carrito con exito',
            showConfirmButton: false,
            timer: 2000
        })
            this.insertarCarrito(infoProducto);
        }
        
    }

    //muestra producto seleccionado en carrito
    insertarCarrito(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
       
           <td>
                <img src="${producto.imagen}" width=70>
            </td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            
            <td>
                <a href="#" class="borrar-producto fas fa-times-circle" data-id="${producto.id}"></a>
            </td>
            <b style="font-size: 0px"> ${producto.idTienda} 
            ${producto.idPro}</b>
        `;


    let productosLocalStora;
    //obtengo los datos del localstora
    productosLocalStora = this.obtenerProductosLocalStorage();
    total=productosLocalStora.length+1;
    document.getElementById('totalll').innerHTML=+total;
        listaProductos.appendChild(row);
        this.guardarProductosLocalStorage(producto);

    }

    //Eliminar el producto del carrito en el DOM
    eliminarProducto(e){
        e.preventDefault();
        let producto, productoID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productoID = producto.querySelector('a').getAttribute('data-id');
            Swal.fire({
                type: 'error',
                title: '...',
                text: 'Producto eliminado del carrito',
                showConfirmButton: false,
                timer: 2000
            })
        }
      
        this.eliminarProductoLocalStorage(productoID);
        this.calcularTotal();

    }

    //Elimina todos los productos
    vaciarCarrito(e){
        e.preventDefault();
        while(listaProductos.firstChild){
            listaProductos.removeChild(listaProductos.firstChild);
        }
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Carrito vacio',
            showConfirmButton: false,
            timer: 2000
        })
        
        this.vaciarLocalStorage();

        return false;
    }

    ProductosCarritoss()
    {
        let productosLS;
        let total;
        //obtengo los datos del localstora
        productosLS = this.obtenerProductosLocalStorage();
        total=productosLS.length;
        document.getElementById('productoscarrito').innerHTML = "$/. " + total;

        
    }

    //Almacenar en el LS
    guardarProductosLocalStorage(producto){
        let productos;
        //Toma valor de un arreglo con datos del LS
        productos = this.obtenerProductosLocalStorage();
        //Agregar el producto al carrito
        productos.push(producto);
        //Agregamos al LS
        localStorage.setItem('productos', JSON.stringify(productos));
    }

    //Comprobar que hay elementos en el LS
    obtenerProductosLocalStorage(){
        let productoLS;

        //Comprobar si hay algo en LS
        if(localStorage.getItem('productos') === null){
            productoLS = [];
        }
        else {
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }

    //Mostrar los productos guardados en el LS
    leerLocalStorage(){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (producto){
            //Construir plantilla
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${producto.idTienda} ${producto.idPro}
                    <img src="${producto.imagen}" width=50>
                </td>
                <td  style="width: 20px; height: 20px;">${producto.titulo}</td>
                <td  style="width: 20px; height: 20px;">${producto.precio}</td>
                <td  style="width: 20px; height: 20px;">
                    <a href="#" class="borrar-producto fa fa-times-circle" style="color:red" data-id="${producto.id}"></a>
                </td>
            `;

            listaProductos.appendChild(row);
        });
    }

    //Mostrar los productos guardados en el LS en compra.html
    //Mostrar los productos guardados en el LS en compra.html
    leerLocalStorageCompra(){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (producto){
            const row = document.createElement('tr');
            row.innerHTML = `
               
                <td>
                    <img src="${producto.imagen}" width=100>
                    ${producto.idTienda} ${producto.idPro}
                </td>
                <td>${producto.titulo}</td>
                <td>${producto.precio}</td>
                <td class="pro-quantity">
                    <input type="number" name="cantidad[]" class="form-control cantidad pro-qty" min="1" value=${producto.cantidad}>
                </td>
                <td id='subtotales'>${producto.precio * producto.cantidad}</td>
                <td>
                    <a href="#"  class="borrar-producto btn btn-danger" style="font-size:20px" data-id="${producto.id}">X</a>
                </td>

                <input type="hidden" name="idTienda[]" value=${producto.idTienda}>    
                <input type="hidden" name="idProducto[]" value=${producto.idPro}>
                <input type="hidden" name="nombreProducto[]" value=${producto.titulo}>
                <input type="hidden" name="precioProducto[]" value=${producto.precio}>
            `;

            listaCompra.appendChild(row);
        });
    }

    //Eliminar producto por ID del LS
    eliminarProductoLocalStorage(productoID){
        let productosLS;
        //Obtenemos el arreglo de productos
        productosLS = this.obtenerProductosLocalStorage();
        //Comparar el id del producto borrado con LS
        productosLS.forEach(function(productoLS, index){
            if(productoLS.id === productoID){
                productosLS.splice(index, 1);
            }
        });

        //AÃ±adimos el arreglo actual al LS
        localStorage.setItem('productos', JSON.stringify(productosLS));
    }

    //Eliminar todos los datos del LS
    vaciarLocalStorage(){
        localStorage.clear();
    }

    //Procesar pedido
    procesarPedido(e){
        e.preventDefault();

        if(this.obtenerProductosLocalStorage().length === 0){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El carrito esta vacio, agregue algun producto',
                showConfirmButton: false,
                timer: 2000
            })
        }
        else {
            location.href="http://127.0.0.1:8000//viewproduct/compra";
        }
    }

    //Calcular montos
    calcularTotal(){
        let productosLS;
        let total = 0, igv = 0, subtotal = 0;
        productosLS = this.obtenerProductosLocalStorage();
        for(let i = 0; i < productosLS.length; i++){
            let element = Number(productosLS[i].precio * productosLS[i].cantidad);
            total = total + element;
            
        }
        
        igv = parseFloat(total * 0.18).toFixed(2);
        subtotal = parseFloat(total-igv).toFixed(2);

        document.getElementById('subtotal').innerHTML = "$/. " + subtotal;
        document.getElementById('igv').innerHTML = "$/. " + igv;
        document.getElementById('total').value = "$/." + total.toFixed(2);
    }

    obtenerEvento(e) {
        e.preventDefault();
        let id, cantidad, producto, productosLS;
        if (e.target.classList.contains('cantidad')) {
            producto = e.target.parentElement.parentElement;
            id = producto.querySelector('a').getAttribute('data-id');
            cantidad = producto.querySelector('input').value;
            if(cantidad>=0){
            let actualizarMontos = document.querySelectorAll('#subtotales');
            productosLS = this.obtenerProductosLocalStorage();
            productosLS.forEach(function (productoLS, index) {
                if (productoLS.id === id) {
                    productoLS.cantidad = cantidad;                    
                    actualizarMontos[index].innerHTML = Number(cantidad * productosLS[index].precio);
                }    
            });
            localStorage.setItem('productos', JSON.stringify(productosLS));

        }else{
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'cantidad no puede ser menor que 1',
                showConfirmButton: false,
                timer: 2000
            })
        }
            
        }
        else {
            console.log("click afuera");
        }
    }
}